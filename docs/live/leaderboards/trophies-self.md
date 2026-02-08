---
name: Get player trophy rankings (self)

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/trophy

audience: NadeoLiveServices

---

Gets the currently authenticated player's trophy leaderboard positions for each of their zones.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/trophy
```

**Example response**:
```json
{
  "countPoint": 1361289,
  "zones": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "ranking": {
        "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "World",
        "ranking": {
          "position": 7504,
          "length": 0
        }
      }
    },
    {
      "zoneId": "301e2274-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "North America",
      "ranking": {
        "zoneId": "301e2274-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "North America",
        "ranking": {
          "position": 1490,
          "length": 0
        }
      }
    },
    {
      "zoneId": "3022ab53-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "United States",
      "ranking": {
        "zoneId": "3022ab53-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "United States",
        "ranking": {
          "position": 1183,
          "length": 0
        }
      }
    },
    {
      "zoneId": "3022b270-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Colorado",
      "ranking": {
        "zoneId": "3022b270-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "Colorado",
        "ranking": {
          "position": 51,
          "length": 0
        }
      }
    }
  ],
  "accountId": "594be80b-62f3-4705-932b-e743e97882cf",
  "echelon": 5
}
```
