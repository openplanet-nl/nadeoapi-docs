---
name: Get clubs

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club?length={length}&offset={offset}&name={name}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of clubs to retrieve
      required: true
      max: 250
    - name: offset
      type: integer
      description: The number of clubs to skip
      required: true
    - name: name
      type: string
      description: A string to search for in the club names
---

Gets a list of clubs.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).
- This endpoint does not return all available clubs. When excluding the `name` parameter, it returns all verified clubs - otherwise the response is limited to 200 clubs.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club?length=5&offset=3
```

**Example response**:

```json
{
  "clubList": [
    {
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
    },
    ...
    {
      "id": 25,
      "name": "$s$fffTM $6F9Exchange",
      "tag": "$S$FFFT$6F9MX$Z",
      "description": "Visit $l[https://trackmania.exchange/]TMX$l. The community run map sharing site for Trackmania.",
      "authorAccountId": "a07f01cd-afb0-4230-9c13-868c1ede28a3",
      "latestEditorAccountId": "ea6669c1-2a81-4b0c-8733-8297d0cbeaf1",
      "iconUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2628bea8-972a-4a86-9378-78e148063bff/dds/game.dds?timestamp=1705449678.dds",
      "iconUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2628bea8-972a-4a86-9378-78e148063bff/png/large.png?timestamp=1705449678.png",
      "iconUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2628bea8-972a-4a86-9378-78e148063bff/png/medium.png?timestamp=1705449678.png",
      "iconUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2628bea8-972a-4a86-9378-78e148063bff/png/small.png?timestamp=1705449678.png",
      "iconUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2628bea8-972a-4a86-9378-78e148063bff/dds/game.dds?timestamp=1705449678.dds",
      "logoUrl": "",
      "decalUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1a41e4b2-3a0f-4f35-a9e3-ef03e1117e3e/dds/game.dds?timestamp=1705452809.dds",
      "decalUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1a41e4b2-3a0f-4f35-a9e3-ef03e1117e3e/png/large.png?timestamp=1705452809.png",
      "decalUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1a41e4b2-3a0f-4f35-a9e3-ef03e1117e3e/png/medium.png?timestamp=1705452809.png",
      "decalUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1a41e4b2-3a0f-4f35-a9e3-ef03e1117e3e/png/small.png?timestamp=1705452809.png",
      "decalUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1a41e4b2-3a0f-4f35-a9e3-ef03e1117e3e/dds/game.dds?timestamp=1705452809.dds",
      "screen16x9Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/dds/game.dds?timestamp=1704800535.dds",
      "screen16x9UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/png/large.png?timestamp=1704800535.png",
      "screen16x9UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/png/medium.png?timestamp=1704800535.png",
      "screen16x9UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/png/small.png?timestamp=1704800535.png",
      "screen16x9UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/dds/game.dds?timestamp=1704800535.dds",
      "screen64x41Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/dds/game.dds?timestamp=1704800535.dds",
      "screen64x41UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/png/large.png?timestamp=1704800535.png",
      "screen64x41UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/png/medium.png?timestamp=1704800535.png",
      "screen64x41UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/png/small.png?timestamp=1704800535.png",
      "screen64x41UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/81fd2d85-7863-449a-bf94-525e4f7574f1/dds/game.dds?timestamp=1704800535.dds",
      "decalSponsor4x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/5fa89d8f-465b-47fe-b02c-58d3fd15e8dc/dds/game.dds?timestamp=1705471764.dds",
      "decalSponsor4x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/5fa89d8f-465b-47fe-b02c-58d3fd15e8dc/png/large.png?timestamp=1705471764.png",
      "decalSponsor4x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/5fa89d8f-465b-47fe-b02c-58d3fd15e8dc/png/medium.png?timestamp=1705471764.png",
      "decalSponsor4x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/5fa89d8f-465b-47fe-b02c-58d3fd15e8dc/png/small.png?timestamp=1705471764.png",
      "decalSponsor4x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/5fa89d8f-465b-47fe-b02c-58d3fd15e8dc/dds/game.dds?timestamp=1705471764.dds",
      "screen8x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/84d295cb-b9b6-45ae-a754-f6d7a316ce5e/dds/game.dds?timestamp=1705482425.dds",
      "screen8x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/84d295cb-b9b6-45ae-a754-f6d7a316ce5e/png/large.png?timestamp=1705482425.png",
      "screen8x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/84d295cb-b9b6-45ae-a754-f6d7a316ce5e/png/medium.png?timestamp=1705482425.png",
      "screen8x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/84d295cb-b9b6-45ae-a754-f6d7a316ce5e/png/small.png?timestamp=1705482425.png",
      "screen8x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/84d295cb-b9b6-45ae-a754-f6d7a316ce5e/dds/game.dds?timestamp=1705482425.dds",
      "screen16x1Url": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bf7ddb28-13f4-40a8-a2a8-495dfe33466c/dds/game.dds?timestamp=1705529831.dds",
      "screen16x1UrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bf7ddb28-13f4-40a8-a2a8-495dfe33466c/png/large.png?timestamp=1705529831.png",
      "screen16x1UrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bf7ddb28-13f4-40a8-a2a8-495dfe33466c/png/medium.png?timestamp=1705529831.png",
      "screen16x1UrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bf7ddb28-13f4-40a8-a2a8-495dfe33466c/png/small.png?timestamp=1705529831.png",
      "screen16x1UrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/bf7ddb28-13f4-40a8-a2a8-495dfe33466c/dds/game.dds?timestamp=1705529831.dds",
      "verticalUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/090d1418-3cc4-48e4-9001-586f4bf7a11d/dds/game.dds?timestamp=1705480323.dds",
      "verticalUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/090d1418-3cc4-48e4-9001-586f4bf7a11d/png/large.png?timestamp=1705480323.png",
      "verticalUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/090d1418-3cc4-48e4-9001-586f4bf7a11d/png/medium.png?timestamp=1705480323.png",
      "verticalUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/090d1418-3cc4-48e4-9001-586f4bf7a11d/png/small.png?timestamp=1705480323.png",
      "verticalUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/090d1418-3cc4-48e4-9001-586f4bf7a11d/dds/game.dds?timestamp=1705480323.dds",
      "backgroundUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/0ab04dd3-e824-4826-8b18-6e8f410acf60/dds/game.dds?timestamp=1705516504.dds",
      "backgroundUrlJpgLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/0ab04dd3-e824-4826-8b18-6e8f410acf60/jpg/large.jpg?timestamp=1705516504.jpg",
      "backgroundUrlJpgMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/0ab04dd3-e824-4826-8b18-6e8f410acf60/jpg/medium.jpg?timestamp=1705516504.jpg",
      "backgroundUrlJpgSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/0ab04dd3-e824-4826-8b18-6e8f410acf60/jpg/small.jpg?timestamp=1705516504.jpg",
      "backgroundUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/0ab04dd3-e824-4826-8b18-6e8f410acf60/dds/game.dds?timestamp=1705516504.dds",
      "creationTimestamp": 1591396870,
      "popularityLevel": 2,
      "state": "public",
      "featured": true,
      "walletUid": "3373c4c2-842a-4f9a-ade7-e15e759a07f2",
      "metadata": "",
      "editionTimestamp": 1705479266,
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
  "maxPage": 34,
  "clubCount": 166
}
```
