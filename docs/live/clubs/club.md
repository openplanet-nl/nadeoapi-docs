---
name: Get club by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: string
      description: The club's ID
      required: true
---

Gets information for the specified club.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/9
```

**Example response**:

```json
{
  "id": 9,
  "name": "$s$f39Openplanet $fff",
  "tag": "$N $Z$S$F39$N $S",
  "description": "$l[https://openplanet.dev]Openplanet.dev$l and $l[https://trackmania.io]Trackmania.io$l",
  "authorAccountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
  "latestEditorAccountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
  "iconUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/da207e8b-1fab-4bb4-9a8d-de45f5e76399/dds/game.dds?timestamp=1705446531.dds",
  "iconUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/da207e8b-1fab-4bb4-9a8d-de45f5e76399/png/large.png?timestamp=1705446531.png",
  "iconUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/da207e8b-1fab-4bb4-9a8d-de45f5e76399/png/medium.png?timestamp=1705446531.png",
  "iconUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/da207e8b-1fab-4bb4-9a8d-de45f5e76399/png/small.png?timestamp=1705446531.png",
  "iconUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/da207e8b-1fab-4bb4-9a8d-de45f5e76399/dds/game.dds?timestamp=1705446531.dds",
  "logoUrl": "",
  "decalUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/d021a74e-40ba-4773-8acf-7e637b9e104a/dds/game.dds?timestamp=1705452813.dds",
  "decalUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/d021a74e-40ba-4773-8acf-7e637b9e104a/png/large.png?timestamp=1705452813.png",
  "decalUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/d021a74e-40ba-4773-8acf-7e637b9e104a/png/medium.png?timestamp=1705452813.png",
  "decalUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/d021a74e-40ba-4773-8acf-7e637b9e104a/png/small.png?timestamp=1705452813.png",
  "decalUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/d021a74e-40ba-4773-8acf-7e637b9e104a/dds/game.dds?timestamp=1705452813.dds",
  "screen16x9Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/dds/game.dds?timestamp=1704798793.dds",
  "screen16x9UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/png/large.png?timestamp=1704798793.png",
  "screen16x9UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/png/medium.png?timestamp=1704798793.png",
  "screen16x9UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/png/small.png?timestamp=1704798793.png",
  "screen16x9UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/dds/game.dds?timestamp=1704798793.dds",
  "screen64x41Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/dds/game.dds?timestamp=1704798793.dds",
  "screen64x41UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/png/large.png?timestamp=1704798793.png",
  "screen64x41UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/png/medium.png?timestamp=1704798793.png",
  "screen64x41UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/png/small.png?timestamp=1704798793.png",
  "screen64x41UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/854a9cc8-bed3-4802-8b0d-f1b0ff10dac5/dds/game.dds?timestamp=1704798793.dds",
  "decalSponsor4x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1f3988e9-a231-453e-abd7-4c27fc874d98/dds/game.dds?timestamp=1705473533.dds",
  "decalSponsor4x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1f3988e9-a231-453e-abd7-4c27fc874d98/png/large.png?timestamp=1705473533.png",
  "decalSponsor4x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1f3988e9-a231-453e-abd7-4c27fc874d98/png/medium.png?timestamp=1705473533.png",
  "decalSponsor4x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1f3988e9-a231-453e-abd7-4c27fc874d98/png/small.png?timestamp=1705473533.png",
  "decalSponsor4x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1f3988e9-a231-453e-abd7-4c27fc874d98/dds/game.dds?timestamp=1705473533.dds",
  "screen8x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6223fe8d-c05d-4417-8f9e-49d59342ee76/dds/game.dds?timestamp=1705478104.dds",
  "screen8x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6223fe8d-c05d-4417-8f9e-49d59342ee76/png/large.png?timestamp=1705478104.png",
  "screen8x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6223fe8d-c05d-4417-8f9e-49d59342ee76/png/medium.png?timestamp=1705478104.png",
  "screen8x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6223fe8d-c05d-4417-8f9e-49d59342ee76/png/small.png?timestamp=1705478104.png",
  "screen8x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/6223fe8d-c05d-4417-8f9e-49d59342ee76/dds/game.dds?timestamp=1705478104.dds",
  "screen16x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/26a8cdcf-ce9f-4c2d-8ddc-34626c3729ac/dds/game.dds?timestamp=1705479833.dds",
  "screen16x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/26a8cdcf-ce9f-4c2d-8ddc-34626c3729ac/png/large.png?timestamp=1705479833.png",
  "screen16x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/26a8cdcf-ce9f-4c2d-8ddc-34626c3729ac/png/medium.png?timestamp=1705479833.png",
  "screen16x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/26a8cdcf-ce9f-4c2d-8ddc-34626c3729ac/png/small.png?timestamp=1705479833.png",
  "screen16x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/26a8cdcf-ce9f-4c2d-8ddc-34626c3729ac/dds/game.dds?timestamp=1705479833.dds",
  "verticalUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/978556d6-7a1b-490d-bc73-075cfa9e6b9c/dds/game.dds?timestamp=1705480332.dds",
  "verticalUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/978556d6-7a1b-490d-bc73-075cfa9e6b9c/png/large.png?timestamp=1705480332.png",
  "verticalUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/978556d6-7a1b-490d-bc73-075cfa9e6b9c/png/medium.png?timestamp=1705480332.png",
  "verticalUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/978556d6-7a1b-490d-bc73-075cfa9e6b9c/png/small.png?timestamp=1705480332.png",
  "verticalUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/978556d6-7a1b-490d-bc73-075cfa9e6b9c/dds/game.dds?timestamp=1705480332.dds",
  "backgroundUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bfd5be0f-006b-4abe-9671-fe0fe1a7d338/dds/game.dds?timestamp=1705516513.dds",
  "backgroundUrlJpgLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bfd5be0f-006b-4abe-9671-fe0fe1a7d338/jpg/large.jpg?timestamp=1705516513.jpg",
  "backgroundUrlJpgMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bfd5be0f-006b-4abe-9671-fe0fe1a7d338/jpg/medium.jpg?timestamp=1705516513.jpg",
  "backgroundUrlJpgSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bfd5be0f-006b-4abe-9671-fe0fe1a7d338/jpg/small.jpg?timestamp=1705516513.jpg",
  "backgroundUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bfd5be0f-006b-4abe-9671-fe0fe1a7d338/dds/game.dds?timestamp=1705516513.dds",
  "creationTimestamp": 1591385606,
  "popularityLevel": 1,
  "state": "public",
  "featured": true,
  "walletUid": "80b8a93c-c4a3-4fc7-bd79-5bef14c405ee",
  "metadata": "",
  "editionTimestamp": 1680626020,
  "iconTheme": "",
  "decalTheme": "",
  "screen16x9Theme": "",
  "screen64x41Theme": "",
  "screen8x1Theme": "",
  "screen16x1Theme": "",
  "verticalTheme": "",
  "backgroundTheme": "",
  "verified": true
}
```

If the club does not exist, the response will contain an error:

```json
["club:error-notFound"]
```
