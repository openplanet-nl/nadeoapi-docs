---
name: Get map leaderboards for club members

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/map/{mapUid}/club/{clubId}/top?length={length}&offset={offset}

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
    - name: clubId
      type: string
      description: The ID of the club
      required: true
  query:
    - name: length
      type: integer
      description: The number of records to retrieve
      default: 5
      max: 100
    - name: offset
      type: integer
      description: The number of records to skip
      default: 0
---

Gets records from a map's leaderboard for members of a club.

---

**Remarks**:

- The `groupUid` `"Personal_Best"` can be used to get the global leaderboard.
- This endpoint only allows you to read a leaderboard's first 10,000 records. The rest of the leaderboard is not available at this level of detail.
- If a `length` higher than `100` is requested, the API will successfully return only the first 100 records.
- If the map author has set a secret threshold score for their map, this endpoint will not return any actual `score` values for some entries. Instead, those leaderboard entries will contain `-1` in the `score` field.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/Personal_Best/map/k4TKkf1JSlWTEEZdCc9UCNTokk6/club/9/top?offset=0&length=100
```

**Example response**:

```json
{
  "groupUid": "Personal_Best",
  "mapUid": "k4TKkf1JSlWTEEZdCc9UCNTokk6",
  "clubId": 9,
  "length": 310,
  "top": [
    {
      "accountId": "febdee2f-744e-4a56-9126-ca3b1b034ea0",
      "zoneId": "3022ed9f-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Texas",
      "position": 1,
      "score": 26464
    },
    ...
    {
      "accountId": "23bc4ff4-01e9-42ab-b685-8d06ca139855",
      "zoneId": "30226ac4-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Catalunya",
      "position": 100,
      "score": 27795
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
  "mapUid": "k4TKkf1JSlWTEEZdCc9UCNTokk6_fake",
  "clubId": 9,
  "length": 0,
  "top": []
}
```
