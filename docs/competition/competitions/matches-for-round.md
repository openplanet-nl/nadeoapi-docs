---
name: Get matches for a competition round

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/rounds/{roundId}/matches

audience: NadeoClubServices

parameters:
  path:
    - name: roundId
      type: string
      description: A valid round ID
      required: true
---

Gets matches for a given round in a competition.

---

**Example request**:
```plain
GET https://competition.trackmania.nadeo.club/api/rounds/9078/matches
```

**Example response**:
```json
{
    "matches": [
        {
            "id": 38449,
            "name": "Baltic Weekly #2 - Quarter Finals - 1",
            "clubMatchLiveId": "LID-MTCH-x1accvkawhlput1",
            "position": 0,
            "isCompleted": true,
            "tags": [],
            "deletedOn": null
        },
        {
            "id": 38450,
            "name": "Baltic Weekly #2 - Quarter Finals - 2",
            "clubMatchLiveId": "LID-MTCH-tmiims2yypi0wvl",
            "position": 1,
            "isCompleted": true,
            "tags": [],
            "deletedOn": null
        },
        {
            "id": 38451,
            "name": "Baltic Weekly #2 - Quarter Finals - 3",
            "clubMatchLiveId": "LID-MTCH-s0rvc5jgmykdzxu",
            "position": 2,
            "isCompleted": true,
            "tags": [],
            "deletedOn": null
        },
        {
            "id": 38452,
            "name": "Baltic Weekly #2 - Quarter Finals - 4",
            "clubMatchLiveId": "LID-MTCH-jzk5mckt5e5udej",
            "position": 3,
            "isCompleted": true,
            "tags": [],
            "deletedOn": null
        }
    ]
}
```

If a `roundId` is invalid, the response will contain a `404` response code.
