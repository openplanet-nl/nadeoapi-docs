---
dirs:
  - accounts
  - records
  - maps
  - skins
  - meta
---

# Core API
This is the main API the game talks to. Most of its endpoints require a token with the `NadeoServices` audience.

Through this API, tokens for specific audiences can be requested (see [Authentication](/auth)).

## Deprecations

- The [display names endpoint](/core/accounts/display-names) has been removed on 2023-09-19 - to continue resolving `accountID` values to user names, it's recommended to use the relevant [OAuth API endpoint](/oauth/reference/accounts/id-to-name) instead.

## Endpoints list
There is [an endpoint that provides all of the available endpoints](/core/meta/routes). It does not require any authentication, and as such can be [viewed directly in the browser](https://prod.trackmania.core.nadeo.online/api/routes).

Tokens authenticated through dedicated server accounts as described in [Authentication](/auth) can not use certain APIs. You can view which APIs those are by using the `usage` parameter. This means there are 3 endpoints to query:

* `https://prod.trackmania.core.nadeo.online/api/routes` - Shows all available endpoints
* `https://prod.trackmania.core.nadeo.online/api/routes?usage=Client` - Shows endpoints intended for clients
* `https://prod.trackmania.core.nadeo.online/api/routes?usage=Server` - Shows endpoints intended for servers

Dedicated server accounts do not have access to all accounts-related endpoints, which is why it's recommended to use the Ubisoft authentication method rather than the dedicated server method.

## Endpoints history
We are tracking this endpoint API [through Github](https://github.com/openplanet-nl/core-api-tracking/commits/master) for changes Nadeo makes in real time. This is also pushed to [Discord](https://openplanet.dev/link/discord) in our `#announce` channel.
