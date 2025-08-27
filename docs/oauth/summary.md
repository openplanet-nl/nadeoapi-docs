# Introduction

This is an alternative documentation for Trackmania's OAuth implementation - the official one can be found [here](https://doc.trackmania.com/web/web-services/auth/).

This is **not** related to the game's primary APIs - the OAuth API is completely separate, uses different authentication flows (and tokens), and mostly covers different use cases.

To get started with the OAuth API, see [the setup instructions](/oauth/auth).

## What is OAuth?

> OAuth (Open Authorization) is an open standard for access delegation, commonly used as a way for Internet users to grant websites or applications access to their information on other websites but without giving them the passwords.

See [Wikipedia](https://en.wikipedia.org/wiki/OAuth) or [the official OAuth community website](https://oauth.net/) (which also has a useful short video that explains the concept).

In a broad sense OAuth is meant for authorization as opposed to authentication (it returns an API token, not an identity) - but with an extra request we can extend it to also explicitly authenticate the user.

There's a ton of useful resources on OAuth out there (note that only the **Authorization Code** and the **Client Credentials** flows are supported by Trackmania) - this guide will just focus on the Trackmania applications.

## What is this for? Why would I use it?

The Trackmania OAuth API can be used for a variety of use cases - typically surrounding verifying a Trackmania player's identity. A couple examples:

- External websites may want to offer a log-in for players that shows personalized data or lets them perform certain actions that only make sense once their identity has been confirmed.
- [Openplanet](https://openplanet.dev/) plugins might want to verify a player is who they claim they are. This can especially be helpful if the plugin needs to communicate with an external service on behalf of the player.

Additionally, the API offers an easy way to convert player account IDs into their display names and vice versa - a common use case if your application deals with one of the two types.

### Can't I just use an API token for the game APIs? That's unique as well

The benefit of the dedicated OAuth API is that its token can only really be used for identity verification - normal game API tokens on the other hand can be used to make a variety of different requests, some of which could cause unintended changes in-game or even get the account banned if Nadeo notice suspicious behavior.

So it's a very bad idea to reuse a player's game API token - especially if you don't even tell the user about the potential ramifications. Even if all your code is public and you can somehow ensure transparently that you don't use the token for anything unexpected, you can never ensure the token doesn't accidentally fall into the wrong hands.

**Therefore, it's strongly advised not to use a game API token for verifying a player's identity.**

## Useful resources

Below you'll find some resources that can be useful when implementing Trackmania OAuth into your project:

- [Trackmania Identity Provider for Keycloak](https://github.com/EvoEsports/keycloak-trackmania)
