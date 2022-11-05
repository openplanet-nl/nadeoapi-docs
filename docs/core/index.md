---
dirs:
  - accounts
  - records
  - maps
  - meta
---

# Core API
This API is the main API which the game talks to. Most of it endpoints requires a token with the `NadeoServices` audience.

Through this API, tokens for specific audiences can be requested (see [Authentication](/auth)). It's also the place where most of the game's internal requests related to player accounts go to.

## Endpoints list
There is [an endpoint that provides all of the available endpoints](/core/meta/routes). It does not require any authentication, and as such can be [viewed directly in the browser](https://prod.trackmania.core.nadeo.online/api/routes).

Tokens authenticated through dedicated server accounts as described in [Authentication](/auth) can not use certain API's. You can view which API's those are by using the `usage` parameter. This means there are 3 endpoints to query:

* `https://prod.trackmania.core.nadeo.online/api/routes` - Shows all available endpoints
* `https://prod.trackmania.core.nadeo.online/api/routes?usage=Client` - Shows endpoints intended for clients
* `https://prod.trackmania.core.nadeo.online/api/routes?usage=Server` - Shows endpoints intended for servers

Important to note is that at the time of writing, servers do not have access to the [display names API](/core/accounts/display-names), which is why most API usage should be using the Ubisoft authentication method rather than the dedicated server method.

## Endpoints history
We are tracking this endpoint API [through Github](https://github.com/openplanet-nl/core-api-tracking/commits/master) for changes Nadeo makes in real time. This is also pushed to [Discord](https://openplanet.dev/link/discord) in our `#announce` channel.
