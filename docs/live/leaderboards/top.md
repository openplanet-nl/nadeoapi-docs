---
name: Get map leaderboards

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupId}/map/{mapUid}/top?length={length}&onlyWorld={onlyWorld}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: groupId
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
      description: The number of records to retrieve (5 by default, 100 is the maximum)
      required: false
    - name: onlyWorld
      type: boolean
      description: Whether to only retrieve records from the world leaderboard
      required: false
    - name: offset
      type: integer
      description: The number of records to skip
      required: false
---

Gets surrounding records for a score on a map's leaderboard.

---

**Remarks**:
- The `groupId` `"Personal_Best"` can be used to get the global leaderboard.
- `onlyWorld=true` is required to retrieve more than the first five records. Without it, `length` and `offset` will have no effect.
- This endpoint only allows you to read a leaderboard's first 10,000 records. The rest of the leaderboard is not available at this level of detail.
- If a `length` higher than `100` is requested, the API will successfully return only the first 100 records.

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
          "accountId": "70febe5b-c279-4e1f-936f-0b02a0c6e757",
          "zoneId": "3020a27d-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Norway",
          "position": 51,
          "score": 53156
        },
        ...
        {
          "accountId": "21029447-5895-4e1e-829c-14dedb4af788",
          "zoneId": "301f4e76-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Olomoucký kraj",
          "position": 60,
          "score": 53181
        }
      ]
    }
  ]
}
```

If the `groupId` is invalid, the response will be an empty object:

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
