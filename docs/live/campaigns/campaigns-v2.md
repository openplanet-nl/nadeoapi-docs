---
name: Get seasonal campaigns (v2)

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/campaign/official?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of campaigns to retrieve
      default: 1
    - name: offset
      type: integer
      description: The number of campaigns to skip (looking backwards from the current campaign)
      default: 0
---

Gets official seasonal campaigns.

---

**Remarks**:

- This endpoint serves the same purpose as the [Get seasonal campaigns](/live/campaigns/campaigns) endpoint, but the response data model is slightly different.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/campaign/official?offset=0&length=1
```

**Example response**:

```json
{
  "itemCount": 18,
  "campaignList": [
    {
      "id": 77963,
      "seasonUid": "402f721f-65ca-4975-9eb0-afa753561a8a",
      "name": "Fall 2024",
      "useCase": 0,
      "clubId": 0,
      "startTimestamp": 1727794800,
      "endTimestamp": 1735747200,
      "rankingSentTimestamp": null,
      "year": -1,
      "week": -1,
      "day": -1,
      "monthYear": -1,
      "month": -1,
      "monthDay": -1,
      "playlist": [
        {
          "id": 926443,
          "position": 0,
          "mapUid": "rw7jr8WlTrYor0vN0A0PiKzgg78"
        },
        ...
        {
          "id": 926467,
          "position": 24,
          "mapUid": "End5ikYJa8pgN8RI347E6l4i7lg"
        }
      ],
      "editionTimestamp": 1727082440
    }
  ],
  "nextRequestTimestamp": 1735747200,
  "relativeNextRequest": 704811
}
```

If the campaign does not exist, the response will show an empty list:

```json
{
  "itemCount": 18,
  "campaignList": [],
  "nextRequestTimestamp": 1735747200,
  "relativeNextRequest": 704825
}
```
