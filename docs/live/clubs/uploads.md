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
      max: 250
    - name: offset
      type: integer
      description: The number of upload activities to skip
      required: true
---

Gets a list of club-related upload activities (where players can upload maps, skins and items).

---

**Remarks**:

- There are three types of upload activities you can retrieve: `map-upload`, `skin-upload` and `item-upload`. These relate to club track uploads, skin uploads, and item collection activities, respectively.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference).

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
      "bucketItemList": [],
      "bucketItemCount": 1,
      "popularityLevel": 0,
      "popularityValue": 0,
      "creationTimestamp": 1698082804,
      "creatorAccountId": "7ad33388-641e-4497-b063-c88e75552645",
      "latestEditorAccountId": "7ad33388-641e-4497-b063-c88e75552645",
      "id": 486055,
      "clubId": 66661,
      "clubName": "Ubisoft Club",
      "name": "Laserhawk",
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6af33f6f-1fe0-4f7d-bc0c-aa08d3f5eb90/dds/game.dds?timestamp=1705438118.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6af33f6f-1fe0-4f7d-bc0c-aa08d3f5eb90/png/large.png?timestamp=1705438118.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6af33f6f-1fe0-4f7d-bc0c-aa08d3f5eb90/png/medium.png?timestamp=1705438118.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6af33f6f-1fe0-4f7d-bc0c-aa08d3f5eb90/png/small.png?timestamp=1705438118.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6af33f6f-1fe0-4f7d-bc0c-aa08d3f5eb90/dds/game.dds?timestamp=1705438118.dds",
      "mediaTheme": ""
    },
    {
      "type": "item-upload",
      "bucketItemList": [],
      "bucketItemCount": 1,
      "popularityLevel": 0,
      "popularityValue": 0,
      "creationTimestamp": 1697876243,
      "creatorAccountId": "ff167c35-dd89-482c-b02b-3764aa4ce16d",
      "latestEditorAccountId": "ff167c35-dd89-482c-b02b-3764aa4ce16d",
      "id": 484849,
      "clubId": 55250,
      "clubName": "JonnyIsland",
      "name": "Corkscrew Loops",
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/4dd8cfa9-44bd-4595-bb7a-e3918461af03/dds/game.dds?timestamp=1705437984.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/4dd8cfa9-44bd-4595-bb7a-e3918461af03/png/large.png?timestamp=1705437984.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/4dd8cfa9-44bd-4595-bb7a-e3918461af03/png/medium.png?timestamp=1705437984.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/4dd8cfa9-44bd-4595-bb7a-e3918461af03/png/small.png?timestamp=1705437984.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/4dd8cfa9-44bd-4595-bb7a-e3918461af03/dds/game.dds?timestamp=1705437984.dds",
      "mediaTheme": ""
    },
    {
      "type": "item-upload",
      "bucketItemList": [],
      "bucketItemCount": 1,
      "popularityLevel": 0,
      "popularityValue": 0,
      "creationTimestamp": 1695505620,
      "creatorAccountId": "3aa9e443-3e27-4778-bbbc-40946231bd78",
      "latestEditorAccountId": "3aa9e443-3e27-4778-bbbc-40946231bd78",
      "id": 470842,
      "clubId": 57018,
      "clubName": "DUCKING NANDO",
      "name": "Gps pack",
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2ddfa1e1-ff9d-470f-8fb4-095dd1f9b424/dds/game.dds?timestamp=1705436840.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2ddfa1e1-ff9d-470f-8fb4-095dd1f9b424/png/large.png?timestamp=1705436840.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2ddfa1e1-ff9d-470f-8fb4-095dd1f9b424/png/medium.png?timestamp=1705436840.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2ddfa1e1-ff9d-470f-8fb4-095dd1f9b424/png/small.png?timestamp=1705436840.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2ddfa1e1-ff9d-470f-8fb4-095dd1f9b424/dds/game.dds?timestamp=1705436840.dds",
      "mediaTheme": ""
    }
  ],
  "maxPage": 13,
  "itemCount": 39
}
```

Invalid bucket types will result in an error in the response:

```json
["type:error-inArray"]
```
