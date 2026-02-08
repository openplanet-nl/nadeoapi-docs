---
name: Get player trophy rankings (multiple)

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/leaderboard/trophy/player

audience: NadeoLiveServices

---

The request body is an array of players, identified by their account IDs:
```json
{
  "listPlayer": [
    {
      "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc"
    },
    {
      "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70"
    }
  ]
}
```

---

Gets the specified players' trophy leaderboard positions for each of their zones.

---

**Example request**:
```plain
POST https://live-services.trackmania.nadeo.live/api/token/leaderboard/trophy/player
```
```json
{
  "listPlayer": [
    {
      "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc"
    },
    {
      "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70"
    }
  ]
}
```

**Example response**:
```json
{
  "rankings": [
    {
      "countPoint": 1648346,
      "zones": [
        {
          "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "World",
          "ranking": {
            "position": 20000,
            "length": 0
          }
        },
        {
          "zoneId": "301e2106-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Europe",
          "ranking": {
            "position": 9784,
            "length": 0
          }
        },
        {
          "zoneId": "302094fd-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Netherlands",
          "ranking": {
            "position": 500,
            "length": 0
          }
        },
        {
          "zoneId": "30209bf3-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Noord-Holland",
          "ranking": {
            "position": 62,
            "length": 0
          }
        }
      ],
      "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
      "echelon": 5
    },
    {
      "countPoint": 2080947,
      "zones": [
        {
          "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "World",
          "ranking": {
            "position": 8980,
            "length": 0
          }
        },
        {
          "zoneId": "301e2106-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Europe",
          "ranking": {
            "position": 7405,
            "length": 0
          }
        },
        {
          "zoneId": "301ff622-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Germany",
          "ranking": {
            "position": 1818,
            "length": 0
          }
        },
        {
          "zoneId": "301ff6b7-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Baden-Württemberg",
          "ranking": {
            "position": 294,
            "length": 0
          }
        },
        {
          "zoneId": "301ff90f-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Stuttgart",
          "ranking": {
            "position": 163,
            "length": 0
          }
        }
      ],
      "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
      "echelon": 5
    }
  ],
  "length": 0
}
```

If an `accountId` is invalid, it will be ignored in the response.
