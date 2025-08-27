---
name: Get player matchmaking ranks

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matchmaking/{matchmakingType}/leaderboard/players?players[]={accountID}

audience: NadeoLiveServices

parameters:
  path:
    - name: matchmakingType
      type: integer
      description: The ID of the matchmaking type
      required: true
  query:
    - name: accountID
      type: string
      description: A valid account ID
      required: true
---

Gets matchmaking ranks (for the specified type) for the requested players.

---

**Remarks**:

- The `matchmakingType` parameter is typically `5` (Ranked 2v2). This parameter may also be a string, i.e. `"ranked-2v2"`. See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.
- The `cardinal` field in the response is the total number of players in the ranking.
- To get data for more than one account at a time, you can send an array of values instead of a single value - see the second example below.
- This endpoint has no intrinsic limit on the number of account IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 150 account IDs, depending on how you encode the URI).

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/2/leaderboard/players?players[]=f7fab1a3-3bcc-4ffa-8ce3-45cea7ab89c3
```

**Example response**:

```json
{
  "matchmakingId": 2,
  "cardinal": 1158029,
  "results": [
    {
      "player": "f7fab1a3-3bcc-4ffa-8ce3-45cea7ab89c3",
      "rank": 924,
      "score": 2431
    }
  ]
}
```

To retrieve data for more than one account at once, send the `accountID` values as follows:

```plain
GET https://matchmaking.trackmania.nadeo.club/api/matchmaking/2/leaderboard/players?players[]=f7fab1a3-3bcc-4ffa-8ce3-45cea7ab89c3&players[]=f8f7c280-8419-472e-9329-6436fe3d04c3
```

If the requested `matchmakingType` does not exist, the response will contain an error.
