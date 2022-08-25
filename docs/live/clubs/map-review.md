---
name: Get club map review rooms

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/map-review?length={length}&offset={offset}&name={name}

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

Gets a list of club map review rooms.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/map-review?length=3&offset=0
```

**Example response**:
```json
{
  "clubMapReviewList": [
    {
      "activityId": 298913,
      "mapReviewUid": "club_51082_298913",
      "mediaUrl": "",
      "timeLimit": 300,
      "scalable": false,
      "allowVoteSkipMap": false,
      "submissionLimitation": true,
      "maxPlayer": 100,
      "public": true,
      "popularityLevel": 3,
      "submittedMapCount": 44,
      "id": 298913,
      "clubId": 51082,
      "clubName": "GREEN GAME JAM",
      "name": "GREEN GAME JAM 2022",
      "creationTimestamp": 1657550782,
      "game2webUrl": "https://players.trackmania.com/club/51082/map-review/298913"
    },
    {
      "activityId": 234918,
      "mapReviewUid": "club_4927_234918",
      "mediaUrl": "",
      "timeLimit": 240,
      "scalable": false,
      "allowVoteSkipMap": true,
      "submissionLimitation": true,
      "maxPlayer": 100,
      "public": true,
      "popularityLevel": 0,
      "submittedMapCount": 310,
      "id": 234918,
      "clubId": 4927,
      "clubName": "$s$eeeYannex",
      "name": "MAP REVIEW YX",
      "creationTimestamp": 1640804723,
      "game2webUrl": "https://players.trackmania.com/club/4927/map-review/234918"
    },
    {
      "activityId": 233525,
      "mapReviewUid": "club_12148_233525",
      "mediaUrl": "",
      "timeLimit": 480,
      "scalable": true,
      "allowVoteSkipMap": true,
      "submissionLimitation": false,
      "maxPlayer": 80,
      "public": true,
      "popularityLevel": 0,
      "submittedMapCount": 53,
      "id": 233525,
      "clubId": 12148,
      "clubName": "Ice Gang Micka_TM",
      "name": "MickMap Review",
      "creationTimestamp": 1640372900,
      "game2webUrl": "https://players.trackmania.com/club/12148/map-review/233525"
    }
  ],
  "maxPage": 7,
  "itemCount": 19
}
```
