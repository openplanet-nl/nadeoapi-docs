---
name: Get match results

url: https://club.trackmania.nadeo.club
method: GET
route: /api/matches/{matchId}/results

audience: NadeoClubServices

parameters:
  path:
    - name: matchId
      type: string
      description: A valid match ID
      required: true
---

Gets results for a given match ID.

---

**Remarks**:
- Match information is only stored on Nadeo's servers for about a month - afterwards, requesting it will only result in a `404` response code.
Some official competition matches are exempt from this.
- There are two different match IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-MTCH-`.
There have been instances where the different ID types resulted in different response structures, but that might have just been a temporary API issue.
- If the match does not use teams, the `teams` field will be an empty array, and the `teamPosition` field for each player will be `null`.
- For proper team mappings and team names, refer to [the competition teams endpoint](/competition/competitions/teams).

---

**Example request**:
```plain
GET https://club.trackmania.nadeo.club/api/matches/3565268/results
```

**Example response**:
```json
{
    "teams": [
        {
            "position": 0,
            "score": 4,
            "rank": 1
        },
        {
            "position": 1,
            "score": 0,
            "rank": 2
        }
    ],
    "participants": {
        "48e8de52-2473-4a1d-b095-190a79af5085": {
            "participant": "48e8de52-2473-4a1d-b095-190a79af5085",
            "position": 0,
            "teamPosition": 0,
            "rank": 2,
            "score": 0,
            "mvp": false,
            "leaver": null,
            "eliminated": false
        },
        "aeba3fbc-9e2f-4dd5-b723-e155a2ac37ea": {
            "participant": "aeba3fbc-9e2f-4dd5-b723-e155a2ac37ea",
            "position": 1,
            "teamPosition": 0,
            "rank": 3,
            "score": 0,
            "mvp": false,
            "leaver": null,
            "eliminated": false
        },
        "49d43ec5-4b6d-4bde-8564-9acefa8e355c": {
            "participant": "49d43ec5-4b6d-4bde-8564-9acefa8e355c",
            "position": 2,
            "teamPosition": 1,
            "rank": 1,
            "score": 0,
            "mvp": false,
            "leaver": null,
            "eliminated": false
        },
        "d87c9c2e-03c4-44fc-9d5a-4a7078c37708": {
            "participant": "d87c9c2e-03c4-44fc-9d5a-4a7078c37708",
            "position": 3,
            "teamPosition": 1,
            "rank": 4,
            "score": 0,
            "mvp": false,
            "leaver": null,
            "eliminated": false
        }
    }
}
```

If a `matchId` is invalid (or the match information is not available anymore), the response will contain a `404` response code.
