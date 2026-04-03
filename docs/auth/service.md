---
position: 1
---
# Service account

This authentication method lets you request access tokens in the name of a real user account, inheriting all the user's permissions and abilities.

Service accounts are the permanent replacement for the now-defunct [Ubisoft account flow](/auth/ubi).

## Setting up a service account

A service account is always bound to a Ubisoft account. Visit [Trackmania.com's service account page](https://www.trackmania.com/player/service-account) to create/update your service account.

Note that every Ubisoft account can only have one service account.

Make sure to store the password after creating your account as it can't be retrieved again later.

The service account directly maps to your Ubisoft account so it's generally recommended not to use your primary account for API access. Temporary or permanent restrictions or bans will affect your ability to play the game, so it's recommended to create a separate Ubisoft account for these use cases.

Exceptions to that recommendation apply when you're working on an Openplanet plugin (where you have easy access to the local player's access tokens) or when your use case requires one specific player's authentication information to access their own data (e.g. to retrieve their created maps or to change their account's zone). In those cases you should pay special attention to [rate limiting](/#responsible-usage) and general request frequency to avoid impacting the authenticated account's ability to play the game.

Note that creating a separate account does not protect you from IP bans or similar more severe restrictions (so this is obviously not a carte blanche for irresponsible API usage), but it can prevent accidental rate limit violations from affecting your primary Ubisoft account.

## Acquiring a Nadeo API access token

Send the following HTTP request using a tool/library of your choice:

```plain
POST https://prod.trackmania.core.nadeo.online/v2/authentication/token/basic

Headers:
    Content-Type: application/json
    Authorization: Basic <login:password (base64-encoded)>
    User-Agent: <your project/contact information>

Body:
    { "audience": "NadeoLiveServices" }
```

Note that **this endpoint uses the service account's login, not the underlying Ubisoft account**. You can find the service account's login on [Trackmania.com's service account page](https://www.trackmania.com/player/service-account).

The `Authorization` header uses [Basic HTTP authentication](https://en.wikipedia.org/wiki/Basic_access_authentication#Client_side) for your service account credentials (e.g. `username:password` becomes `Basic dXNlcm5hbWU6cGFzc3dvcmQ=`).
In Go for example, this is done via [SetBasicAuth](https://pkg.go.dev/net/http#Request.SetBasicAuth) - other languages and libraries have their own utility methods for the same purpose.

The body of the request must be a JSON object with the desired audience name. The audience(s) you need depend on the APIs and endpoints you intend to interact with.

| URL                                          | Audience          |
| -------------------------------------------- | ----------------- |
| <https://prod.trackmania.core.nadeo.online/>   | NadeoServices     |
| <https://live-services.trackmania.nadeo.live/> | NadeoLiveServices |
| <https://meet.trackmania.nadeo.club>           | NadeoLiveServices |

Note that if you don't provide a body, you get a token for the audience `NadeoServices`.

If you plan to interact with API endpoints that require different audiences, you need to request multiple tokens and manage them separately.

## Next steps

The response body contains an `accessToken` and a `refreshToken` which you can use for your API requests. See the [token usage guide](/auth/token) for information on how to use and manage tokens.
