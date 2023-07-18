---
name: Get competition match participants

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matches/{compMatchId}/participants?length={length}&offset={offset}

audience: NadeoClubServices

parameters:
  path:
    - name: compMatchId
      type: string
      description: A valid competition match ID
      required: true
  query:
    - name: length
      type: integer
      description: The number of participants to retrieve
      required: false
      default: 10
      max: 255
    - name: offset
      type: integer
      description: The number of participants to skip
      required: false
      default: 0
---

Gets players for a given competition match ID.

---

**Remarks**:
- This endpoint only supports competition match IDs, which are different from regular match IDs (as found in [the match endpoints](/meet/matches)). They are numerical and have to be retrieved from a competition's rounds (see [here](/meet/competition-matches/matches-for-round)).

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/matches/6899/participants
```

**Example response**:
```json
[
    {
        "participant": "e8b72453-7716-441e-9e72-14817d2e563a",
        "matchId": 6899,
        "rank": 1,
        "score": 62,
        "teamId": null
    },
    {
        "participant": "8f08302a-f670-463b-9f71-fbfacffb8bd1",
        "matchId": 6899,
        "rank": 2,
        "score": 61,
        "teamId": null
    },
    {
        "participant": "b09527f2-b61d-4d9a-8cdc-73484590f81f",
        "matchId": 6899,
        "rank": 3,
        "score": 60,
        "teamId": null
    },
    {
        "participant": "af30b7a1-fc37-485f-94bf-f00e39805d8c",
        "matchId": 6899,
        "rank": 4,
        "score": 59,
        "teamId": null
    },
    {
        "participant": "9da54743-020c-4e87-82b9-1dad80f8162d",
        "matchId": 6899,
        "rank": 5,
        "score": 58,
        "teamId": null
    },
    {
        "participant": "05477e79-25fd-48c2-84c7-e1621aa46517",
        "matchId": 6899,
        "rank": 6,
        "score": 57,
        "teamId": null
    },
    {
        "participant": "961d1145-8c7b-48c3-9191-0d1d91e44a4a",
        "matchId": 6899,
        "rank": 7,
        "score": 56,
        "teamId": null
    },
    {
        "participant": "d0a811b4-5611-4948-8865-03c9d252bcf4",
        "matchId": 6899,
        "rank": 8,
        "score": 55,
        "teamId": null
    },
    {
        "participant": "1336b019-0d7d-43f7-b227-ff336f8b7140",
        "matchId": 6899,
        "rank": 9,
        "score": 54,
        "teamId": null
    },
    {
        "participant": "4d85c941-0242-4f9f-a6d4-ee7772d95e82",
        "matchId": 6899,
        "rank": 10,
        "score": 53,
        "teamId": null
    }
]
```

If a `compMatchId` is invalid, the response will contain a `404` response code.
