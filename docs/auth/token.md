---
position: 3
---

# Using API tokens

This guide explains how to use and manage Nadeo API tokens. See the [authentication overview page](/auth) for information on how to acquire tokens.

If you have already obtained an access token and want to get started, see the [basic usage guide](#using-the-access-token).

To learn how to refresh your tokens without re-authenticating using a Ubisoft account of a dedicated server account, read the [section on refreshing your tokens](#refreshing-your-tokens).

For more detailed information on the tokens' purposes and contents, refer to the [explanations below](#understanding-the-tokens).

## Using the access token

All game APIs require you to send the obtained access token along - the format is always the same.

Simply set the following header on all your requests:

```plain
Authorization: nadeo_v1 t=<access token>
```

Note that the [NadeoServices dependency](https://openplanet.dev/docs/reference/nadeoservices) already takes care of this part as long as you use its methods for sending requests, so you don't need to set this header manually in your Openplanet plugins.

## Refreshing your tokens

To refresh your tokens (i.e. to obtain a new set of tokens without going through the entire authentication process), send the following HTTP request using a tool/library of your choice:

```plain
https://prod.trackmania.core.nadeo.online/v2/authentication/token/refresh

Headers:
    Authorization: nadeo_v1 t=<refresh token>
```

The response contains new access and refresh tokens.

## Understanding the tokens

There are two types of tokens used by the Nadeo APIs: Access and refresh tokens.

Both are sensitive credentials that can be used maliciously if you share them publicly, so treat them accordingly.

### Access tokens

Access tokens are used in every API request to identify yourself and prove that you are authorized to access that resource.

They are signed [JSON web tokens](https://en.wikipedia.org/wiki/JSON_Web_Token) that you can decode to understand and evaluate their contents (either programmatically or via a client-side decoder such as [JWT.io](https://jwt.io/)).

An access token is always associated with a specific audience (as explained in the authentication methods' documentation pages) which is stored in the token's `aud` payload field.

Access tokens are typically valid for one hour, which you can also verify via the token's `exp` payload field.

See below for the available payload data in a typical access token (using a Ubisoft account access token as an example):

```json
{
  "jti": "<uuid>", // token ID
  "iss": "NadeoServices", // issuer: always "NadeoServices"
  "iat": 1735394983, // timestamp of issuance
  "rat": 1735396783, // timestamp of when the token may be refreshed
  "exp": 1735398583, // timestamp of expiry
  "aud": "NadeoLiveServices", // audience: either "NadeoServices" or "NadeoLiveServices"
  "usg": "Client", // usage: either "Client" for a Ubisoft account or "Server" for a dedicated server account
  "sid": "<uuid>", // session ID
  "sat": 1735394983, // timestamp of signing, typically equal to "iat"
  "sub": "5b4d42f4-c2de-407d-b367-cbff3fe817bc", // subject: Nadeo account ID of the authenticated user
  "aun": "tooInfinite", // display name of the user/dedicated server account
  "rtk": false, // flag to indicate refresh tokens, always false for access tokens
  "pce": false, // always false
  "ubiservices_uid": "a59df3e8-6bff-48a2-98b6-801abf2a298e" // Ubisoft account ID, also known as web identity
}
```

### Refresh tokens

Refresh tokens are used to acquire a new set of tokens without going through the entire authentication procedure required for the initial tokens.

They are signed [JSON web tokens](https://en.wikipedia.org/wiki/JSON_Web_Token) that you can decode to understand and evaluate their contents (either programmatically or via a client-side decoder such as [JWT.io](https://jwt.io/)).

A refresh token is always associated with an access token, and using it will yield another access token of the same audience.

Refresh tokens are typically valid for one day, which you can also verify via the token's `exp` payload field.

See below for the available payload data in a typical refresh token (using a Ubisoft account access token as an example):

```json
{
  "jti": "<uuid>", // token ID
  "iss": "NadeoServices", // issuer: always "NadeoServices"
  "iat": 1735394983, // timestamp of issuance
  "rat": 1735438183, // timestamp of when the token may be refreshed, not used for refresh tokens
  "exp": 1735481383, // timestamp of expiry
  "aud": "NadeoServices", // audience: always "NadeoServices", not to be confused with "refresh_aud"
  "usg": "Client", // usage: either "Client" for a Ubisoft account or "Server" for a dedicated server account
  "sid": "<uuid>", // session ID
  "sat": 1735394983, // timestamp of signing, typically equal to "iat"
  "sub": "5b4d42f4-c2de-407d-b367-cbff3fe817bc", // subject: Nadeo account ID of the authenticated user
  "aun": "tooInfinite", // display name of the user/dedicated server account
  "rtk": true, // flag to indicate refresh tokens, always true for refresh tokens
  "pce": false, // always false
  "ubiservices_uid": "a59df3e8-6bff-48a2-98b6-801abf2a298e", // Ubisoft account ID, also known as web identity
  "refresh_aud": "NadeoLiveServices", // refresh audience, audience for tokens refreshed with this refresh token
  "limit_type": "none" // always "none"
}
```
