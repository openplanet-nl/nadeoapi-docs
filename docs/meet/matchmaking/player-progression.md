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

- See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.
- To get data for more than one account at a time, you can send an array of values instead of a single value - see the second example below.
- This endpoint has no intrinsic limit on the number of account IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 150 account IDs, depending on how you encode the URI).
- This endpoint is very similar to the [ranking](/meet/matchmaking/player-ranking) endpoint, but returns slightly different data (e.g. division ID instead of rank).

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/5/progression/players?players[]=94232bb9-9774-41f8-9016-3e653581ce9a
```

**Example response**:

```json
{
  "progressions": [
    {
      "player": "94232bb9-9774-41f8-9016-3e653581ce9a",
      "division": "bd7282b7-04c4-4c25-b672-1f538ef7b5f9",
      "progression": 5257
    }
  ]
}
```

To retrieve data for more than one account at once, send the `accountID` values as follows:

```plain
GET https://matchmaking.trackmania.nadeo.club/api/matchmaking/5/progression/players?players[]=01fe5b11-5ada-48a0-9da7-367e153ac3ad&players[]=18f49288-fbbf-488c-bb28-083df93f0447
```

If the requested `matchmakingType` does not exist, the response will contain an error.
