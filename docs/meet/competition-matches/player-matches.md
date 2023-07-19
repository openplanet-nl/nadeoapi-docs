---
name: Get competition matches for player

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/competitions/{competitionId}/participants/{accountId}/matches

audience: NadeoClubServices

parameters:
  path:
    - name: competitionId
      type: string
      description: A valid competition ID
      required: true
    - name: accountId
      type: string
      description: A valid account ID
      required: true
---

Gets matches for a player in the context of a competition.

---

**Remarks**:
- There are two different competition IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-COMP-`.

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/competitions/4621/participants/e07e9ea9-daa5-4496-9908-9680e35da02b/matches
```

**Example response**:
```json
[
    {
        "matchLiveId": "LID-MTCH-dz3d2qsgeqsy55q",
        "roundPosition": 0,
        "results": [
            {
                "participant": "0da0a251-20e8-4219-86eb-7d9c52847779",
                "rank": null,
                "score": null,
                "zone": "World",
                "team": "a6543d8d-b277-4029-92e5-c08ba1d6166a"
            },
            {
                "participant": "e07e9ea9-daa5-4496-9908-9680e35da02b",
                "rank": null,
                "score": null,
                "zone": "World",
                "team": "a6543d8d-b277-4029-92e5-c08ba1d6166a"
            }
        ],
        "scoreUnit": "point",
        "teams": []
    },
    ...
    {
        "matchLiveId": "LID-MTCH-h3t0o1ivvjgbngw",
        "roundPosition": 5,
        "results": [
            {
                "participant": "0da0a251-20e8-4219-86eb-7d9c52847779",
                "rank": 1,
                "score": 0,
                "zone": "World",
                "team": "a6543d8d-b277-4029-92e5-c08ba1d6166a"
            },
            {
                "participant": "e07e9ea9-daa5-4496-9908-9680e35da02b",
                "rank": 2,
                "score": 0,
                "zone": "World",
                "team": "a6543d8d-b277-4029-92e5-c08ba1d6166a"
            },
            {
                "participant": "9f0dae68-3ae7-4396-bb97-44822c302b7c",
                "rank": 3,
                "score": 0,
                "zone": "World",
                "team": "ce1f8c64-fb80-4411-bef1-ce6cc2ef6e52"
            },
            {
                "participant": "54c7bd69-67f6-4544-902a-41c6ed4e0b3a",
                "rank": 4,
                "score": 0,
                "zone": "World",
                "team": "ce1f8c64-fb80-4411-bef1-ce6cc2ef6e52"
            }
        ],
        "scoreUnit": "point",
        "teams": []
    }
]
```

If a `competitionId` is invalid, the response will contain a `404` response code.

If an `accountId` is invalid or the player did not participate in the competition, the response will contain an empty array.
