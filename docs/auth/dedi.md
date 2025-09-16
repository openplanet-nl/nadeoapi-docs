---
position: 1
---
# Dedicated server account

If you don't want to or can't use a Ubisoft account for authentication, you can use a [dedicated server account](https://www.trackmania.com/player/dedicated-servers). Note that there are some limitations on what you can do with dedicated server tokens (as noted on relevant API endpoint documentation pages).

## Setting up a dedicated server account

A dedicated server account is always bound to a Ubisoft account. Visit [Trackmania.com's dedicated servers page](https://www.trackmania.com/player/dedicated-servers) to create a dedicated server account.

Make sure to store the password after creating your account as it can't be retrieved again later.

Note that your dedicated server account is directly associated to a Ubisoft account - if Nadeo/Ubisoft detect API usage they deem unacceptable, restrictions or bans on your dedicated server account may also have consequences for your associated Ubisoft account.

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

Note that **this endpoint uses the dedicated server login, not the server's account ID**. Both are shown on [Trackmania.com's dedicated servers page](https://www.trackmania.com/player/dedicated-servers), but only the login is needed.

The `Authorization` header uses [Basic HTTP authentication](https://en.wikipedia.org/wiki/Basic_access_authentication#Client_side) for your dedicated server account credentials (e.g. `username:password` becomes `Basic dXNlcm5hbWU6cGFzc3dvcmQ=`).
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
