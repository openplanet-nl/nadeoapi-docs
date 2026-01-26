---
name: Get map leaderboards

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/map/{mapUid}/top?length={length}&onlyWorld={onlyWorld}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: groupUid
      type: string
      description: The ID of the group/season
      required: true
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
  query:
    - name: length
      type: integer
      description: The number of records to retrieve
      default: 5
      max: 100
    - name: onlyWorld
      type: boolean
      description: Whether to only retrieve records from the world leaderboard
    - name: offset
      type: integer
      description: The number of records to skip
      default: 0
---

Gets records from a map's leaderboard.

---

**Remarks**:

- The `groupUid` `"Personal_Best"` can be used to get the global leaderboard.
- `onlyWorld=true` is required to retrieve more than the first five records. Without it, `length` and `offset` will have no effect.
- If using a token authenticated through a Ubisoft account, `onlyWorld` is `false` by default.
- If using a token authenticated through a dedicated server account, since there cannot be zones associated with one, passing `onlyWorld=false` (or omitting it) will only return the first five world records.
- Nadeo has recommended that we always pass `onlyWorld=true`, however it's not strictly required.
- This endpoint only allows you to read a leaderboard's first 10,000 records. The rest of the leaderboard is not available at this level of detail.
- If a `length` higher than `100` is requested, the API will successfully return only the first 100 records.
- As of December 11th 2024, this endpoint's response also contains a `timestamp` for each leaderboard entry, which corresponds to the time the relevant record was set.
- If the map author has set a secret threshold score for their map, this endpoint will not return any actual `score` values for some entries. Instead, those leaderboard entries will contain `-1` in the `score` field.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/Personal_Best/map/ZJw6_4CItmVlRMPgELl4Q37Utw2/top?onlyWorld=true&length=10&offset=50
```

**Example response**:

```json
{
  "groupUid": "Personal_Best",
  "mapUid": "ZJw6_4CItmVlRMPgELl4Q37Utw2",
  "tops": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "top": [
        {
          "accountId": "6ec3711d-a722-4bc3-b952-96e80410b7ff",
          "zoneId": "301fbe37-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Corrèze",
          "position": 51,
          "score": 53145,
          "timestamp": 1658783398
        },
        ...
        {
          "accountId": "aa4e375f-d23e-4915-8d53-8b3307e06764",
          "zoneId": "301ffccb-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Nürnberg",
          "position": 60,
          "score": 53158,
          "timestamp": 1658772554
        }
      ]
    }
  ]
}
```

If the `groupUid` is invalid, the response will be an empty object:

```json
{}
```

If the map does not exist, the response will show an empty leaderboard:

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
