---
name: Get competition match results

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matches/{compMatchId}/results?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: compMatchId
      type: string
      description: A valid competition match ID
      required: true
  query:
    - name: length
      type: integer
      description: The number of results to retrieve
      required: false
      default: 10
      max: 255
    - name: offset
      type: integer
      description: The number of results to skip
      required: false
      default: 0
---

Gets results for a given competition match ID.

---

**Remarks**:

- This endpoint only supports competition match IDs, which are different from regular match IDs (as found in [the match endpoints](/meet/matches)). They are numerical and have to be retrieved from a competition's rounds (see [here](/meet/competition-matches/matches-for-round)).
- If the match does not use teams, the `teams` field will be an empty array, and the `teamPosition` field for each player will be `null`.
- For proper team mappings and team names, refer to [the competition teams endpoint](/meet/competitions/teams).

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/matches/54430/results
```

**Example response**:

```json
{
  "matchLiveId": "LID-MTCH-wnf4y3emu43rxnk",
  "roundPosition": 0,
  "results": [
    {
      "participant": "7c02bdeb-92dc-4435-b07b-647e0d5699a9",
      "rank": 1,
      "score": 0,
      "zone": "World",
      "team": "0c908d55-efa5-401a-b5ba-5afd1eac7686"
    },
    {
      "participant": "0120bf0b-b567-4224-bd6e-a0b4da089905",
      "rank": 2,
      "score": 0,
      "zone": "World",
      "team": "537a040c-dd37-4294-badf-ec7a71b0a4bf"
    },
    {
      "participant": "a61fffac-b203-4e37-8d32-0ae1b772578f",
      "rank": 3,
      "score": 0,
      "zone": "World",
      "team": "0c908d55-efa5-401a-b5ba-5afd1eac7686"
    },
    {
      "participant": "3905ba40-a668-4e6a-8a95-9591eb20e673",
      "rank": 4,
      "score": 0,
      "zone": "World",
      "team": "537a040c-dd37-4294-badf-ec7a71b0a4bf"
    }
  ],
  "scoreUnit": "point",
  "teams": [
    {
      "position": 0,
      "team": "0c908d55-efa5-401a-b5ba-5afd1eac7686",
      "rank": 1,
      "score": 2
    },
    {
      "position": 1,
      "team": "537a040c-dd37-4294-badf-ec7a71b0a4bf",
      "rank": 2,
      "score": 0
    }
  ]
}
```

If a `compMatchId` is invalid (or the match information is not available), the response will contain a `404` response code.
