---
name: Get club upload activity by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubID}/bucket/{bucketID}?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the upload activity belongs to
      required: true
    - name: bucketID
      type: integer
      description: The ID of the upload activity to be requested
      required: true
  query:
    - name: length
      type: integer
      description: The number of items to retrieve
      required: false
      default: 10
    - name: offset
      type: integer
      description: The number of items to skip
      required: false
      default: 0
---

Gets the maps, items, or skins in a specific upload activity.

---

**Remarks**:

- The returned bucket will have one of three types : `map-upload`, `skin-upload`, or `item-upload`. These relate to club track uploads, skin uploads and item collection activities, respectively.
- The primary identifier for items in the returned bucket is their `itemId`. For maps this will be a `mapUid` and for skins this is a `skinID`.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/42175/bucket/344426
```

**Example response**:

```json
{
  "type": "map-upload",
  "bucketItemList": [
    {
      "itemId": "zOAI0h0WgikjTVv2RHcPShABLq0",
      "position": 0,
      "description": "",
      "mediaUrls": [],
      "mediaUrlsJpgLarge": [],
      "mediaUrlsJpgMedium": [],
      "mediaUrlsJpgSmall": [],
      "mediaUrlsDds": []
    },
    ...
    {
      "itemId": "wQS2NQxwV_PVweJb1MoBwft2bs6",
      "position": 9,
      "description": "",
      "mediaUrls": [],
      "mediaUrlsJpgLarge": [],
      "mediaUrlsJpgMedium": [],
      "mediaUrlsJpgSmall": [],
      "mediaUrlsDds": []
    }
  ],
  "bucketItemCount": 63,
  "popularityLevel": 0,
  "popularityValue": 0,
  "creationTimestamp": 1673276709,
  "creatorAccountId": "fc8467b8-b253-457f-b8bb-3bbd2bb5bfdd",
  "latestEditorAccountId": "fc8467b8-b253-457f-b8bb-3bbd2bb5bfdd",
  "id": 344426,
  "clubId": 42175,
  "clubName": "$Z$f72ArEyeses$fff' $888Club",
  "name": "Randomly Generated G",
  "mediaUrl": "",
  "mediaUrlPngLarge": "",
  "mediaUrlPngMedium": "",
  "mediaUrlPngSmall": "",
  "mediaUrlDds": "",
  "mediaTheme": ""
}
```
