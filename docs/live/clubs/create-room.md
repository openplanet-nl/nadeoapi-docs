---
name: Create club room

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/room/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the room should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new room
      max: 20 characters
      required: true
    - name: region
      type: string
      description: The region where the room will be hosted (see remarks below)
      required: true
    - name: maxPlayersPerServer
      type: integer
      description: The maximum number of players allowed in each server
      required: true
    - name: script
      type: string
      description: The game mode script to use for the maps in the room
      required: true
    - name: settings
      type: object[]
      description: A list of settings to set for the game mode
      children:
        - name: key
          type: string
          description: The name of the setting
          required: true
        - name: value
          type: string
          description: The value for the setting, as a string
          required: true
        - name: type
          type: string
          description: The primitive type of the setting
          required: true
    - name: maps
      type: string[]
      description: The list of maps for the room, identified by their `mapUid`
    - name: scalable
      type: integer
      description: Whether a new server should be created when the room is full (1) or not (0)
      default: 0
    - name: password
      type: integer
      description: Whether a password will be required to join the room (1) or not (0)
      default: 0
    - name: shufflePlaylist
      type: integer
      description: Whether the list of maps should be shuffled each time the room is started (1) or not (0)
      default: 0
    - name: folderId
      type: integer
      description: The ID of the folder where the room should be created
---

The request body is an object containing the room details:

```json
{
  "name": name,
  "region": region,
  "maxPlayersPerServer": maxPlayersPerServer,
  "script": script,
  "settings": [
    {
      "key": key,
      "value": value,
      "type": type
    }
  ],
  "maps": maps,
  "scalable": scalable,
  "password": password,
  "shufflePlaylist": shufflePlaylist,
  "folderId": folderId
}
```

Creates a room in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- Duplicated `mapUid` will be ignored when creating the room.
- See the [glossary](/glossary#room-regions) for a list of available regions.
- For more information about the supported game mode scripts that can be passed to the `script` parameter, including how to create your own, read the [Gamemode documentation](https://wiki.trackmania.io/en/ManiaScript/Advanced/Gamemode) in the Trackmania Wiki.
- When passing an invalid `script`, the room will fail to start, displaying an error in-game.
- For a list of supported `settings` for each game mode, alongside their type and values, read the [Gamemode Settings documentation](https://wiki.trackmania.io/en/dedicated-server/Usage/OfficialGameModesSettings) in the Trackmania Wiki.
- The password of the new room can be retrieved using the [Get club room password endpoint](/live/clubs/room-password).
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).
- See the [glossary](/glossary#club-folders) for more information about folders.

---

**Example request**:

```plain
https://live-services.trackmania.nadeo.live/api/token/club/103034/room/create
```

```json
{
  "name": "Winter maps",
  "region": "ca-central",
  "maxPlayersPerServer": 8,
  "script": "TrackMania/TM_TimeAttack_Online.Script.txt",
  "settings": [
    {
      "key": "S_TimeLimit",
      "value": "1000",
      "type": "integer"
    },
    {
      "key": "S_WarmUpNb",
      "value": "1",
      "type": "integer"
    },
    {
      "key": "S_WarmUpDuration",
      "value": "60",
      "type": "integer"
    },
    {
      "key": "S_WarmUpTimeout",
      "value": "10",
      "type": "integer"
    },
    {
      "key": "S_ChatTime",
      "value": "5",
      "type": "integer"
    },
    {
      "key": "S_ForceLapsNb",
      "value": "2",
      "type": "integer"
    },
    {
      "key": "S_EnableJoinLeaveNotifications",
      "value": "false",
      "type": "boolean"
    }
  ],
  "maps": [
    "KRelvYHRjEQoqnkJ_Th8FLKzTsg",
    "3LRPuWYIe85IJBbUcmIHkaSBuHh",
    "7rtUBaBVpeaN080v5NgCksdEr2c"
  ],
  "scalable": 1,
  "password": 1,
  "shufflePlaylist": 1,
  "folderId": 0
}
```

**Example response**:

```json
{
  "creationTimestamp": 1771696181,
  "clubName": "Fort's club",
  "id": 1004641,
  "activityId": 1004641,
  "campaignId": null,
  "name": "Winter maps",
  "clubId": 103034,
  "roomId": 395571,
  "password": true,
  "room": {
    "id": 395571,
    "scalable": true,
    "serverInfo": null,
    "scriptSettings": {
      "S_ForceLapsNb": {
        "key": "S_ForceLapsNb",
        "value": "2",
        "type": "integer"
      },
      "S_WarmUpTimeout": {
        "key": "S_WarmUpTimeout",
        "value": "10",
        "type": "integer"
      },
      "S_WarmUpNb": {
        "key": "S_WarmUpNb",
        "value": "1",
        "type": "integer"
      },
      "S_WarmUpDuration": {
        "key": "S_WarmUpDuration",
        "value": "60",
        "type": "integer"
      },
      "S_TimeLimit": {
        "key": "S_TimeLimit",
        "value": "1000",
        "type": "integer"
      },
      "S_DecoImageUrl_WhoAmIUrl": {
        "key": "S_DecoImageUrl_WhoAmIUrl",
        "value": "/api/club/103034",
        "type": "text"
      },
      "S_ChatTime": {
        "key": "S_ChatTime",
        "value": "5",
        "type": "integer"
      },
      "S_EnableJoinLeaveNotifications": {
        "key": "S_EnableJoinLeaveNotifications",
        "value": "false",
        "type": "boolean"
      }
    },
    "playerCount": 0,
    "serverAccountId": "",
    "name": "Winter maps",
    "shufflePlaylist": false,
    "region": "ca-central",
    "maps": [
      "KRelvYHRjEQoqnkJ_Th8FLKzTsg",
      "3LRPuWYIe85IJBbUcmIHkaSBuHh",
      "7rtUBaBVpeaN080v5NgCksdEr2c"
    ],
    "script": "TrackMania/TM_TimeAttack_Online.Script.txt",
    "maxPlayers": 8
  },
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "nadeo": true,
  "mediaUrlPngLarge": "",
  "mediaTheme": "",
  "popularityLevel": 0,
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "playerServerLogin": null,
  "mediaUrlDds": "",
  "mediaUrlPngMedium": ""
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to create rooms, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```

If the `region` is invalid, the response will contain an error:

```json
[
  "region:region not in available choice"
]
```

An invalid `mapUid` results in a `500` response code with an error object in the response body.
