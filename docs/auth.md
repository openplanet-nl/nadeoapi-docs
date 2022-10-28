---
icon: 'fa-lock'
---

# Authentication
This guide will explain how to authenticate with Nadeo's API. There are 2 methods of doing so, one is via a Ubisoft account, and one is via a dedicated server account. Note that the dedicated server account way is easier but imposes **some** limitations on what you can access with the API, but it could be enough.

Refer to Miss' [Nadeo Go package](https://github.com/codecat/gonadeo) for a complete example.

---

## With a Ubisoft account
Send a POST request to the following URL:

	https://public-ubiservices.ubi.com/v3/profiles/sessions

With the following request headers:

	Content-Type: application/json
	Ubi-AppId: 86263886-327a-4328-ac69-527f0d20a237
	Authorization: Basic ...

Where the `Authorization` header is a basic authorization of your Ubisoft email and password. (In Go for example, this is via [SetBasicAuth](https://pkg.go.dev/net/http#Request.SetBasicAuth))

Also, make sure you pass a valid user agent that Ubisoft can understand. Ubisoft blocks certain default user agents, so make sure you pass your own. Include your project name and a way to contact you. (This counts not only for the Ubisoft API, but also Nadeo's API.) For example:

	User-Agent: My amazing app / my.email.address@example.com

The response will contain a Ubisoft authentication ticket that you can use for Nadeo's Ubiservices authentication endpoint. Next, send a POST request to the following URL:

	https://prod.trackmania.core.nadeo.online/v2/authentication/token/ubiservices

With the following request headers:

	Content-Type: application/json
	Authorization: ubi_v1 t=<full ubi token>

Where `Authorization` has your Ubisoft account ticket right after `t=`.

You also have to provide a request body, which is described below in the [Authorization section](#authorization).

## With a dedicated server account
If you don't want to or can't use a Ubisoft account for authentication, you can use a [dedicated server account](https://players.trackmania.com/server/dedicated). Note that there are some limitations on what you can do with dedicated server tokens.

Send a POST request to the following URL:

	https://prod.trackmania.core.nadeo.online/v2/authentication/token/basic

With the following request headers:

	Content-Type: application/json
	Authorization: Basic ...

Where the `Authorization` header is a basic authorization of your dedicated server account. (In Go for example, this is via [SetBasicAuth](https://pkg.go.dev/net/http#Request.SetBasicAuth))

You also have to provide a request body, which is described below in the [Authorization section](#authorization).

---

# Authorization
For both authentication methods described above, you have to provide a body telling the API what to authenticate with. The body of the request must be a Json object with the desired audience name:

```json
{"audience":"NadeoLiveServices"}
```

Note that if you don't provide a json body, you get a token for audience `NadeoServices`. See a mapping of APIs and available audiences [here](#base-urls-and-audiences).

This will give you a [JSON web token](https://en.wikipedia.org/wiki/JSON_Web_Token) together with a refresh token:

```json
{
	"accessToken":"eyJhbGciOiJIUzI1NiIsImVudiI6InRyYWNrbWFuaWEtcHJvZCIsInZlciI6IjEifQ.<payload>.<signature>",
	"refreshToken":"eyJhbGciOiJIUzI1NiIsImVudiI6InRyYWNrbWFuaWEtcHJvZCIsInZlciI6IjEifQ.<payload>.<signature>"
}
```

If you URL-base64-decode the payload, you get the following json object:

```json
{
	"jti":"<uuid>",
	"iss":"NadeoServices",
	"iat":1595191016,
	"rat":1595192816,
	"exp":1595194616,
	"aud":"NadeoLiveServices",
	"usg":"Server",
	"sid":"<uuid>",
	"sub":"<uuid>",
	"aun":"mm",
	"rtk":false,
	"pce":false
}
```

Where `exp` defines the expiration time, and `rat` the time after which you are able to refresh the token.

## Token refreshing
To refresh your token, send a POST to the following URL:

	https://prod.trackmania.core.nadeo.online/v2/authentication/token/refresh

With the `Authorization` header set to `nadeo_v1 t=<full refresh token>`.

The response is the same as with normal authentication.

---

# Base URLs and audiences
The API's base URL's and their necessary audiences are:

URL | Audience
---|---
https://prod.trackmania.core.nadeo.online/ | NadeoServices
https://live-services.trackmania.nadeo.live/ | NadeoLiveServices
https://club.trackmania.nadeo.club | NadeoClubServices
https://competition.trackmania.nadeo.club | NadeoClubServices
https://matchmaking.trackmania.nadeo.club | NadeoClubServices
