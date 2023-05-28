---
name: Get challenge map records

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/challenges/{challengeId}/records/maps/{mapUid}?length={length}&offset={offset}

audience: NadeoClubServices

parameters:
  path:
    - name: challengeId
      type: string
      description: A valid challenge ID
      required: true
    - name: mapUid
      type: string
      description: A valid map UID
      required: true
  query:
    - name: length
      type: integer
      description: The number of records to retrieve
      required: false
      default: 10
      max: 100
    - name: offset
      type: integer
      description: The number of records to skip
      required: false
      default: 0
---

Gets map records for a challenge ID.

---

**Remarks**:
- Note that challenges are different from competitions - challenges are separate leaderboard structures that can be part of a competition (for example in the form of a qualifying session).
- Typically challenges are used for qualifiers in larger competitions - the relevant `challengeId` can be retrieved using the [competition rounds endpoint](/competition/competitions/rounds).
- This endpoint can be very similar to the [challenge leaderboard endpoint](/competition/challenges/leaderboard) - with the difference that you can retrieve map-specific rankings instead of the overall leaderboard.

---

**Example request**:
```plain
GET https://competition.trackmania.nadeo.club/api/challenges/409/records/maps/IM5eN8vx4kZfEedkLo2N5p548j3
```

**Example response**:
```json
[
    {
        "time": 38106,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "b90e91eb-bd87-41fd-8c69-6560dbeedd2e",
        "score": 38106,
        "rank": 1
    },
    {
        "time": 38156,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "dade4799-0761-41b7-8df1-cf413e5c8eef",
        "score": 38156,
        "rank": 2
    },
    {
        "time": 38206,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "d46fb45d-d422-47c9-9785-67270a311e25",
        "score": 38206,
        "rank": 3
    },
    {
        "time": 38251,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "8f08302a-f670-463b-9f71-fbfacffb8bd1",
        "score": 38251,
        "rank": 4
    },
    {
        "time": 38252,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "70bd004b-b948-4a9c-9013-4282487f035b",
        "score": 38252,
        "rank": 5
    },
    {
        "time": 38264,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "5c78b27a-908e-41f5-bce7-09e4367dbc0d",
        "score": 38264,
        "rank": 6
    },
    {
        "time": 38278,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "9688a134-3562-470c-a06d-2275da464643",
        "score": 38278,
        "rank": 7
    },
    {
        "time": 38308,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "70e6f70b-5670-48d8-8551-fb8bb5181f03",
        "score": 38308,
        "rank": 8
    },
    {
        "time": 38321,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "6b14adfa-90d6-486f-8c32-66756d4c93d5",
        "score": 38321,
        "rank": 9
    },
    {
        "time": 38331,
        "uid": "IM5eN8vx4kZfEedkLo2N5p548j3",
        "player": "fcae33dd-70f2-4da1-b493-cd77c4399d0e",
        "score": 38331,
        "rank": 10
    }
]
```

If a `challengeId` is invalid, a `mapUid` is invalid, or there are no records for the combination of the two, the response will contain a `404` response code.
