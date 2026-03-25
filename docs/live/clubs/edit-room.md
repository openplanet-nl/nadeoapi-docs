---
name: Edit club room

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/room/{roomId}/edit

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the room belongs to
      required: true
    - name: roomId
      type: integer
      description: The ID of the room to be edited
      required: true
  body:
    - name: name
      type: string
      description: The new name of the room
      max: 20 characters
    - name: region
      type: string
      description: The region where the room will be hosted (see remarks below)
    - name: maxPlayersPerServer
      type: integer
      description: The maximum number of players allowed in each server
    - name: script
      type: string
      description: The game mode script to use for the maps in the room
    - name: settings
      type: object[]
      description: A list of settings to edit for the game mode
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
    - name: shufflePlaylist
      type: integer
      description: Whether the list of maps should be shuffled each time the room is started (1) or not (0)
---

The request body is an object with the room details to be edited:

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
  "shufflePlaylist": shufflePlaylist
}
```

Edits a club room.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- Duplicated `mapUid` will be ignored when editing the room.
- See the [glossary](/glossary#room-regions) for a list of available regions.
- For more information about the supported game mode scripts that can be passed to the `script` parameter, including how to create your own, read the [Gamemode documentation](https://wiki.trackmania.io/en/ManiaScript/Advanced/Gamemode) in the Trackmania Wiki.
- When passing an invalid `script`, the room will stop on map switch and fail to restart, displaying an error in-game.
- For a list of supported `settings` for each game mode, alongside their type and values, read the [Gamemode Settings documentation](https://wiki.trackmania.io/en/dedicated-server/Usage/OfficialGameModesSettings) in the Trackmania Wiki.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/room/1004641/edit
```

```json
{
  "name": "Winter 2026",
  "region": "eu-west",
  "maxPlayersPerServer": 11,
  "script": "TrackMania/TM_TimeAttack_Online.Script.txt",
  "settings": [
    {
    "key": "S_TimeLimit",
    "value": "-1",
    "type": "integer"
    },
    {
    "key": "S_ForceLapsNb",
    "value": "-1",
    "type": "integer"
    }
  ],
  "maps": [
    "8elIE5tBmTkuxJaX9bniSkPkU45",
    "fAEmqACIh7yFtNEFZWZwlqV8qvh"
  ],
  "scalable": 0,
  "shufflePlaylist": 1
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
  "name": "Winter testing",
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
    "name": "Winter testing",
    "shufflePlaylist": true,
    "region": "eu-west",
    "maps": [
      "KRelvYHRjEQoqnkJ_Th8FLKzTsg",
      "3LRPuWYIe85IJBbUcmIHkaSBuHh",
      "7rtUBaBVpeaN080v5NgCksdEr2c"
    ],
    "script": "TrackMania/TM_TimeAttack_Online.Script.txt",
    "maxPlayers": 11
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

If the club / room does not exist or the player is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the player does not have enough permissions in the club to edit rooms, the response will contain an error:

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
