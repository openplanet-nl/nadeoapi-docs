---
name: Get weekly grands

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/campaign/weekly-grands?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of weekly grands campaigns to retrieve
      default: 1
    - name: offset
      type: integer
      description: The number of weekly grands campaigns to skip (looking backwards from the current campaign)
      default: 0
---

Gets weekly grands campaigns.

---

**Remarks**:

- The weekly grands maps are structured in weekly campaigns (just like weekly shorts) even though each campaign only contains one map.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/campaign/weekly-grands?offset=0&length=1
```

**Example response**:

```json
{
  "itemCount": 1,
  "campaignList": [
    {
      "id": 122935,
      "seasonUid": "bff0de5a-d5ad-453d-b3ce-2520ca9ed626",
      "name": "Week Grand 59",
      "useCase": 6,
      "clubId": 0,
      "startTimestamp": 1769360400,
      "endTimestamp": 1769965200,
      "rankingSentTimestamp": null,
      "year": 2026,
      "week": 5,
      "day": -1,
      "monthYear": -1,
      "month": -1,
      "monthDay": -1,
      "playlist": [
        {
          "id": 1464354,
          "position": 0,
          "mapUid": "UGW4HQDPprsMBbLs0EjSW_9qiUd"
        }
      ],
      "editionTimestamp": 1769163654,
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/af8f891c-f1d1-4ab9-9b93-fcfabb0c6f7e/original.jpg",
      "video": false
    }
  ],
  "nextRequestTimestamp": 1769965200,
  "relativeNextRequest": 17115
}
```

If the campaign does not exist, the response will show an empty list:

```json
{
  "itemCount": 1,
  "campaignList": [],
  "nextRequestTimestamp": 1769965200,
  "relativeNextRequest": 17097
}
```
