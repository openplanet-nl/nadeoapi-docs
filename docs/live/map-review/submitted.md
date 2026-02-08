---
name: Get submitted maps

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/map/map-review/{reviewType}/submitted-map?length={length}&offset={offset}&withFeedback={withFeedback}&withMapInfo={withMapInfo}

audience: NadeoLiveServices
parameters:
  path:
    - name: reviewType
      type: string
      description: The type of review server
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
      description: Whether to include given feedback for each applicable map
    - name: withMapInfo
      type: boolean
      description: Whether to include detailed info on each map
---

Retrieves your maps submitted to map review.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `withFeedback` and `withMapInfo` query parameters do not seem to change what is actually returned in the response, but the game sets these to `true` when requesting maps.
- The data returned from this endpoint is largely the same data that can be accessed through the player's tracks on the [official website](https://trackmania.com).
- Examples of supported review types can be found in the [glossary](/glossary#map-review-type).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/map-review/totd/submitted-map?length=144&offset=0
```

**Example response**:

```json
{
  "submittedMaps": [
    {
      "mapUid": "ZZeF_oCW5MvMrMhJ2dYMirxOc60",
      "feedbackCount": 27,
      "creationTimestamp": 1740631386,
      "latestSubmissionTimestamp": 1741575022,
      "nominated": false,
      "map": {
        "uid": "ZZeF_oCW5MvMrMhJ2dYMirxOc60",
        "mapId": "2239cc16-25d5-4ccc-8480-45136b925957",
        "name": "B08",
        "author": "594be80b-62f3-4705-932b-e743e97882cf",
        "submitter": "594be80b-62f3-4705-932b-e743e97882cf",
        "authorTime": 29873,
        "goldTime": 32000,
        "silverTime": 36000,
        "bronzeTime": 45000,
        "nbLaps": 0,
        "valid": true,
        "downloadUrl": "https://core.trackmania.nadeo.live/maps/2239cc16-25d5-4ccc-8480-45136b925957/file",
        "thumbnailUrl": "https://core.trackmania.nadeo.live/maps/2239cc16-25d5-4ccc-8480-45136b925957/thumbnail.jpg",
        "uploadTimestamp": 1742204266,
        "updateTimestamp": 1742204266
      },
      "noteInfo": {
        "countTotal": 27,
        "average": 4.3704,
        "countStar1": 1,
        "countStar2": 2,
        "countStar3": 0,
        "countStar4": 7,
        "countStar5": 17,
        "countStarMax": 17
      },
      "nadeoNote": 0,
      "labels": [],
      "mapStyles": [
        "Puzzle"
      ],
      "messagingOpen": false
    },
    ...
  ],
  "itemCount": 3
}
```

If a map review type does not exist, the response will contain an error:

```json
[
  "mapReview:error-notFound"
]
```
