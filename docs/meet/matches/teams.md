---
name: Get match teams

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matches/{matchId}/teams

audience: NadeoLiveServices

parameters:
  path:
    - name: matchId
      type: string
      description: A valid match ID
      required: true
---

Gets team information for a given match ID.

---

**Remarks**:

- Match information is only stored on Nadeo's servers for about a month - afterwards, requesting it will only result in a `404` response code.
- There are two different match IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-MTCH-`.

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/matches/3018551/teams
```

**Example response**:

```json
[
  {
    "position": 0,
    "score": 0,
    "rank": 2
  },
  {
    "position": 1,
    "score": 5,
    "rank": 1
  }
]
```

If a `matchId` is invalid, the response will contain a `404` response code.
