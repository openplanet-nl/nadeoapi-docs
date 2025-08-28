---
name: Get player records

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/leaderboard/group/map

audience: NadeoLiveServices

parameters:
  body:
    - name: groupUid
      type: string
      description: The ID of the group/season for a specific map
      required: true
---

The request body is an array of maps, identified by their mapUids:

```json
{
  "maps": [
    {
      "mapUid": "{mapUid}",
      "groupUid": "{groupUid}"
    }
  ]
}
```

---

Gets the currently authenticated user's records on multiple maps.

---

**Remarks**:

- The `groupUid` `"Personal_Best"` can be used to get the global leaderboard.
- A maximum of 50 records may be requested. If more than 50 records are requested, only the first 50 will be returned.
- This is technically the same endpoint as [get record positions by their time](/live/leaderboards/position), but without the query parameters, it functions completely differently.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/map
```

```json
{
  "maps": [
    {
      "mapUid": "Kn63nCh9bkaRHcZZsrtf_KcLMH2",
      "groupUid": "Personal_Best"
    }
  ]
}
```

**Example response**:

```json
[
  {
    "groupUid": "Personal_Best",
    "mapUid": "Kn63nCh9bkaRHcZZsrtf_KcLMH2",
    "score": 19976,
    "zones": [
      {
        "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "World",
        "ranking": {
          "position": 7062,
          "length": 0
        }
      },
      {
        "zoneId": "301e2274-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "North America",
        "ranking": {
          "position": 1548,
          "length": 0
        }
      },
      {
        "zoneId": "3022ab53-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "United States",
        "ranking": {
          "position": 1208,
          "length": 0
        }
      },
      {
        "zoneId": "3022b270-7e13-11e8-8060-e284abfd2bc4",
        "zoneName": "Colorado",
        "ranking": {
          "position": 38,
          "length": 0
        }
      }
    ]
  }
]
```

If a `mapUid` is duplicated, the response will show duplicate results.

If a `groupUid` or `mapUid` is invalid, the response will omit that requested map.
