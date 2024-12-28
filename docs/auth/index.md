---
name: Authentication
pages:
  - ubi
  - dedi
  - token
---

# Authentication

This guide explains how to authenticate with Nadeo's APIs. There are 2 available methods:

- [via a dedicated server account](/auth/dedi)
- [via a Ubisoft account](/auth/ubi)

Dedicated server account authentication is easier to implement but imposes some limitations on what you can access with the API. The relevant restrictions are documented on each of the endpoint documentation pages.

Both authentication paths result in one or more access tokens - see the [token usage guide](/auth/token) for information on how to use and manage them.

For a complete authentication implementation example, you can refer to [Miss' Nadeo Go package](https://github.com/codecat/gonadeo).

## Authentication in Openplanet

If you need to make requests to Nadeo API endpoints from inside an Openplanet plugin, don't handle any of the authentication logic yourself. Instead, use the [NadeoServices dependency](https://openplanet.dev/docs/reference/nadeoservices) as a central authentication plugin.
