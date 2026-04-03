---
name: Authentication
category: general
icon: fa-lock
pages:
  - service
  - dedi
  - token
  - ubi
---

# Authentication

This guide explains how to authenticate with Nadeo's APIs. There are 2 available methods:

- [via a user's service account](/auth/service)
- [via a dedicated server account](/auth/dedi)

Dedicated server account authentication imposes some limitations on what you can access with the API. The relevant restrictions are documented on each of the endpoint documentation pages.

Both authentication paths result in one or more access tokens - see the [token usage guide](/auth/token) for information on how to use and manage them.

For a complete authentication implementation example, you can refer to [Miss' Nadeo Go package](https://github.com/codecat/gonadeo).

## Authentication via Ubisoft API

The primary user authentication flow used to rely on a Ubisoft API that provided a ticket for passing on to Nadeo's API.

In April 2026, this related Ubisoft API endpoint stopped working, and Nadeo implemented the [service account flow](/auth/service) as a permanent replacement.

The old flow is still documented [here](/auth/ubi) for reference but it is highly discouraged to attempt to use it.

## Authentication in Openplanet

If you need to make requests to Nadeo API endpoints from inside an Openplanet plugin, don't handle any of the authentication logic yourself. Instead, use the [NadeoServices dependency](https://openplanet.dev/docs/reference/nadeoservices) as a central authentication plugin.
