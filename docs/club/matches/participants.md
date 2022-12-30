---
name: Get match participants

url: https://club.trackmania.nadeo.club
method: GET
route: /api/matches/{matchId}/participants

audience: NadeoClubServices

parameters:
  path:
    - name: matchId
      type: string
      description: A valid match ID
      required: true
---

Gets players for a given match ID.

---

**Remarks**:
- Match information is only stored on Nadeo's servers for about a month - afterwards, requesting it will only result in a `404` response code.
- There are two different match IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-MTCH-`.

---

**Example request**:
```plain
GET https://club.trackmania.nadeo.club/api/matches/3018551/participants
```

**Example response**:
```json
[
    {
        "participant": "d1248c49-9afc-4a94-9e6d-941d3e954496",
        "position": 0,
        "teamPosition": 0,
        "rank": 5,
        "score": 12,
        "mvp": false,
        "leaver": null,
        "eliminated": false
    },
    {
        "participant": "7f2886b1-a735-46d6-8c07-0d6975b468e4",
        "position": 1,
        "teamPosition": 0,
        "rank": 6,
        "score": 10,
        "mvp": false,
        "leaver": null,
        "eliminated": false
    },
    {
        "participant": "d83627a4-2c7c-4be9-969c-1ab41f2f79fa",
        "position": 2,
        "teamPosition": 0,
        "rank": 3,
        "score": 17,
        "mvp": false,
        "leaver": null,
        "eliminated": false
    },
    {
        "participant": "dc203ffc-bab7-4971-bfb3-dec83db1fa4e",
        "position": 3,
        "teamPosition": 1,
        "rank": 2,
        "score": 23,
        "mvp": false,
        "leaver": null,
        "eliminated": false
    },
    {
        "participant": "6a7a889f-cbff-4910-b369-a4201de53cb8",
        "position": 4,
        "teamPosition": 1,
        "rank": 1,
        "score": 27,
        "mvp": true,
        "leaver": null,
        "eliminated": false
    },
    {
        "participant": "bb961ea9-bb72-49c2-9294-fb0a34fb7591",
        "position": 5,
        "teamPosition": 1,
        "rank": 4,
        "score": 16,
        "mvp": false,
        "leaver": null,
        "eliminated": false
    }
]
```

If a `matchId` is invalid, the response will contain a `404` response code.
