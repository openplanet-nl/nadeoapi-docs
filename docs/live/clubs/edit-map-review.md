---
name: Edit club map review activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/map-review/{mapReviewId}/edit

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the map review activity should be created
      required: true
    - name: mapReviewId
      type: integer
      description: The ID of the map review activity to be edited
      required: true
  body:
    - name: name
      type: string
      description: The new name of the map review activity
      max: 20 characters
    - name: timeLimit
      type: integer
      description: The maximum time per map, in seconds
      max: 3600
    - name: scalable
      type: integer
      description: Whether a new server should be created when the map review room is full (1) or not (0)
    - name: maxPlayer
      type: integer
      description: The maximum number of players allowed in the map review room
      max: 100
    - name: allowVoteSkipMap
      type: integer
      description: Whether to allow players to start a vote to skip the current map (1) or not (0)
    - name: submissionLimitation
      type: integer
      description: Whether to allow players to only submit a single track per hour (1) or not (0)
---

The request body is an object containing the map review details:

```json
{
  "name": name,
  "timeLimit": timeLimit,
  "scalable": scalable,
  "maxPlayer": maxPlayer,
  "allowVoteSkipMap": allowVoteSkipMap,
  "submissionLimitation": submissionLimitation
}
```

Edits a map review activity in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
https://live-services.trackmania.nadeo.live/api/token/club/103034/map-review/1008026/edit
```

```json
{
  "name":"Edited title",
  "timeLimit": 300,
  "scalable": 0,
  "maxPlayer": 48,
  "allowVoteSkipMap":1,
  "submissionLimitation": 1
}
```

**Example response**:

```json
{
  "creationTimestamp": 1772060908,
  "clubName": "Fort's club",
  "id": 1008026,
  "scalable": false,
  "public": true,
  "game2webUrl": "https://www.trackmania.com/clubs/103034/track-reviews/1008026",
  "activityId": 1008026,
  "name": "Edited title",
  "clubId": 103034,
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "mapReviewUid": "club_103034_1008026",
  "mediaUrlPngLarge": "",
  "maxPlayer": 48,
  "mediaTheme": "",
  "popularityLevel": 0,
  "submittedMapCount": 0,
  "submissionLimitation": true,
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "timeLimit": 300,
  "allowVoteSkipMap": true,
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

If the map review activity does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the authenticated account does not have enough permissions in the club to edit a map review activity, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
