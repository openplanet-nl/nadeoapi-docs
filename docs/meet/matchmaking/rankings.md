---
name: Get matchmaking rankings

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matchmaking/{matchmakingType}/leaderboard?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: matchmakingType
      type: integer
      description: The ID of the matchmaking type
      required: true
  query:
    - name: length
      type: integer
      description: The number of ranks to retrieve
      default: 10
      max: 100
    - name: offset
      type: integer
      description: The number of ranks to skip
      default: 0
---

Gets global matchmaking rankings for the specified type.

---

**Remarks**:

- See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.
- This leaderboard doesn't have the same restrictions as the map leaderboard endpoints - you can request any position and will get an accurate rank for each player.
- The `cardinal` field in the response is the total number of players in the ranking.

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/matchmaking/2/leaderboard?offset=10&length=5
```

**Example response**:

```json
{
  "matchmakingId": 2,
  "cardinal": 1157847,
  "results": [
    {
      "player": "c0d0d93b-8396-40dd-a928-377c436e8a70",
      "rank": 11,
      "score": 4339
    },
    {
      "player": "bb4af693-5190-44c5-8448-d4ec36d95400",
      "rank": 12,
      "score": 4333
    },
    {
      "player": "ac935c32-4986-4af7-ac4d-ab4314101bc1",
      "rank": 13,
      "score": 4312
    },
    {
      "player": "a8bec23d-e5ba-47d3-8bb7-145b23d9650d",
      "rank": 14,
      "score": 4281
    },
    {
      "player": "3ea2b566-7097-4fbf-a91f-68de95adc232",
      "rank": 15,
      "score": 4271
    }
  ]
}
```

If the requested `matchmakingType` does not exist, the response will contain an error.
