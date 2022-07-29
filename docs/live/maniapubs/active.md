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
      "relativeEnd": 73052
    },
    ...
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
      "relativeEnd": 187310
    }
  ],
  "itemCount": 9
}
```
