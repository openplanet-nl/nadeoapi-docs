---
name: Get TOTDs

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/campaign/month?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of months to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of months to skip (looking backwards from the current month)
      required: true
---

Gets Tracks of the Day by month.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/campaign/month?offset=7&length=1
```

**Example response**:
```json
{
  "monthList": [
    {
      "year": 2021,
      "month": 12,
      "lastDay": 31,
      "days": [
        {
          "campaignId": 18255,
          "mapUid": "CFI34MJLLF0M88pCmn1WHTSd6K9",
          "day": 2,
          "monthDay": 1,
          "seasonUid": "ee58b4e5-a7f0-41de-a8dd-e4744b009ab2",
          "leaderboardGroup": null,
          "startTimestamp": 1638381600,
          "endTimestamp": 1638468000,
          "relativeStart": -20469159,
          "relativeEnd": -20382759
        },
        ...
        {
          "campaignId": 18865,
          "mapUid": "mijbrgeyRo6XyjlulEE6QhZSQNm",
          "day": 4,
          "monthDay": 31,
          "seasonUid": "90769a06-30f6-4980-83eb-b046e15c111b",
          "leaderboardGroup": null,
          "startTimestamp": 1640973600,
          "endTimestamp": 1641060000,
          "relativeStart": -17877159,
          "relativeEnd": -17790759
        }
      ],
      "media": {
        "buttonBackgroundUrl": "",
        "buttonForegroundUrl": "",
        "decalUrl": "",
        "popUpBackgroundUrl": "",
        "popUpImageUrl": "",
        "liveButtonBackgroundUrl": "",
        "liveButtonForegroundUrl": ""
      }
    }
  ],
  "itemCount": 25,
  "nextRequestTimestamp": 1658854800,
  "relativeNextRequest": 4041
}
```

If the month was before  does not exist, the response will show an empty leaderboard:

```json
{
  "groupUid": "Personal_Best",
  "mapUid": "ZJw6_4CItmVlRMPgELl4Q37Utw2_fake",
  "tops": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "top": []
    }
  ]
}
```
