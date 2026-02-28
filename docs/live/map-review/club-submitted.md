---
name: Get submitted maps to club map review

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/map-review/{mapReviewId}/map/mine?length={length}&offset={offset}&withFeedback={withFeedback}&withMapInfo={withMapInfo}

audience: NadeoLiveServices
parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the map review activity belongs to
      required: true
    - name: mapReviewId
      type: integer
      description: The ID of the map review activity
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
    - name: withFeedback
      type: boolean
      description: Whether to include detailed statistics for votes
      default: false
    - name: withMapInfo
      type: boolean
      description: Whether to include detailed info about each map
      default: false
---

Retrieves your maps submitted to a club map review activity.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The data returned from this endpoint is largely the same data that can be accessed through the player's tracks on the [official website](https://trackmania.com).
- If the `withFeedback` parameter is set to `false`, the `noteInfo` field in the response will be `null`. Similarly, if the `withMapInfo` parameter is set to `false`, the `map` field will be `null`.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/103034/map-review/1008026/map/mine?offset=0&length=48&withFeedback=true&withMapInfo=true
```

**Example response**:

```json
{
  "submittedMaps": [
    {
      "creationTimestamp": 1772298248,
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
      "feedbackCount": 0,
      "latestSubmissionTimestamp": 1772298248,
      "messagingOpen": false
    }
  ],
  "itemCount": 1
}
```

If the club or map review activity does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```
