---
name: Get member submissions to club map review

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/map-review/{activityId}/map?offset={offset}&length={length}

audience: NadeoLiveServices
parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the map review activity belongs to
      required: true
    - name: activityId
      type: integer
      description: The activity ID of the map review activity
      required: true
  query:
    - name: length
      type: integer
      description: The number of maps to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of maps to skip
      required: true
---

Retrieves map submissions of all club members to a club map review activity.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The relevant `activityId` can be retrieved using the [Get club activities endpoint](/live/clubs/activities).
- The data returned from this endpoint is largely the same data that can be accessed through the club's admin page on the [official website](https://trackmania.com).
- The response data model is similar to the [submitted maps endpoint](/live/map-review/submitted), with this endpoint including additional map information accessible to admins, including player counts data, scores, playing time, and more.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/103034/map-review/1008026/map?offset=0&length=10
```

**Example response**:

```json
{
  "submittedMaps": [
    {
      "creationTimestamp": 1772312741,
      "rejected": false,
      "map": {
        "silverTime": 17000,
        "uid": "Sn0DFpQkzrYSpppwURh2OsyYnH7",
        "uploadTimestamp": 1755390348,
        "downloadUrl": "https://core.trackmania.nadeo.live/maps/3a9ac05a-0f89-4511-ba6d-fe4d11fe5128/file",
        "name": "DandyMech",
        "authorTime": 13540,
        "submitter": "866d8ae2-11ea-4b7d-a220-f3bd0388354b",
        "mapId": "3a9ac05a-0f89-4511-ba6d-fe4d11fe5128",
        "author": "866d8ae2-11ea-4b7d-a220-f3bd0388354b",
        "thumbnailUrl": "https://core.trackmania.nadeo.live/maps/3a9ac05a-0f89-4511-ba6d-fe4d11fe5128/thumbnail.jpg",
        "goldTime": 15000,
        "bronzeTime": 21000,
        "nbLaps": 0,
        "updateTimestamp": 1755390348,
        "valid": true
      },
      "difficultyScore": -1,
      "mScore": 0,
      "playerCountAtStart": 1,
      "selected": false,
      "playerFinishCount": 0,
      "mapUid": "Sn0DFpQkzrYSpppwURh2OsyYnH7",
      "nominated": false,
      "noteInfo": {
        "countStar2": 0,
        "countStar4": 0,
        "countStar5": 0,
        "countTotal": 0,
        "countStar3": 0,
        "countStar1": 0,
        "average": 0,
        "countStarMax": 0
      },
      "mapStyles": [],
      "nadeoNote": 0,
      "labels": [],
      "difficultyCount": 0,
      "creationDate": 1772312741,
      "playerCountAtEnd": 0,
      "feedbackCount": 0,
      "playerDidntFinishCount": 0,
      "mapReviewId": 1491,
      "latestSubmissionTimestamp": 1772312741,
      "timePlayed": 0,
      "messagingOpen": false,
      "mScoreExperimental": 0
    },
    {
      "creationTimestamp": 1772298248,
      "rejected": false,
      "map": {
        "silverTime": 10000,
        "uid": "HHFJI9m55gYcL_PxPGNTOSGPMRf",
        "uploadTimestamp": 1772298221,
        "downloadUrl": "https://core.trackmania.nadeo.live/storageObjects/b4d9f053-b826-41a7-b5a5-60a8df2f09c5",
        "name": "My first map!",
        "authorTime": 7987,
        "submitter": "69f31664-4252-48e0-a433-024c49caee8c",
        "mapId": "8136f63d-da93-439c-aa7c-de9f353dfcb9",
        "author": "69f31664-4252-48e0-a433-024c49caee8c",
        "thumbnailUrl": "https://core.trackmania.nadeo.live/storageObjects/68a7064f-da53-4aad-ba76-f85b326e0cac.jpg",
        "goldTime": 9000,
        "bronzeTime": 12000,
        "nbLaps": 0,
        "updateTimestamp": 1772298221,
        "valid": true
      },
      "difficultyScore": -1,
      "mScore": -1,
      "playerCountAtStart": 0,
      "selected": false,
      "playerFinishCount": 3,
      "mapUid": "HHFJI9m55gYcL_PxPGNTOSGPMRf",
      "nominated": false,
      "noteInfo": {
        "countStar2": 0,
        "countStar4": 0,
        "countStar5": 0,
        "countTotal": 0,
        "countStar3": 0,
        "countStar1": 0,
        "average": 0,
        "countStarMax": 0
      },
      "mapStyles": [],
      "nadeoNote": 0,
      "labels": [],
      "difficultyCount": 0,
      "creationDate": 1772298248,
      "playerCountAtEnd": 1,
      "feedbackCount": 0,
      "playerDidntFinishCount": 0,
      "mapReviewId": 1491,
      "latestSubmissionTimestamp": 1772298248,
      "timePlayed": 1,
      "messagingOpen": false,
      "mScoreExperimental": -1
    }
  ],
  "flashes": [],
  "itemCount": 2
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notMember"]
```

If the authenticated account does not have enough permissions in the club to manage map review activities, the response will contain an error (status 403):

```json
["clubMemberRole:error-notContentCreator"]
```

If the map review activity does not exist, the response will contain an error (status 404):

```json
["activity:error-notFound"]
```
