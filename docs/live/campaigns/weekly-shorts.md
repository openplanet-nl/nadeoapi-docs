---
name: Get weekly shorts

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/campaign/weekly-shorts?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of weekly shorts campaigns to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of weekly shorts campaigns to skip (looking backwards from the current campaign)
      required: true
---

Gets weekly shorts campaigns.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/campaign/weekly-shorts?offset=0&length=1
```

**Example response**:

```json
{
  "itemCount": 2,
  "campaignList": [
    {
      "id": 83986,
      "seasonUid": "d63cac8c-a3e3-4320-b58b-4ae85bfc4987",
      "name": "Week 2",
      "useCase": 5,
      "clubId": 0,
      "startTimestamp": 1734886800,
      "endTimestamp": 1735491600,
      "rankingSentTimestamp": null,
      "year": 2024,
      "week": 2,
      "day": -1,
      "monthYear": -1,
      "month": -1,
      "monthDay": -1,
      "playlist": [
        {
          "id": 999650,
          "position": 0,
          "mapUid": "v97FfwztlgncAiVxDSyOI8FMmCh"
        },
        {
          "id": 999651,
          "position": 1,
          "mapUid": "PUZW_cmHUVuX6S7Sg5v5AUxBxP1"
        },
        {
          "id": 999652,
          "position": 2,
          "mapUid": "ye9RBZObEfQaVvPRwvL32qCFEZm"
        },
        {
          "id": 999653,
          "position": 3,
          "mapUid": "3EoC4KP470YW30_9aLVMsO5TsF7"
        },
        {
          "id": 999654,
          "position": 4,
          "mapUid": "8qvIspNnTHFWK7S1OlGsokE9Ibe"
        }
      ],
      "editionTimestamp": 1734346663
    }
  ],
  "nextRequestTimestamp": 1735491600,
  "relativeNextRequest": 449802
}
```

If the campaign does not exist, the response will show an empty list:

```json
{
  "itemCount": 2,
  "campaignList": [],
  "nextRequestTimestamp": 1735491600,
  "relativeNextRequest": 449777
}
```
