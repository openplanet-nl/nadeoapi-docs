---
name: Get competition rounds

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/competitions/{competitionId}/rounds

audience: NadeoClubServices

parameters:
  path:
    - name: competitionId
      type: string
      description: A valid competition ID
      required: true
---

Gets rounds details for a competition ID.

---

**Remarks**:
- There are two different competition IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-COMP-`.

---

**Example request**:
```plain
GET https://competition.trackmania.nadeo.club/api/competitions/3633/rounds
```

**Example response**:
```json
[
    {
        "id": 9078,
        "position": 0,
        "name": "Quarter Finals",
        "startDate": 1663425300,
        "endDate": 1663427100,
        "lockDate": null,
        "status": null,
        "isLocked": false,
        "autoNeedsMatches": true,
        "matchScoreDirection": "DESC",
        "leaderboardComputeType": "BRACKET",
        "teamLeaderboardComputeType": null,
        "deletedOn": null,
        "nbMatches": 0,
        "qualifierChallengeId": 1805,
        "trainingChallengeId": null
    },
    {
        "id": 9079,
        "position": 1,
        "name": "SemiFinals",
        "startDate": 1663427400,
        "endDate": 1663429200,
        "lockDate": null,
        "status": null,
        "isLocked": false,
        "autoNeedsMatches": true,
        "matchScoreDirection": "DESC",
        "leaderboardComputeType": "BRACKET",
        "teamLeaderboardComputeType": null,
        "deletedOn": null,
        "nbMatches": 0,
        "qualifierChallengeId": null,
        "trainingChallengeId": null
    },
    {
        "id": 9080,
        "position": 2,
        "name": "FINAL",
        "startDate": 1663429500,
        "endDate": 1663431300,
        "lockDate": null,
        "status": null,
        "isLocked": false,
        "autoNeedsMatches": true,
        "matchScoreDirection": "DESC",
        "leaderboardComputeType": "BRACKET",
        "teamLeaderboardComputeType": null,
        "deletedOn": null,
        "nbMatches": 0,
        "qualifierChallengeId": null,
        "trainingChallengeId": null
    }
]
```

If a `competitionId` is invalid, the response will contain a `404` response code.
