---
name: Create club map review activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/map-review/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the map review activity should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new map review activity
      max: 20 characters
      required: true
    - name: timeLimit
      type: integer
      description: The maximum time per map, in seconds
      default: 180
      max: 3600
    - name: scalable
      type: integer
      description: Whether a new server should be created when the map review room is full (1) or not (0)
      default: 1
    - name: maxPlayer
      type: integer
      description: The maximum number of players allowed in the map review room
      default: 64
      max: 100
    - name: allowVoteSkipMap
      type: integer
      description: Whether to allow players to start a vote to skip the current map (1) or not (0)
      default: 0
    - name: submissionLimitation
      type: integer
      description: Whether to allow players to only submit a single track per hour (1) or not (0)
      default: 0
    - name: folderId
      type: integer
      description: The ID of the folder where the map review activity should be created
      default: 0
---

The request body is an object containing the map review details:

```json
{
  "name": name,
  "timeLimit": timeLimit,
  "scalable": scalable,
  "maxPlayer": maxPlayer,
  "allowVoteSkipMap": allowVoteSkipMap,
  "submissionLimitation": submissionLimitation,
  "folderId": folderId
}
```

Creates a map review activity in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
https://live-services.trackmania.nadeo.live/api/token/club/103034/map-review/create
```

```json
{
  "name": "My tracks",
  "timeLimit": 180,
  "scalable": 1,
  "maxPlayer": 64,
  "allowVoteSkipMap": 0,
  "submissionLimitation": 0,
  "folderId": 0
}
```

**Example response**:

```json
{
  "creationTimestamp": 1772060908,
  "clubName": "Fort's club",
  "id": 1008026,
  "scalable": true,
  "public": true,
  "game2webUrl": "https://www.trackmania.com/clubs/103034/track-reviews/1008026",
  "activityId": 1008026,
  "name": "My tracks",
  "clubId": 103034,
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "mapReviewUid": "club_103034_1008026",
  "mediaUrlPngLarge": "",
  "maxPlayer": 64,
  "mediaTheme": "",
  "popularityLevel": 0,
  "submittedMapCount": 0,
  "submissionLimitation": false,
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "timeLimit": 180,
  "allowVoteSkipMap": false,
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

If the authenticated account does not have enough permissions in the club to create a map review activity, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
