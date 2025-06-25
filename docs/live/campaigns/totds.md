---
name: Get TOTDs/Royal maps

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/campaign/month?length={length}&offset={offset}&royal={royal}

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
    - name: royal
      type: boolean
      description: Whether to return maps for the Royal mode instead of TOTDs
      require: false
---

Gets Tracks of the Day (or Royal maps) by month.

---

**Remarks**:

- In some cases the `nextRequestTimestamp` and `relativeNextRequest` fields may be set to `-1` when the next TOTD has not been scheduled yet.

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

If the month does not exist, the response will show an empty list:

```json
{
  "monthList": [

  ],
  "itemCount": 26,
  "nextRequestTimestamp": 1661274000,
  "relativeNextRequest": 77366
}
```
