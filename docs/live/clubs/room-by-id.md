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
    "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/25/6450dccb2b8a3.png?updateTimestamp=1683021005.png",
    "mediaTheme": "",
    "name": "TM Exchange Pack 1",
    "room": {
        "id": 137873,
        "name": "TM Exchange Pack 1",
        "region": "eu-west",
        "serverAccountId": "",
        "maxPlayers": 64,
        "playerCount": 2,
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
        "serverInfo": {
            "joinLink": "#qjoin=ZT0jLbbdR5eShjvb5JSfzw",
            "playerCount": 2,
            "currentMapUid": "A_3SacQx7_A4gkOPi5a4g59skAi",
            "starting": false
        }
    },
    "popularityLevel": 1,
    "creationTimestamp": 1683021002,
    "creatorAccountId": "a07f01cd-afb0-4230-9c13-868c1ede28a3",
    "latestEditorAccountId": "a07f01cd-afb0-4230-9c13-868c1ede28a3",
    "password": false
}
```
