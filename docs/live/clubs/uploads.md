---
name: Get club upload activities

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/bucket/{bucketType}/all?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: bucketType
      type: string
      description: The type of upload activity to retrieve (see below for accepted values)
      required: true
  query:
    - name: length
      type: integer
      description: The number of upload activities to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of upload activities to skip
      required: true
---

Gets a list of club-related upload activities (where players can upload maps, skins and items).

---

**Remarks**:
- There are three types of upload activities you can retrieve: `map-upload`, `skin-upload` and `item-upload`. These relate to club track uploads, skin uploads and item collection activities, respectively.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/bucket/item-upload/all?length=3&offset=0
```

**Example response**:
```json
{
  "clubBucketList": [
    {
      "type": "item-upload",
      "bucketItemList": [

      ],
      "bucketItemCount": 1,
      "popularityLevel": 0,
      "popularityValue": 0,
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/31644/62e710715faaf.png?updateTimestamp=1659310196.png",
      "creationTimestamp": 1659310192,
      "id": 305333,
      "clubId": 31644,
      "clubName": "TMA.gg",
      "name": "WTMT"
    },
    {
      "type": "item-upload",
      "bucketItemList": [

      ],
      "bucketItemCount": 1,
      "popularityLevel": 0,
      "popularityValue": 0,
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/44367/62d83eaf92c2c.png?updateTimestamp=1658338994.png",
      "creationTimestamp": 1658338991,
      "id": 301732,
      "clubId": 44367,
      "clubName": "slowpiou items",
      "name": "trackwall roads"
    },
    {
      "type": "item-upload",
      "bucketItemList": [

      ],
      "bucketItemCount": 1,
      "popularityLevel": 0,
      "popularityValue": 0,
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/31644/626629b661e54.png?updateTimestamp=1650862520.png",
      "creationTimestamp": 1650862517,
      "id": 271067,
      "clubId": 31644,
      "clubName": "TMA.gg",
      "name": "DirtRoad_Platform"
    }
  ],
  "maxPage": 16,
  "itemCount": 47
}
```

Invalid bucket types will result in an error in the response:

```json
[
  "type:error-inArray"
]
```
