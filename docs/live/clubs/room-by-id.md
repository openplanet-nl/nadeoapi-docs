---
name: Get club room by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubID}/room/{roomID}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the room belongs to
      required: true
    - name: roomID
      type: integer
      description: The ID of the room to be requested
      required: true
---

Gets the details of a specific club room.

---

**Remarks**:

- Club rooms connected to a dedicated server will have less information available - specifically, `maps` and `scriptSettings` will likely be empty.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/25/room/381929
```

**Example response**:

```json
{
  "id": 381929,
  "clubId": 25,
  "clubName": "$s$fffTM $6F9Exchange",
  "nadeo": true,
  "roomId": 137873,
  "campaignId": null,
  "playerServerLogin": null,
  "activityId": 381929,
  "name": "TM Exchange Pack 1",
  "room": {
    "id": 137873,
    "name": "TM Exchange Pack 1",
    "region": "eu-west",
    "serverAccountId": "",
    "maxPlayers": 64,
    "playerCount": 0,
    "maps": [
      "gXTE8jV8fF75hyXuRR8yuuhg6ym",
      "7AHlBi2o62SmM3D0lNCieqT6Er6",
      "tY8ydiSluqxKMw6bEkAG1V3oUde",
      ...
      "TB7r1bdx3xjIN89JwgKHjMusJJ6",
      "jC9YYcCbHpEuyIHDsCjIXuxWHdh",
      "Y_HCdBUZJ4vw96dPq1rDFRrKHSk"
    ],
    "script": "TrackMania/TM_TimeAttack_Online.Script.txt",
    "scalable": true,
    "scriptSettings": {
      "S_TimeLimit": {
        "key": "S_TimeLimit",
        "value": "360",
        "type": "integer"
      },
      "S_DecoImageUrl_WhoAmIUrl": {
        "key": "S_DecoImageUrl_WhoAmIUrl",
        "value": "/api/club/25",
        "type": "text"
      },
      "S_EnableJoinLeaveNotifications": {
        "key": "S_EnableJoinLeaveNotifications",
        "value": "false",
        "type": "boolean"
      },
      "S_ForceLapsNb": {
        "key": "S_ForceLapsNb",
        "value": "-1",
        "type": "integer"
      }
    },
    "serverInfo": null
  },
  "popularityLevel": 0,
  "creationTimestamp": 1683021002,
  "creatorAccountId": "a07f01cd-afb0-4230-9c13-868c1ede28a3",
  "latestEditorAccountId": "a07f01cd-afb0-4230-9c13-868c1ede28a3",
  "password": false,
  "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6e29ffb6-ff4d-4e50-b9dd-e3c519864435/dds/game.dds?timestamp=1705430827.dds",
  "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6e29ffb6-ff4d-4e50-b9dd-e3c519864435/png/large.png?timestamp=1705430827.png",
  "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6e29ffb6-ff4d-4e50-b9dd-e3c519864435/png/medium.png?timestamp=1705430827.png",
  "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6e29ffb6-ff4d-4e50-b9dd-e3c519864435/png/small.png?timestamp=1705430827.png",
  "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6e29ffb6-ff4d-4e50-b9dd-e3c519864435/dds/game.dds?timestamp=1705430827.dds",
  "mediaTheme": ""
}
```
