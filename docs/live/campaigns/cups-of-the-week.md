---
name: Get cups of the week

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/campaign/cup-of-the-week?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of COTW campaigns to retrieve
      default: 1
    - name: offset
      type: integer
      description: The number of COTW campaigns to skip (looking backwards from the current campaign)
      default: 0
---

Gets cup of the week campaigns.

---

**Remarks**:

- The COTW maps are structured in weekly campaigns (just like weekly shorts) even though each campaign only contains one map.
- The `name` field is the date the map first appears in the COTW server room.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/campaign/cup-of-the-week?offset=0&length=1
```

**Example response**:

```json
{
  "itemCount": 10,
  "campaignList": [
    {
      "id": 125924,
      "seasonUid": "NLS-KpwHVrjiuAKM6vFDJU0So5RzRLk4kZwcjrZ",
      "name": "Saturday, February 14, 2026",
      "useCase": 7,
      "clubId": 0,
      "startTimestamp": 1771086600,
      "endTimestamp": 1771691400,
      "rankingSentTimestamp": null,
      "year": 2026,
      "week": 8,
      "day": -1,
      "monthYear": -1,
      "month": -1,
      "monthDay": -1,
      "playlist": [
        {
          "id": 1504247,
          "position": 0,
          "mapUid": "BtYymvmqtzeD6rr8YU5PIwyH6oa"
        }
      ],
      "editionTimestamp": 1770741286,
      "mediaUrl": "",
      "video": false
    }
  ],
  "nextRequestTimestamp": 1771691400,
  "relativeNextRequest": 588715
}
```
