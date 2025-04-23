---
position: 2
---

# Ubisoft account

Using a Ubisoft account for authentication lets you access all API endpoints as a real user. This process mimicks the game's authentication procedure.

## Setting up a Ubisoft account

It's generally recommended not to use your primary account for API access. Temporary or permanent restrictions or bans will affect your ability to play the game, so it's recommended to create a separate Ubisoft account for these use cases.

Exceptions to that recommendation apply when you're working on an Openplanet plugin (where you have easy access to the local player's access tokens) or when your use case requires one specific player's authentication information to access their own data (e.g. to retrieve their created maps or to change their account's zone). In those cases you should pay special attention to [rate limiting](/#responsible-usage) and general request frequency to avoid impacting the authenticated account's ability to play the game.

Note that creating a separate account does not protect you from IP bans or similar more severe restrictions (so this is obviously not a carte blanche for irresponsable API usage), but it can prevent accidental rate limit violations from affecting your primary Ubisoft account.

You can create a new account via the [Ubisoft website](https://www.ubisoft.com).

## Authentication process

The Ubisoft account authentication process requires you to send two separate requests.

- The first request authenticates your Ubisoft account with Ubisoft's account management API, which results in an authentication `ticket`.
- Using that `ticket`, the second request authenticates your account with Nadeo's account management API, giving you an access token.

### Acquiring a Ubisoft ticket

Send the following HTTP request using a tool/library of your choice:

```plain
POST https://public-ubiservices.ubi.com/v3/profiles/sessions

Headers:
    Content-Type: application/json
    Ubi-AppId: 86263886-327a-4328-ac69-527f0d20a237
    Authorization: Basic <email@address.com:password (base64-encoded)>
    User-Agent: <your project/contact information>
```

The `Ubi-AppId` header is a fixed value and should not be changed.

The `Authorization` header uses [Basic HTTP authentication](https://en.wikipedia.org/wiki/Basic_access_authentication#Client_side) for your dedicated server account credentials (e.g. `username:password` becomes `Basic dXNlcm5hbWU6cGFzc3dvcmQ=`).
In Go for example, this is done via [SetBasicAuth](https://pkg.go.dev/net/http#Request.SetBasicAuth) - other languages and libraries have their own utility methods for the same purpose.

Ubisoft blocks certain default user agents, so make sure you pass your own that includes your project name and a way to contact you. This is a good practice for all Ubisoft and Nadeo API endpoints you interact with.

The response contains a Ubisoft authentication `ticket` that you can use for authenticating with Nadeo's APIs as documented below.

#### Common issues

- I'm getting error responses with status code `429`.

Ubisoft's API imposes a rate limit on their authentication endpoints, and sending requests too frequently may get you temporarily restricted. This typically lasts up to an hour and cannot be circumvented.

- I'm getting error responses with status code `403` and error code `4000`.

Ubisoft's API blocks certain user agents (e.g. the default user agent set by the `requests` Python library). Make sure you're using a custom `User-Agent` header.

### Acquiring a Nadeo API access token

Send the following HTTP request using a tool/library of your choice:

```plain
https://prod.trackmania.core.nadeo.online/v2/authentication/token/ubiservices

Headers:
    Content-Type: application/json
    Authorization: ubi_v1 t=<Ubisoft ticket>
    User-Agent: <your project/contact information>

Body:
    { "audience": "NadeoLiveServices" }
```

The body of the request must be a JSON object with the desired audience name. The audience(s) you need depend on the APIs and endpoints you intend to interact with.

| URL                                          | Audience          |
| -------------------------------------------- | ----------------- |
| <https://prod.trackmania.core.nadeo.online/>   | NadeoServices     |
| <https://live-services.trackmania.nadeo.live/> | NadeoLiveServices |
| <https://meet.trackmania.nadeo.club>           | NadeoLiveServices |

Note that if you don't provide a body, you get a token for the audience `NadeoServices`.

If you plan to interact with API endpoints that require different audiences, you need to request multiple tokens and manage them separately.

## Next steps

The final response body contains an `accessToken` and a `refreshToken` which you can use for your API requests. See the [token usage guide](/auth/token) for information on how to use and manage tokens.
