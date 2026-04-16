---
name: Get map review activity by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/map-review/{activityId}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the map review activity belongs to
      required: true
    - name: activityId
      type: integer
      description: The activity ID of the map review activity to be requested
      required: true
---

Gets the details of a specific map review activity.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference). This only applies for custom media files, and not for preset themes.

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/31644/map-review/208777
```

**Example response**:

```json
{
  "creationTimestamp": 1632597591,
  "clubName": "TMA.gg",
  "id": 208777,
  "scalable": false,
  "public": true,
  "game2webUrl": "https://www.trackmania.com/clubs/31644/track-reviews/208777",
  "activityId": 208777,
  "name": "TMA map testing",
  "clubId": 31644,
  "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/089462af-7f9e-43cc-a561-593bbed3e1f2/png/small.png?timestamp=1705440002.png",
  "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/089462af-7f9e-43cc-a561-593bbed3e1f2/png/large.png?timestamp=1705440002.png",
  "latestEditorAccountId": "abdc0576-fae7-4b31-96dc-539b8cda095f",
  "mapReviewUid": "club_31644_208777",
  "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/089462af-7f9e-43cc-a561-593bbed3e1f2/png/large.png?timestamp=1705440002.png",
  "maxPlayer": 64,
  "mediaTheme": "",
  "popularityLevel": 0,
  "submittedMapCount": 1035,
  "submissionLimitation": false,
  "creatorAccountId": "abdc0576-fae7-4b31-96dc-539b8cda095f",
  "timeLimit": 420,
  "allowVoteSkipMap": true,
  "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/089462af-7f9e-43cc-a561-593bbed3e1f2/dds/game.dds?timestamp=1705440002.dds",
  "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/089462af-7f9e-43cc-a561-593bbed3e1f2/png/medium.png?timestamp=1705440002.png"
}
```

If the club or map review does not exist, the response will contain an error (status 404):

```json
["activity:error-notFound"]
```

If the map review is private and the player is not a member of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notMember"]
```
