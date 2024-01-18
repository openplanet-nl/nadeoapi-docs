---
name: Get your clubs

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/mine?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of clubs to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of clubs to skip
      required: true
---

Gets clubs that you are a member of.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts) as the response depends on a specific user's club memberships.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/mine?length=1&offset=0
```

**Example response**:

```json
{
  "clubList": [
    {
      "role": "Member",
      "id": 383,
      "name": "World Tour",
      "tag": "TMWT",
      "description": "Welcome to the Trackmania World Tour Club!",
      "authorAccountId": "7cd60a75-609a-4e64-b286-16f329878249",
      "latestEditorAccountId": "ea6669c1-2a81-4b0c-8733-8297d0cbeaf1",
      "iconUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/de8cbfc8-673d-43fb-8da8-3592aa73718d/dds/game.dds?timestamp=1705451106.dds",
      "iconUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/de8cbfc8-673d-43fb-8da8-3592aa73718d/png/large.png?timestamp=1705451106.png",
      "iconUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/de8cbfc8-673d-43fb-8da8-3592aa73718d/png/medium.png?timestamp=1705451106.png",
      "iconUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/de8cbfc8-673d-43fb-8da8-3592aa73718d/png/small.png?timestamp=1705451106.png",
      "iconUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/de8cbfc8-673d-43fb-8da8-3592aa73718d/dds/game.dds?timestamp=1705451106.dds",
      "logoUrl": "",
      "decalUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/118ba665-720f-48ad-a497-52224f8d844a/dds/game.dds?timestamp=1705476525.dds",
      "decalUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/118ba665-720f-48ad-a497-52224f8d844a/png/large.png?timestamp=1705476525.png",
      "decalUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/118ba665-720f-48ad-a497-52224f8d844a/png/medium.png?timestamp=1705476525.png",
      "decalUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/118ba665-720f-48ad-a497-52224f8d844a/png/small.png?timestamp=1705476525.png",
      "decalUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/118ba665-720f-48ad-a497-52224f8d844a/dds/game.dds?timestamp=1705476525.dds",
      "screen16x9Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/dds/game.dds?timestamp=1704799823.dds",
      "screen16x9UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/png/large.png?timestamp=1704799823.png",
      "screen16x9UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/png/medium.png?timestamp=1704799823.png",
      "screen16x9UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/png/small.png?timestamp=1704799823.png",
      "screen16x9UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/dds/game.dds?timestamp=1704799823.dds",
      "screen64x41Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/dds/game.dds?timestamp=1704799823.dds",
      "screen64x41UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/png/large.png?timestamp=1704799823.png",
      "screen64x41UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/png/medium.png?timestamp=1704799823.png",
      "screen64x41UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/png/small.png?timestamp=1704799823.png",
      "screen64x41UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2eefa3e3-4367-43aa-bead-6830a1b1ccef/dds/game.dds?timestamp=1704799823.dds",
      "decalSponsor4x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/968e29be-83dc-4ea6-b6c1-f442be1755fe/dds/game.dds?timestamp=1705476204.dds",
      "decalSponsor4x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/968e29be-83dc-4ea6-b6c1-f442be1755fe/png/large.png?timestamp=1705476204.png",
      "decalSponsor4x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/968e29be-83dc-4ea6-b6c1-f442be1755fe/png/medium.png?timestamp=1705476204.png",
      "decalSponsor4x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/968e29be-83dc-4ea6-b6c1-f442be1755fe/png/small.png?timestamp=1705476204.png",
      "decalSponsor4x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/968e29be-83dc-4ea6-b6c1-f442be1755fe/dds/game.dds?timestamp=1705476204.dds",
      "screen8x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/f880b1af-ce01-49bd-a67d-9922e0d9fe99/dds/game.dds?timestamp=1705478254.dds",
      "screen8x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/f880b1af-ce01-49bd-a67d-9922e0d9fe99/png/large.png?timestamp=1705478254.png",
      "screen8x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/f880b1af-ce01-49bd-a67d-9922e0d9fe99/png/medium.png?timestamp=1705478254.png",
      "screen8x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/f880b1af-ce01-49bd-a67d-9922e0d9fe99/png/small.png?timestamp=1705478254.png",
      "screen8x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/f880b1af-ce01-49bd-a67d-9922e0d9fe99/dds/game.dds?timestamp=1705478254.dds",
      "screen16x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/91613b69-0cd8-44d4-8fde-cf6da552b0ed/dds/game.dds?timestamp=1705480122.dds",
      "screen16x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/91613b69-0cd8-44d4-8fde-cf6da552b0ed/png/large.png?timestamp=1705480122.png",
      "screen16x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/91613b69-0cd8-44d4-8fde-cf6da552b0ed/png/medium.png?timestamp=1705480122.png",
      "screen16x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/91613b69-0cd8-44d4-8fde-cf6da552b0ed/png/small.png?timestamp=1705480122.png",
      "screen16x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/91613b69-0cd8-44d4-8fde-cf6da552b0ed/dds/game.dds?timestamp=1705480122.dds",
      "verticalUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/fbc11b60-d1c6-4d7b-b7f5-5bf0f33f8ffe/dds/game.dds?timestamp=1705512498.dds",
      "verticalUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/fbc11b60-d1c6-4d7b-b7f5-5bf0f33f8ffe/png/large.png?timestamp=1705512498.png",
      "verticalUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/fbc11b60-d1c6-4d7b-b7f5-5bf0f33f8ffe/png/medium.png?timestamp=1705512498.png",
      "verticalUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/fbc11b60-d1c6-4d7b-b7f5-5bf0f33f8ffe/png/small.png?timestamp=1705512498.png",
      "verticalUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/fbc11b60-d1c6-4d7b-b7f5-5bf0f33f8ffe/dds/game.dds?timestamp=1705512498.dds",
      "backgroundUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/7de611fa-1838-4d36-a97d-cbc098299f7e/dds/game.dds?timestamp=1705564597.dds",
      "backgroundUrlJpgLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/7de611fa-1838-4d36-a97d-cbc098299f7e/jpg/large.jpg?timestamp=1705564597.jpg",
      "backgroundUrlJpgMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/7de611fa-1838-4d36-a97d-cbc098299f7e/jpg/medium.jpg?timestamp=1705564597.jpg",
      "backgroundUrlJpgSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/7de611fa-1838-4d36-a97d-cbc098299f7e/jpg/small.jpg?timestamp=1705564597.jpg",
      "backgroundUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/7de611fa-1838-4d36-a97d-cbc098299f7e/dds/game.dds?timestamp=1705564597.dds",
      "creationTimestamp": 1593427733,
      "popularityLevel": 3,
      "state": "public",
      "featured": true,
      "walletUid": "a8141d02-7838-4fc5-85ff-47b6bc42ec8b",
      "metadata": "",
      "editionTimestamp": 1705419834,
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
  ],
  "maxPage": 14,
  "clubCount": 41
}
```

If you aren't a member of any clubs, the reponse will contain an empty list:

```json
{
  "clubList": [],
  "maxPage": 0,
  "clubCount": 0
}
```
