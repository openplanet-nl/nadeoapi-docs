# OAuth authorization

This is a step-by-step instruction how to set up Trackmania OAuth for your application. It's basically a rewrite of the [official documentation](https://doc.trackmania.com/web-services/auth/) but it's aiming to provide a lot more context and explanations around the concepts at play.

## Creating an OAuth app

First, the Trackmania OAuth API needs to know about your application - in return it'll give you an identifier and a secret that you can later exchange for access tokens.

1. Navigate to [https://api.trackmania.com](https://api.trackmania.com) and log in with your Ubisoft account - this is necessary since each registered OAuth app has to be associated with a Ubisoft account that manages it. If you want, you can create a separate Ubisoft account just for this registration.
2. This website stores all your registered OAuth applications and lets you create new ones - which is what you'll do next. Click on `Create an OAuth2 Application`.
3. Fill in all the fields and save the application:
    - **Application's name** is self-explanatory - just pick a name that uniquely identifies the app you're working on.
    - **Homepage** is where you put a link to the application you're working on. It doesn't seem to be used to check the origin domain or anything like that, so it's more of an informational field to reference the associated real-world app.
    - **Description** should be straight-forward - just quickly describe what the application does.
    - **Redirect Uris** are all the possible URIs the OAuth server will accept when you ask it to redirect the user - in essence, these are the possible callback destinations where your users will be returned after they logged in. If you ask the OAuth server to redirect the user elsewhere, it will refuse and the flow will be stopped. This ensures the user cannot be redirected to an unexpected website that could potentially use their information for nefarious purposes.
    - **Confidential** is an extra setting that determines which type of client you're using. Public (i.e. not confidential) clients typically use the **Implicit grant** flow, which is no longer supported by the Trackmania OAuth API - therefore **you always want to set this to Confidential**. See [a more detailed explanation](https://oauth.net/2/client-types/) for reference. **Note that this field cannot be edited in an existing OAuth application so make sure you set this correctly when you create your application.**
4. The newly created OAuth application now shows two new fields at the top of the page:
    - The **Identifier** is used to *identify* your registered application - this is not a secret, and it's fine if the user comes in contact with this information.
    - The **Secret** is required by the OAuth server for authorization requests - it proves your application's authority to initiate the OAuth flow, and should never be accessible to your users (otherwise they could impersonate you and initiate the OAuth flow for others in your name).

This concludes the OAuth setup on `api.trackmania.com` - of course you can always come back and change settings later.

## Getting the access token

This part will describe the steps needed to request an access token from the Trackmania OAuth API.

To test this flow without having to write an entire application around it, you can use [Postman](https://www.postman.com/) (specifically [the OAuth dialog in the Authorization tab](https://learning.postman.com/docs/sending-requests/authorization/#oauth-20)) or any similar tool.

The Trackmania OAuth API supports two OAuth flows:

- **Authorization Code** is used for authorizing a user through the browser in order to access resources (like their identity) on `api.trackmania.com`. To use this flow, follow [the instructions in the next section](#user/ui-flow).
- **Client Credentials** is not bound to a user, instead it's a way to get a generic access token in order to access general resources on `api.trackmania.com` - mainly the tools to convert between players' account IDs and display names. To use this flow, follow [the instructions for machine-to-machine communication](#machine-to-machine-flow).

### User/UI flow

This follows the **Authorization Code** OAuth flow.

1. When you know a user wishes to start the OAuth flow, you need to first redirect them to the OAuth server - if the flow is started outside of a browser (e.g. inside the game through an Openplanet plugin), you'll need to ensure the link is opened in a new browser tab (and the user needs to be made aware of it).
The page you want the user to visit is `https://api.trackmania.com/oauth/authorize` - and you need to provide a couple query parameters:
    - `response_type` has to be set to `code` - this tells the OAuth API to use the **Authorization Code** flow (check [the OAuth explanation](/oauth#what-is-oauth) for context).
    - `client_id` has to be set to the **Identifier** from [the previous section where you registered the OAuth application](#creating-an-oauth-app). Remember, this field is not secret, so it's fine that this will be shown to the user in the URL they navigate to.
    - `scope` typically holds the authorization scopes the resulting access token should have - the Trackmania OAuth API supports the following scopes: `clubs`, `read_favorite`, and `write_favorite`. If you want to specify multiple scopes, separate them with spaces. See the API endpoints to see which scopes are required by each endpoint.
    - `redirect_uri` has to be one of the URIs that you previously defined in the OAuth application in [the previous section](#creating-an-oauth-app). This is where the user will be redirected to once they've logged in. In case it's not obvious: This has to be a link to a website you're hosting, since it's where you'll receive the code you need to retrieve the access token. Don't worry, you can keep this very simple - but without this part, the whole flow doesn't work.
    - `state` is not required, but it's a good practice to use. Provide a non-predictable random string, and at a later stage the API will respond with this value again - then you can check that the value is really the same, ensuring the API really responded to the expected request (i.e. to prevent [CSRF](https://en.wikipedia.org/wiki/Cross-site_request_forgery)).

_In summary, the request should look like this:_
```
GET https://api.trackmania.com/oauth/authorize
  ?response_type=code
  &client_id=CLIENT_ID
  &redirect_uri=https://yourapp.com/callback
  &state=randomstring
```

2. Next, the user has to log in with their Ubisoft account (and agree to the authorization request). Once they are done, they will automatically be redirected to your provided `redirect_uri`.
3. Once the user arrives at the `redirect_uri`, they will also carry two query parameters in the URL:
    - `code` is the authorization code that you will later exchange for the access token.
    - `state` should have the same value that you provided in step 1 - if it's different, then you know something went wrong and the OAuth flow was broken at some point.
4. Now that you've gotten your authorization code, you'll want to get your access token - the naive solution would be to make a request to the Trackmania OAuth API from inside the browser to exchange it. However, you now need the **Secret** from [the previous section where you registered the OAuth application](#creating-an-oauth-app) - which should not be made available to the user. So instead you'll want to send the code you just got to a separate back-end server that knows the secret (and is obviously inaccessible to the user).
Once that server has the code (and the `redirect_uri` that was just used), it can request the access token. **Note that this code is not immediately useful without knowing the secret, so it's not as sensitive as the access token itself - but it's still sensitive enough that you don't want to risk it being intercepted. So make sure this request to the server is made securely.**
5. Now that you have the authorization code and the secret in the same place, you need to ask the Trackmania OAuth API for your user's access token:
Send a `POST` request to `https://api.trackmania.com/api/access_token` with the following parameters. **Note that these parameters should be sent in the body** because they're of type `x-www-form-urlencoded` - make sure you add the `Content-Type` header if you're running into issues with that.
    - `grant_type` has to be set to `authorization_code` - this tells the OAuth API that you're sending a code that was previously generated by the API.
    - `client_id` has to be set to the **Identifier** from earlier.
    - `client_secret` has to be set to the **Secret** from earlier.
    - `code` is the authorization code you just received from your user.
    - `redirect_uri` is the URI that was used in the original login - so you need to make sure the UI sends that alongside the authorization code.

_In summary, the request should look like this:_
```
POST https://api.trackmania.com/api/access_token

  Content-Type: application/x-www-form-urlencoded
  Body:
    grant_type=authorization_code
    &client_id=CLIENT_ID
    &client_secret=CLIENT_SECRET
    &code=CODE
    &redirect_uri=https://yourapp.com/callback
```

6. The response to this request will contain the following fields:
    - `token_type` describes what kind of token it is. Typically this will be `bearer` which explains how to use it in follow-up requests.
    - `expires_in` is the number of seconds the access token will remain valid - they are typically valid for an hour before they expire.
    - `access_token` finally is the token you can use to identify the user. **It goes without saying that this is a sensitive secret, so make sure you store it safely if you need to persist it at all.**
    - `refresh_token` is an additional token you can use to get a new access token once the old one expires. It is not as sensitive as the access token itself, because it's only useful in conjunction with the client ID and secret - but it's still critical enough that you should also store it safely. See [the following chapter](#refreshing-your-access-token) for instructions on how to use it.

_The response will look like this:_
```json
{
  "token_type": "bearer",
  "expires_in": 3600,
  "access_token": "TOKEN",
  "refresh_token": "TOKEN"
}
```

### Machine-to-machine flow

This follows the **Client Credentials** OAuth flow.

As the name says, this is not meant for user authorization - the access token you get in this flow is not associated with a user, instead it's a generic token that lets you access general purpose resources on `api.trackmania.com`.

Since you don't need to communicate with a user, this flow is considerably simpler.

1. **The following request should only be sent from somewhere safe (i.e. a place that no ordinary user has access to) because it requires access to the OAuth application's secret.** Send a `POST` request to `https://api.trackmania.com/api/access_token` with the following parameters:
    - `grant_type` has to be set to `client_credentials` - this tells the OAuth API that you're just sending the OAuth application credentials in exchange for a generic access token.
    - `client_id` has to be set to the **Identifier** from earlier.
    - `client_secret` has to be set to the **Secret** from earlier.
    - `scope` typically holds the authorization scopes the resulting access token should have - the Trackmania OAuth API only supports scopes for the [User/UI flow](#user/ui-flow), so this parameter isn't needed here.

_In summary, the request should look like this:_
```
POST https://api.trackmania.com/api/access_token

  Content-Type: application/x-www-form-urlencoded
  Body:
    grant_type=client_credentials
    &client_id=CLIENT_ID
    &client_secret=CLIENT_SECRET
```

2. The response to this request will contain the following fields:
    - `token_type` describes what kind of token it is. Typically this will be `bearer` which explains how to use it in follow-up requests.
    - `expires_in` is the number of seconds the access token will remain valid - they are typically valid for an hour before they expire.
    - `access_token` finally is the generic token you can use to send requests against the Trackmania API endpoints. **It goes without saying that this is a sensitive secret, so make sure you store it safely if you need to persist it at all.**

_The response will look like this:_
```json
{
  "token_type": "bearer",
  "expires_in": 3600,
  "access_token": "TOKEN"
}
```

Using the access token obtained in this flow, you can't identify a user (since it's not associated with one) - but you can still use it to convert between player account IDs and their display names. Check out the *Accounts* endpoints to learn more.

### Refreshing your access token

Access tokens are typically valid for an hour - if you're using [Machine-to-machine flow](#machine-to-machine-flow), you can just get a new token the same way you got the original one since you already have access to all the credentials you need.

If you're using [User/UI flow](#user/ui-flow), you don't want to keep going through the same original flow since that requires user action (or at least a logged in browser session) - instead you can use a **refresh token**, which is typically valid for an entire month.

To get a new access token with it, send a `POST` request to `https://api.trackmania.com/api/access_token` with the following parameters:
  - `grant_type` has to be set to `refresh_token` - this tells the OAuth API that you're asking for a new access token without going through the whole `code` flow.
  - `client_id` has to be set to the **Identifier** from earlier.
  - `client_secret` has to be set to the **Secret** from earlier.
  - `refresh_token` has to be set to the token you received alongside your previous access token.

_In summary, the request should look like this:_
```
POST https://api.trackmania.com/api/access_token

  Content-Type: application/x-www-form-urlencoded
  Body:
    grant_type=refresh_token
    &client_id=CLIENT_ID
    &client_secret=CLIENT_SECRET
    &refresh_token=REFRESH_TOKEN
```

The response to this request will contain the following fields:
  - `token_type` describes what kind of token it is. Typically this will be `bearer` which explains how to use it in follow-up requests.
  - `expires_in` is the number of seconds the access token will remain valid - they are typically valid for an hour before they expire.
  - `access_token` is your refreshed token.
  - `refresh_token` is a new refresh token that you can use to go through the same refresh process again later.

_The response will look like this:_
```json
{
  "token_type": "bearer",
  "expires_in": 3600,
  "access_token": "TOKEN",
  "refresh_token": "TOKEN"
}
```
