---
icon: "fa-book"
category: "general"
---

# Glossary

The Nadeo APIs use a number of terms and concepts that aren't always intuitive.
This list aims to define and explain them - if you think something is missing here, feel free to [contribute on Github](https://github.com/openplanet-nl/nadeoapi-docs) or [let us know on Discord](https://openplanet.dev/link/discord).

- [General API terms](#general-api-terms)
- [Account types and identifiers](#account-types-and-identifiers)
- [Game content](#game-content)

## General API terms

Basic information about the available APIs and how to communicate with them.

### Access token

Authentication and authorization token required to access most Nadeo API endpoints. See [the authentication documentation](/auth) for information on how to obtain these tokens.

Each token is associated with a requested [audience](#audience). Sending requests to different endpoints may require multiple tokens with different audiences.

The OAuth API uses its own tokens, and they are not interchangeable.

Not to be confused with a Ubisoft ticket, which is only required for [authenticating as a user with Ubisoft's API](/auth#with-a-ubisoft-account) and is not recognized by any Nadeo API.

### Audience

Scope of the access token you're using to interact with the API. Currently supported audiences include:

- `NadeoServices` for the [Core API](#core-api)
- `NadeoLiveServices` for the [Live](#live-api) and [Meet](#meet-api) APIs

Most API endpoints require authentication with the correct audience. You can find out which audience is required by an endpoint at the top of the endpoint's documentation page.

See [the authentication documentation](/auth) for more information on how to request a token for a specific audience.

### Core API

One of the three primary Nadeo APIs. Covers accounts, maps, records and some global features.

Requires a token with the `NadeoServices` [audience](#audience).

See [the Core API index](/core) for more information.

### Live API

One of the three primary Nadeo APIs. Covers leaderboards, clubs and campaigns.

Requires a token with the `NadeoLiveServices` [audience](#audience).

See [the Live API index](/live) for more information.

### Meet API

One of the three primary Nadeo APIs. Covers competitions and matchmaking.

Requires a token with the `NadeoLiveServices` [audience](#audience).

See [the Meet API index](/meet) for more information.

### OAuth API

A separate API specifically meant to be used by community projects for authenticating users and taking certain actions on their behalf (such as administrating their favorite maps).

Can also be used to convert [display names](#display-name) and [account IDs](#account-id).

This API uses a completely separate authentication flow and covers entirely different use cases, which is why it is documented in [its own separate section](/oauth/summary).

## Account types and identifiers

Player account-related terms that are important for a lot of different API endpoints.

### Account ID

Primary UUID identifier for player accounts in the context of Nadeo's APIs. Assigned once when the user first interacts with the APIs and never changes.

Converting account IDs and display names is possible via [the OAuth API's account endpoints](/oauth/reference/accounts).

Can be converted to a [player login](#login), see [here](https://gist.github.com/codecat/3428050103d4b6dfdf20eaf916b0c434) for reference.

Not to be confused with the [web identity](#web-identity).

### Dedicated server

Account type used for hosting dedicated server rooms in-game. Can be created via [the trackmania.com server accounts page](https://www.trackmania.com/player/dedicated-servers).

Every dedicated server is associated with a player account.

Dedicated server accounts can directly interact with most Nadeo APIs (see [the authentication documentation](/auth#with-a-dedicated-server-account) for information on how to authenticate using a dedicated server) - exceptions are noted in the remarks on the relevant endpoint documentation pages.

### Display name

A player's current username as displayed in game. This is controlled by the Ubisoft account's username (which can be changed once every 30 days) and is unique.

Converting account IDs and display names is possible via [the OAuth API's account endpoints](/oauth/reference/accounts).

### Login

Secondary identifier for player accounts.

Can be converted to an [account ID](#account-id), see [here](https://gist.github.com/codecat/3428050103d4b6dfdf20eaf916b0c434) for reference.

### Web identity

List of connected platform identities for a player account. Useful for retrieving the Ubisoft account ID for a given Nadeo [account ID](#account-id) via the [Core API's web identity endpoint](/core/accounts/webidentities).

## Game content

Game content-specific terms and identifiers.

### Activity ID

An incremental ID that identifies a club activity.

Not to be confused with more specific IDs for activity types such as club campaign IDs or club room IDs.

### Competition ID

An incremental ID that identifies a competition.

Not to be confused with the [competition live ID](#competition-live-id).

### Competition Live ID

A secondary ID that identifies a competition, often called `liveId`.

Follows the pattern `LID-COMP-...`.

Not to be confused with the [competition ID](#competition-id).

### Group UID/Leaderboard group UID/Season UID

Identifies a group/leaderboard/season in the context of a map/campaign leaderboard. Used to limit leaderboard contents to a specific group of records (e.g. to identify the locked leaderboard in official campaigns/TOTDs).

Can be a UUID (for official campaigns/TOTDs) or a string following the pattern `NLS-...` (for club campaigns).

Not to be confused with `groupId` which is used to identify participant groups in competitions.

### Map ID

A UUID that identifies an uploaded map on Nadeo's servers. Generated at upload time.

Not to be confused with the [map UID](#map-uid) (which is generated when saving the map locally in the editor).

Converting between map ID and [map UID](#map-uid) is possible via the [Core API's map info (multiple) endpoint](/core/maps/info-multiple).

### Map record ID

A UUID that identifies a player's record on a map. This ID may stay the same when a player improves their previous record.

### Map type

Identifier for the game mode the map is intended to be driven in. Official map types include:

- `TrackMania\\TM_Race`
- `TrackMania\\TM_Royal`
- `TrackMania\\TM_Stunt`
- `TrackMania\\TM_Platform`

May also be used by community projects for their own custom types.

### Map UID

Primary identifier for a map. Generated when saving the map locally in the editor.

Not to be confused with the [map ID](#map-id) (which is generated at upload time).

Converting between [map ID](#map-id) and map UID is possible via the [Core API's map info (multiple) endpoint](/core/maps/info-multiple).

### Match ID

Incremental ID that identifies a match.

Not to be confused with the [match live ID](#match-live-id).

### Match Live ID

A secondary ID that identifies a match, often called `liveId`.

Follows the pattern `LID-MTCH-...`.

Not to be confused with the [match ID](#match-id).

### Matchmaking type

Identifier for the different types of matchmaking. Primarily used in matchmaking-related endpoints that support all types. Official types include:

- `2`: Ranked 3v3
- `3`: Royal
- `4`: Super Royal

Note that the [Meet API's matchmaking IDs endpoint](/meet/matchmaking/summary) can be used to dynamically retrieve the IDs in case they change in the future.

### Zone ID

UUID that identifies a zone. The full list of zones (including their hierarchical structure) is available via the [Core API's zones endpoint](/core/meta/zones).
