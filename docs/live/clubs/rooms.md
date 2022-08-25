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

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/room?length=3&offset=0
```

**Example response**:
```json
{
  "clubRoomList": [
    {
      "id": 309746,
      "clubId": 3074,
      "clubName": "$s$aa0KACK$05aY $05aRE$09aLO$6b0AD$aa0ED",
      "nadeo": false,
      "roomId": null,
      "campaignId": null,
      "playerServerLogin": "kacky6",
      "activityId": 309746,
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/3074/62ffa6775bb23.png?updateTimestamp=1660921466.png",
      "name": "KACKY - SERVER 6",
      "room": {
        "id": null,
        "name": "",
        "region": null,
        "serverAccountId": "698f707b-3ea5-4e0a-a650-f2779d88e788",
        "maxPlayers": 106,
        "playerCount": 97,
        "maps": [

        ],
        "script": "Kacky",
        "scalable": false,
        "scriptSettings": [

        ],
        "serverInfo": null
      },
      "popularityLevel": 3,
      "creationTimestamp": 1660921463,
      "password": false
    },
    {
      "id": 769,
      "clubId": 41,
      "clubName": "Evo",
      "nadeo": false,
      "roomId": null,
      "campaignId": null,
      "playerServerLogin": "evoiceb",
      "activityId": 769,
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/41/609994ecd5aca.png?updateTimestamp=1620677870.png",
      "name": "$s$fffEvo $F06Ice Beginner",
      "room": {
        "id": null,
        "name": "",
        "region": null,
        "serverAccountId": "9b1cda74-5871-4fe5-bea8-a4e798ac048d",
        "maxPlayers": 200,
        "playerCount": 26,
        "maps": [

        ],
        "script": "TM_TimeAttack_Online",
        "scalable": false,
        "scriptSettings": [

        ],
        "serverInfo": null
      },
      "popularityLevel": 2,
      "creationTimestamp": 1592917227,
      "password": false
    },
    {
      "id": 73414,
      "clubId": 17,
      "clubName": "RPG & Trial",
      "nadeo": false,
      "roomId": null,
      "campaignId": null,
      "playerServerLogin": "rpglong",
      "activityId": 73414,
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/17/61cb780a38c6f.png?updateTimestamp=1640724493.png",
      "name": "$iRPG",
      "room": {
        "id": null,
        "name": "",
        "region": null,
        "serverAccountId": "d08a08c7-94e3-4fe5-8f72-f0911dfd6a6c",
        "maxPlayers": 100,
        "playerCount": 11,
        "maps": [

        ],
        "script": "TM_TimeAttack_Online",
        "scalable": false,
        "scriptSettings": [

        ],
        "serverInfo": null
      },
      "popularityLevel": 2,
      "creationTimestamp": 1596036312,
      "password": false
    }
  ],
  "maxPage": 327,
  "itemCount": 981
}
```
