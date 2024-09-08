---
icon: "fa-book"
---

# Glossary

The Nadeo APIs use a number of terms and concepts that aren't always intuitive.
This list aims to define and explain them - if you think something is missing here, feel free to [contribute on Github](https://github.com/openplanet-nl/nadeoapi-docs) or [let us know on Discord](https://openplanet.dev/link/discord).

### Account ID

Primary UUID identifier for player accounts in the context of Nadeo's APIs. Assigned once when the user first interacts with the APIs and never changes.

Converting account IDs and display names is possible via [the OAuth API's account endpoints](/oauth/reference/accounts).

Can be converted to a [player login](#login), see [here](https://gist.github.com/codecat/3428050103d4b6dfdf20eaf916b0c434) for reference.

Not to be confused with the [web identity](#web-identity).

### Activity ID

An incremental ID that identifies a club activity.

Not to be confused with more specific IDs for activity types such as club campaign IDs or club room IDs.

### Competition ID

An incremental ID that identifies a competition.

Not to be confused with the [competition live ID](#competition-live-id)

### Competition Live ID

A secondary ID that identifies a competition, often called `liveId`.

Follows the pattern `LID-COMP-...`.

Not to be confused with the [competition ID](#competition-id).

### Display name

A player's current username as displayed in game. This is controlled by the Ubisoft account's username (which can be changed once every 30 days) and is unique.

### Group UID

Identifies a season/leaderboard/group in the context of a map/campaign leaderboard. Used to limit leaderboard contents to a specific group of records (e.g. in official campaigns/TOTDs to identify the locked leaderboard).

Identical to [leaderboard group UIDs](#leaderboard-group-uid) and [season UIDs](#season-uid).

Can be a UUID (for official campaigns/TOTDs) or a string following the pattern `NLS-...` (for club campaigns).

Not to be confused with `groupId` which is used to identify participant groups in competitions.

### Leaderboard group UID

Identifies a season/leaderboard/group in the context of a map/campaign leaderboard. Used to limit leaderboard contents to a specific group of records (e.g. in official campaigns/TOTDs to identify the locked leaderboard).

Identical to [group UIDs](#group-uid) and [season UIDs](#season-uid).

Can be a UUID (for official campaigns/TOTDs) or a string following the pattern `NLS-...` (for club campaigns).

### Login

Secondary identifier for player accounts.

Can be converted to an [account ID](#account-id), see [here](https://gist.github.com/codecat/3428050103d4b6dfdf20eaf916b0c434) for reference.

### Map ID

A UUID that identifies an uploaded map on Nadeo's servers. Generated at upload time.

Not to be confused with the [map UID](#map-uid) (which is generated when saving the map locally in the editor). Converting between the two is possible via the [Core API's map info (multiple) endpoint](/core/maps/info-multiple).

### Map record ID

A UUID that identifies a player's record on a map. This ID may stay the same when a player improves their previous record.

### Map type

Identifier for the game mode the map is intended to be driven in. Official map types include:

- `TrackMania\\TM_Race`
- `TrackMania\\TM_Royal`
- `TrackMania\\TM_Stunt`

May also be used by community projects for their own custom types.

### Map UID

Primary identifier for a map. Generated when saving the map locally in the editor.

Not to be confused with the [map ID](#map-id) (which is generated at upload time). Converting between the two is possible via the [Core API's map info (multiple) endpoint](/core/maps/info-multiple).

### Match ID

Incremental ID that identifies a match.

Not to be confused with the [match live ID](#match-live-id).

### Match Live ID

A secondary ID that identifies a competition, often called `liveId`.

Follows the pattern `LID-MTCH-...`.

Not to be confused with the [match ID](#match-id).

### Matchmaking type

Identifier for the different types of matchmaking. Primarily used in matchmaking-related endpoints that support all types. Official types include:

- `2`: Ranked 3v3
- `3`: Royal
- `4`: Super Royal

Note that the [Meet API's matchmaking IDs endpoint](/meet/matchmaking/summary) can be used to dynamically retrieve the IDs in case they change in the future.

### Season UID

Identifies a season/leaderboard/group in the context of a map/campaign leaderboard. Used to limit leaderboard contents to a specific group of records (e.g. in official campaigns/TOTDs to identify the locked leaderboard).

Identical to [leaderboard group UIDs](#leaderboard-group-uid) and [group UIDs](#group-uid).

Can be a UUID (for official campaigns/TOTDs) or a string following the pattern `NLS-...` (for club campaigns).

### Web identity

List of connected platform identities for a player account. Useful for retrieving the Ubisoft account ID for a given Nadeo [account ID](#account-id) via the [Core API's web identity endpoint](/core/accounts/webidentities).

### Zone ID

UUID that identifies a zone. The full list of zones (including their hierarchical structure) is available via the [Core API's zones endpoint](/core/meta/zones).
