---
name: Get challenge leaderboard

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/challenges/{challengeId}/leaderboard?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: challengeId
      type: string
      description: A valid challenge ID
      required: true
  query:
    - name: length
      type: integer
      description: The number of leaderboard entries to retrieve
      required: false
      default: 10
      max: 100
    - name: offset
      type: integer
      description: The number of leaderboard entries to skip
      required: false
      default: 0
---

Gets leaderboard entries for a challenge ID.

---

**Remarks**:

- Note that challenges are different from competitions - challenges are separate leaderboard structures that can be part of a competition (for example in the form of a qualifying session).
- Typically challenges are used for qualifiers in larger competitions - the relevant `challengeId` can be retrieved using the [competition rounds endpoint](/meet/competitions/rounds).

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/challenges/409/leaderboard
```

**Example response**:

```json
{
  "challengeId": 409,
  "cardinal": 399,
  "scoreUnit": "time",
  "results": [
    {
      "points": 38106,
      "player": "b90e91eb-bd87-41fd-8c69-6560dbeedd2e",
      "score": 38106,
      "rank": 1,
      "zone": "World|Europe|Poland|Kujawsko-Pomorskie"
    },
    {
      "points": 38156,
      "player": "dade4799-0761-41b7-8df1-cf413e5c8eef",
      "score": 38156,
      "rank": 2,
      "zone": "World|Asia|Brunei"
    },
    {
      "points": 38206,
      "player": "d46fb45d-d422-47c9-9785-67270a311e25",
      "score": 38206,
      "rank": 3,
      "zone": "World|Europe|Czechia|Středočeský kraj"
    },
    {
      "points": 38251,
      "player": "8f08302a-f670-463b-9f71-fbfacffb8bd1",
      "score": 38251,
      "rank": 4,
      "zone": "World|Europe|Germany|Saarland|Saarbrücken"
    },
    {
      "points": 38252,
      "player": "70bd004b-b948-4a9c-9013-4282487f035b",
      "score": 38252,
      "rank": 5,
      "zone": "World|Europe|France|Nouvelle-Aquitaine|Pyrénées-Atlantiques"
    },
    {
      "points": 38264,
      "player": "5c78b27a-908e-41f5-bce7-09e4367dbc0d",
      "score": 38264,
      "rank": 6,
      "zone": "World|North America|United States|Wisconsin"
    },
    {
      "points": 38278,
      "player": "9688a134-3562-470c-a06d-2275da464643",
      "score": 38278,
      "rank": 7,
      "zone": "World|Europe|Finland"
    },
    {
      "points": 38308,
      "player": "70e6f70b-5670-48d8-8551-fb8bb5181f03",
      "score": 38308,
      "rank": 8,
      "zone": "World|North America|Jamaica"
    },
    {
      "points": 38321,
      "player": "6b14adfa-90d6-486f-8c32-66756d4c93d5",
      "score": 38321,
      "rank": 9,
      "zone": "World|Europe|Poland|Lubelskie"
    },
    {
      "points": 38331,
      "player": "fcae33dd-70f2-4da1-b493-cd77c4399d0e",
      "score": 38331,
      "rank": 10,
      "zone": "World|South America|Brazil|São Paulo"
    }
  ]
}
```

If a `challengeId` is invalid, the response will contain a `404` response code.
