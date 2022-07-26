---
name: Get active Maniapubs

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/advertising/display/active

audience: NadeoLiveServices
---

Get a list of active Maniapubs (in-game ads), containing their metadatas (such as a URL, the images, the timestamp when the maniapub ends...)

Example response:

```json
{
  "displayList": [
    {
      "campaignUid": "77306711-6c49-4df3-88a3-86e63b202b6a",
      "name": "TOM PATHFINDING CUP",
      "adType": "ugc",
      "externalUrl": "https://discord.link/TOM",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/cd2dbc23-4141-4a1d-839a-4959c5bdd00f/62d3ef36796e9.jpg?updateTimestamp=1658056504.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/cd2dbc23-4141-4a1d-839a-4959c5bdd00f/62d3efd7c1083.jpg?updateTimestamp=1658056666.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/cd2dbc23-4141-4a1d-839a-4959c5bdd00f/62d3f0ee42dfe.jpg?updateTimestamp=1658056945.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/cd2dbc23-4141-4a1d-839a-4959c5bdd00f/62d3ef36796e9.jpg?updateTimestamp=1658056504.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659016773,
      "relativeEnd": 143841
    },
    {
      "campaignUid": "8e2eabe0-342d-4355-aff5-7bfd31e7a0cd",
      "name": "Scarzor Ice Training",
      "adType": "ugc",
      "externalUrl": "https://youtu.be/OJx5Q8pDYug",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/28c7401d-8f7b-4365-9051-fcb99f751dd9/62b56c680eb88.jpg?updateTimestamp=1656056938.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/28c7401d-8f7b-4365-9051-fcb99f751dd9/62b56ccf70cf8.jpg?updateTimestamp=1656057042.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/28c7401d-8f7b-4365-9051-fcb99f751dd9/62b56c5eb5d27.jpg?updateTimestamp=1656056929.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/28c7401d-8f7b-4365-9051-fcb99f751dd9/62b56c680eb88.jpg?updateTimestamp=1656056938.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659600385,
      "relativeEnd": 727453
    },
    {
      "campaignUid": "e23e75a3-e82b-467f-a93f-c85265fbc474",
      "name": "ESA Summer 2022",
      "adType": "ugc",
      "externalUrl": "https://twitch.tv/esamarathon",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/cd5692fa-8aa2-4c49-afd2-50e228d229c6/62dc63c0b28b4.jpg?updateTimestamp=1658610627.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/cd5692fa-8aa2-4c49-afd2-50e228d229c6/62dc63ddb7a90.jpg?updateTimestamp=1658610656.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/cd5692fa-8aa2-4c49-afd2-50e228d229c6/62d9053410bce.jpg?updateTimestamp=1658389814.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/cd5692fa-8aa2-4c49-afd2-50e228d229c6/62dc63c0b28b4.jpg?updateTimestamp=1658610627.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659092348,
      "relativeEnd": 219416
    },
    {
      "campaignUid": "00417ecb-ba77-4d14-8f92-2e6d4c9ddc30",
      "name": "TM SCENERY HUB",
      "adType": "ugc",
      "externalUrl": "https://discord.gg/xAsaMceCdZ",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/c9a7391d-a67a-4125-a2f4-29adb8a0afdb/62214395aa178.jpg?updateTimestamp=1646347160.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/c9a7391d-a67a-4125-a2f4-29adb8a0afdb/6221434fb39a6.jpg?updateTimestamp=1646347090.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/c9a7391d-a67a-4125-a2f4-29adb8a0afdb/6221438d2bfc5.jpg?updateTimestamp=1646347151.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/c9a7391d-a67a-4125-a2f4-29adb8a0afdb/62214395aa178.jpg?updateTimestamp=1646347160.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659114306,
      "relativeEnd": 241374
    },
    {
      "campaignUid": "164b3980-71e9-4f15-92e1-d692e36b6d7c",
      "name": "UCC",
      "adType": "ugc",
      "externalUrl": "https://tma.gg/cups/ucc",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/b15366bb-c507-4c18-9402-0e5a5fdd4a7d/62c7e0740c74c.jpg?updateTimestamp=1657266294.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/b15366bb-c507-4c18-9402-0e5a5fdd4a7d/62c7e06a578d6.jpg?updateTimestamp=1657266285.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/b15366bb-c507-4c18-9402-0e5a5fdd4a7d/62c7e05e5be3a.jpg?updateTimestamp=1657266273.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/b15366bb-c507-4c18-9402-0e5a5fdd4a7d/62c7e0740c74c.jpg?updateTimestamp=1657266294.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659312313,
      "relativeEnd": 439381
    },
    {
      "campaignUid": "862d3615-bee7-4e8b-ad0f-cc647f972f33",
      "name": "Trackmania.io",
      "adType": "ugc",
      "externalUrl": "https://trackmania.io/",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/542815c1-618e-4f1f-b86a-aeba39419278/60d31e88f23a9.jpg?updateTimestamp=1624448651.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/542815c1-618e-4f1f-b86a-aeba39419278/60d320d23cacb.jpg?updateTimestamp=1624449235.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/542815c1-618e-4f1f-b86a-aeba39419278/60d31dc654083.jpg?updateTimestamp=1624448455.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/542815c1-618e-4f1f-b86a-aeba39419278/60d31e88f23a9.jpg?updateTimestamp=1624448651.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659188620,
      "relativeEnd": 315688
    },
    {
      "campaignUid": "978e3e23-229a-4f77-9bf6-aa23fe580d52",
      "name": "Royal Training Maps",
      "adType": "ugc",
      "externalUrl": "https://discord.com/invite/JYunEPKuMu",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/413fbd54-486e-4924-a094-72b916f69928/61f2afdfc3ecb.jpg?updateTimestamp=1643294690.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/413fbd54-486e-4924-a094-72b916f69928/61f2afa46ab68.jpg?updateTimestamp=1643294630.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/413fbd54-486e-4924-a094-72b916f69928/61f2aff68e335.jpg?updateTimestamp=1643294712.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/413fbd54-486e-4924-a094-72b916f69928/61f2afdfc3ecb.jpg?updateTimestamp=1643294690.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659465129,
      "relativeEnd": 592197
    },
    {
      "campaignUid": "74e15443-83b4-433d-8724-78935a43d353",
      "name": "Evo",
      "adType": "ugc",
      "externalUrl": "https://discord.gg/evotm",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/37416ff5-d410-4643-adde-43d314b7f87d/61af70b748735.jpg?updateTimestamp=1638887610.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/37416ff5-d410-4643-adde-43d314b7f87d/61af70ef27bde.jpg?updateTimestamp=1638887666.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/37416ff5-d410-4643-adde-43d314b7f87d/61af70abd6531.jpg?updateTimestamp=1638887598.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/37416ff5-d410-4643-adde-43d314b7f87d/61af70b748735.jpg?updateTimestamp=1638887610.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659302878,
      "relativeEnd": 429946
    },
    {
      "campaignUid": "57eb06de-3715-4f51-9056-dc822b064cbb",
      "name": "RPG Community",
      "adType": "ugc",
      "externalUrl": "https://discord.gg/Gvxet7xm3n",
      "screen2x3Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/7e8c7b75-3c21-4a6d-a238-b962bfb0fe53/621935c53cdab.jpg?updateTimestamp=1645819336.jpg",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen16x9/7e8c7b75-3c21-4a6d-a238-b962bfb0fe53/621935d22e7da.jpg?updateTimestamp=1645819349.jpg",
      "screen64x10Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen64x10/7e8c7b75-3c21-4a6d-a238-b962bfb0fe53/621935a46d239.jpg?updateTimestamp=1645819302.jpg",
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/maniapub/screen2x3/7e8c7b75-3c21-4a6d-a238-b962bfb0fe53/621935c53cdab.jpg?updateTimestamp=1645819336.jpg",
      "displayFormat": "screen2x3",
      "ratio": 0.667,
      "displayRatio": 0.667,
      "endTimestamp": 1659266913,
      "relativeEnd": 393981
    }
  ],
  "itemCount": 9
}
```
