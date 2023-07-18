---
name: Get competition leaderboard

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/competitions/{competitionId}/leaderboard?length={length}&offset={offset}

audience: NadeoClubServices

parameters:
  path:
    - name: competitionId
      type: string
      description: A valid competition ID
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

Gets leaderboard for a competition ID.

---

**Remarks**:
- There are two different competition IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-COMP-`.
- If a competition hasn't started yet, all `score` values will be `0`, but there will still be `rank` values assigned to each player.

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/competitions/3629/leaderboard?length=100
```

**Example response**:
```json
[
    {
        "participant": "da4642f9-6acf-43fe-88b6-b120ff1308ba",
        "rank": 1,
        "score": 2418,
        "zone": "World|Europe|Belgium|Liège"
    },
    {
        "participant": "aceb463a-ed8e-47d6-bc8d-025c229aca5b",
        "rank": 2,
        "score": 2417,
        "zone": "World|Europe|France|Auvergne-Rhône-Alpes|Rhône"
    },
    {
        "participant": "87e4afbf-fb54-4d60-9ce1-b0698beab097",
        "rank": 3,
        "score": 2416,
        "zone": "World|Europe|Slovakia"
    },
    ...
    {
        "participant": "88347e06-f817-4643-b965-0f1e5fcb753c",
        "rank": 98,
        "score": 2321,
        "zone": "World|Europe|France|Île-de-France|Yvelines"
    },
    {
        "participant": "edb9dfe7-d7cf-4add-8a5e-d992fa2a35bb",
        "rank": 99,
        "score": 2320,
        "zone": "World|Europe|Italy|Piemonte"
    },
    {
        "participant": "0d2596bf-b3f4-4b36-8dab-f66c34d8ec74",
        "rank": 100,
        "score": 2319,
        "zone": "World|Europe|Germany|Baden-Württemberg|Stuttgart"
    }
]
```

If a `competitionId` is invalid, the response will contain a `404` response code.
