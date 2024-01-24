---
name: Get club rooms

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/room?length={length}&offset={offset}&name={name}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of rooms to retrieve
      required: true
      maximum: 250
    - name: offset
      type: integer
      description: The number of rooms to skip
      required: true
    - name: name
      type: string
      description: A string to search for in the room names
      required: false
---

Gets a list of club rooms.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/room?length=3&offset=0
```

**Example response**:

```json
{
  "clubRoomList": [
    {
      "id": 426422,
      "clubId": 420,
      "clubName": "Trackmania $ff9Furs",
      "nadeo": true,
      "roomId": 153462,
      "campaignId": null,
      "playerServerLogin": null,
      "activityId": 426422,
      "name": "$fa0TM$fffF $FF4Summer $fff2023",
      "room": {
        "id": 153462,
        "name": "$fa0TM$fffF $FF4Summer $fff2023",
        "region": "eu-west",
        "serverAccountId": "",
        "maxPlayers": 32,
        "playerCount": 50,
        "maps": [
          "KAPtM8xjoAgOWFBQZJHnDw5jMC9",
          "nhCRYjbIXyc4UVnzaNqpzaDwFe5",
          "Xkd1PtwSSohFtWUc2F1qqcpG1bj",
          ...
          "b8xSRFqvj8C4Yk7Q_xtNLX6OCC1",
          "RhUlOpXTORsr9lh3gf0TMCZR2kf",
          "1QLfFSeFSt7I2JWNKOrVQjG42jj"
        ],
        "script": "TrackMania/TM_TimeAttack_Online.Script.txt",
        "scalable": true,
        "scriptSettings": {
          "S_DecoImageUrl_WhoAmIUrl": {
            "key": "S_DecoImageUrl_WhoAmIUrl",
            "value": "/api/club/420",
            "type": "text"
          },
          "S_ForceLapsNb": {
            "key": "S_ForceLapsNb",
            "value": "-1",
            "type": "integer"
          }
        },
        "serverInfo": null
      },
      "popularityLevel": 3,
      "creationTimestamp": 1688148155,
      "creatorAccountId": "d47ff76c-8750-4eb9-a31c-17390ec0482a",
      "latestEditorAccountId": "d47ff76c-8750-4eb9-a31c-17390ec0482a",
      "password": false,
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9003d558-8f88-4edf-8ca0-f87d81d31407/dds/game.dds?timestamp=1705433448.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9003d558-8f88-4edf-8ca0-f87d81d31407/png/large.png?timestamp=1705433448.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9003d558-8f88-4edf-8ca0-f87d81d31407/png/medium.png?timestamp=1705433448.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9003d558-8f88-4edf-8ca0-f87d81d31407/png/small.png?timestamp=1705433448.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9003d558-8f88-4edf-8ca0-f87d81d31407/dds/game.dds?timestamp=1705433448.dds",
      "mediaTheme": ""
    },
    {
      "id": 458570,
      "clubId": 18974,
      "clubName": "Everios96",
      "nadeo": true,
      "roomId": 166805,
      "campaignId": null,
      "playerServerLogin": null,
      "activityId": 458570,
      "name": "UNDER 10 SECONDS",
      "room": {
        "id": 166805,
        "name": "UNDER 10 SECONDS",
        "region": "eu-west",
        "serverAccountId": "",
        "maxPlayers": 70,
        "playerCount": 32,
        "maps": [
          "_C5UDtcf7Vf3Dj25fxXAosRChzh",
          "Lt40QAM_WgkQLy6u7uj761smoNg",
          "z4_4KxKnXG60r6ZdOt0OG1R7oyb",
          ...
          "ANGtp2ONIhZfAfB3McvMArqL6_6",
          "dUegVDruVOkktP6gyyXiXNDtBr6",
          "4d0SKh6scS_cLRtrtS_0Oh4GVK5"
        ],
        "script": "TrackMania/TM_TimeAttack_Online.Script.txt",
        "scalable": true,
        "scriptSettings": {
          "S_TimeLimit": {
            "key": "S_TimeLimit",
            "value": "270",
            "type": "integer"
          },
          "S_ForceLapsNb": {
            "key": "S_ForceLapsNb",
            "value": "-1",
            "type": "integer"
          },
          "S_DecoImageUrl_WhoAmIUrl": {
            "key": "S_DecoImageUrl_WhoAmIUrl",
            "value": "/api/club/18974",
            "type": "text"
          }
        },
        "serverInfo": null
      },
      "popularityLevel": 3,
      "creationTimestamp": 1692663308,
      "creatorAccountId": "714f94a3-16a9-4856-97e3-49db5e8a610f",
      "latestEditorAccountId": "714f94a3-16a9-4856-97e3-49db5e8a610f",
      "password": false,
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/ad2a8233-35fa-4631-96f2-02825d634d81/dds/game.dds?timestamp=1705437638.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/ad2a8233-35fa-4631-96f2-02825d634d81/png/large.png?timestamp=1705437638.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/ad2a8233-35fa-4631-96f2-02825d634d81/png/medium.png?timestamp=1705437638.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/ad2a8233-35fa-4631-96f2-02825d634d81/png/small.png?timestamp=1705437638.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/ad2a8233-35fa-4631-96f2-02825d634d81/dds/game.dds?timestamp=1705437638.dds",
      "mediaTheme": ""
    },
    {
      "id": 766,
      "clubId": 41,
      "clubName": "$z$i$fffEvo Esports",
      "nadeo": false,
      "roomId": null,
      "campaignId": null,
      "playerServerLogin": "evofsb",
      "activityId": 766,
      "name": "$s$FFFEvo $F05Fullspeed Beg",
      "room": {
        "id": null,
        "name": "",
        "region": null,
        "serverAccountId": "bc251924-d267-4702-b526-9ed4b950d729",
        "maxPlayers": 255,
        "playerCount": 27,
        "maps": [],
        "script": "TM_TimeAttack_Online",
        "scalable": false,
        "scriptSettings": [],
        "serverInfo": null
      },
      "popularityLevel": 3,
      "creationTimestamp": 1592917178,
      "creatorAccountId": "2496fef1-fed2-44e4-9930-189f46496526",
      "latestEditorAccountId": "2496fef1-fed2-44e4-9930-189f46496526",
      "password": false,
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/77e3b89c-9a7a-488b-be51-32dc17734edf/dds/game.dds?timestamp=1705424652.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/77e3b89c-9a7a-488b-be51-32dc17734edf/png/large.png?timestamp=1705424652.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/77e3b89c-9a7a-488b-be51-32dc17734edf/png/medium.png?timestamp=1705424652.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/77e3b89c-9a7a-488b-be51-32dc17734edf/png/small.png?timestamp=1705424652.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/77e3b89c-9a7a-488b-be51-32dc17734edf/dds/game.dds?timestamp=1705424652.dds",
      "mediaTheme": ""
    }
  ],
  "maxPage": 173,
  "itemCount": 517
}
```
