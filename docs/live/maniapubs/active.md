---
name: Get active Maniapubs

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/advertising/display/active

audience: NadeoLiveServices
---

Get a list of active Maniapubs (in-game ads) along with their metadata.

---

**Remarks**:
- This endpoint doesn't return zone-specific Maniapubs - it might depend on the account's current zone, but you can't request Maniapubs by zone directly.
- As of 2023-12-21, this endpoint's response structure links to `.dds` files by default, while several scaled `.jpg` versions are available using separate fields (see example below for reference).

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/advertising/display/active
```

**Example response**:
```json
{
  "displayList": [
    {
      "campaignUid": "b7ef5b35-f1bf-41ae-a58e-7356c86b9c2d",
      "name": "Beacon World League",
      "adType": "ugc",
      "externalUrl": "https://discord.gg/aJBcSYN2dj",
      "screen2x3Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/3e5306aa-8e44-4cbe-bb26-aeee38a2a70f/dds/game.dds?timestamp=1702643396.dds",
      "screen2x3UrlJpgLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/3e5306aa-8e44-4cbe-bb26-aeee38a2a70f/jpg/large.jpg?timestamp=1702643396.jpg",
      "screen2x3UrlJpgMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/3e5306aa-8e44-4cbe-bb26-aeee38a2a70f/jpg/medium.jpg?timestamp=1702643396.jpg",
      "screen2x3UrlJpgSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/3e5306aa-8e44-4cbe-bb26-aeee38a2a70f/jpg/small.jpg?timestamp=1702643396.jpg",
      "screen2x3UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/3e5306aa-8e44-4cbe-bb26-aeee38a2a70f/dds/game.dds?timestamp=1702643396.dds",
      "screen16x9Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/dds/game.dds?timestamp=1702987488.dds",
      "screen16x9UrlJpgLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/jpg/large.jpg?timestamp=1702987488.jpg",
      "screen16x9UrlJpgMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/jpg/medium.jpg?timestamp=1702987488.jpg",
      "screen16x9UrlJpgSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/jpg/small.jpg?timestamp=1702987488.jpg",
      "screen16x9UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/dds/game.dds?timestamp=1702987488.dds",
      "screen64x41Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/dds/game.dds?timestamp=1702987488.dds",
      "screen64x41UrlJpgLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/jpg/large.jpg?timestamp=1702987488.jpg",
      "screen64x41UrlJpgMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/jpg/medium.jpg?timestamp=1702987488.jpg",
      "screen64x41UrlJpgSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/jpg/small.jpg?timestamp=1702987488.jpg",
      "screen64x41UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/335586ba-e30a-4f75-8e24-8a23deab5afa/dds/game.dds?timestamp=1702987488.dds",
      "screen64x10Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9effcdf4-66ab-49af-af68-8f85068b3d53/dds/game.dds?timestamp=1702651418.dds",
      "screen64x10UrlJpgLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9effcdf4-66ab-49af-af68-8f85068b3d53/jpg/large.jpg?timestamp=1702651418.jpg",
      "screen64x10UrlJpgMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9effcdf4-66ab-49af-af68-8f85068b3d53/jpg/medium.jpg?timestamp=1702651418.jpg",
      "screen64x10UrlJpgSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9effcdf4-66ab-49af-af68-8f85068b3d53/jpg/small.jpg?timestamp=1702651418.jpg",
      "screen64x10UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/9effcdf4-66ab-49af-af68-8f85068b3d53/dds/game.dds?timestamp=1702651418.dds",
      "mediaUrl": "",
      "displayFormat": "",
      "ratio": 0,
      "displayRatio": 0,
      "endTimestamp": 1703460488,
      "relativeEnd": 282414
    },
    ...
  ],
  "itemCount": 10
}
```
