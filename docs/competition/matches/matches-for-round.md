---
name: Get matches for a competition round

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/rounds/{roundId}/matches?length={length}&offset={offset}

audience: NadeoClubServices

parameters:
  path:
    - name: roundId
      type: string
      description: A valid round ID
      required: true
  query:
    - name: length
      type: integer
      description: The number of matches to retrieve
      required: true
      default: 10
      max: 100
    - name: offset
      type: integer
      description: The number of matches to skip
      required: false
      default: 0
---

Gets matches for a given round in a competition.

---

**Remarks**:
- Note that the match IDs in the response are competition match IDs to be used in [competition match endpoints](/competitions/matches) - they are not equivalent to the numerical match IDs used in the [club match endpoints](/club/matches). To use those endpoints based on the response from this endpoint, use the `clubMatchLiveId` field as an identifier.

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
