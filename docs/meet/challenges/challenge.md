---
name: Get challenge

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/challenges/{challengeId}

audience: NadeoClubServices

parameters:
  path:
    - name: challengeId
      type: string
      description: A valid challenge ID
      required: true
---

Gets challenge details for a challenge ID.

---

**Remarks**:
- Note that challenges are different from competitions - challenges are separate leaderboard structures that can be part of a competition (for example in the form of a qualifying session).
- Typically challenges are used for qualifiers in larger competitions - the relevant `challengeId` can be retrieved using the [competition rounds endpoint](/meet/competitions/rounds).

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/challenges/409
```

**Example response**:
```json
{
    "id": 409,
    "uid": "8c4a18cc-dca7-4fe2-8dc3-55e40120ad26",
    "name": "Cup of the Day 2021-08-14 #2 - Challenge",
    "scoreDirection": "ASC",
    "startDate": 1628989260,
    "endDate": 1628990160,
    "status": "SERVER_DELETED",
    "resultsVisibility": "PUBLIC",
    "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
    "admins": [
        "0060a0c1-2e62-41e7-9db7-c86236af3ac4",
        "54e4dda4-522d-496f-8a8b-fe0d0b5a2a8f",
        "2116b392-d808-4264-923f-2bfcfa60a570",
        "6ce163d5-f240-4741-870b-f2adad843865"
    ],
    "nbServers": 0,
    "autoScale": true,
    "nbMaps": 1,
    "leaderboardId": 2003,
    "deletedOn": null,
    "leaderboardType": "SUM",
    "completeTimeout": 5
}
```

If a `challengeId` is invalid, the response will contain a `404` response code.
