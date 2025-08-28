---
name: Get player matchmaking progressions

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matchmaking/{matchmakingType}/progression/players?players[]={accountID}

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

Gets matchmaking progressions (for the specified type) for the requested players.

---

**Remarks**:

- The `matchmakingType` parameter is typically `5` (Ranked 2v2). For a dynamic way of retrieving those IDs see [the matchmaking summary endpoint](/meet/matchmaking/summary). This parameter may also be a string, i.e. `"ranked-2v2"`.
- To get data for more than one account at a time, you can send an array of values instead of a single value - see the second example below.
- This endpoint has no intrinsic limit on the number of account IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 150 account IDs, depending on how you encode the URI).
- This endpoint is very similar to the [ranking](/meet/matchmaking/player-ranking) endpoint, but slightly less useful.

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/2/leaderboard/players?players[]=01fe5b11-5ada-48a0-9da7-367e153ac3ad
```

**Example response**:

```json
{
  "progressions": [
    {
      "player": "01fe5b11-5ada-48a0-9da7-367e153ac3ad",
      "division": "bd7282b7-04c4-4c25-b672-1f538ef7b5f9",
      "progression": 5141
    }
  ]
}
```

To retrieve data for more than one account at once, send the `accountID` values as follows:

```plain
GET https://matchmaking.trackmania.nadeo.club/api/matchmaking/2/progression/players?players[]=01fe5b11-5ada-48a0-9da7-367e153ac3ad&players[]=18f49288-fbbf-488c-bb28-083df93f0447
```

If the requested `matchmakingType` does not exist, the response will contain an error.
