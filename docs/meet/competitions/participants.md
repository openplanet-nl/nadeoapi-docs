---
name: Get competition participants

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/competitions/{competitionId}/participants?length={length}&offset={offset}

audience: NadeoLiveServices

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

Gets participants for a competition ID.

---

**Remarks**:

- There are two different competition IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-COMP-`.

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/competitions/332/participants?length=5
```

**Example response**:

```json
[
  {
    "participant": "05c82ef9-e6a8-4c83-9897-f747ce51fad5",
    "zone": "World",
    "registration": 1619860645,
    "seed": null,
    "addedBy": "6969eb50-f6e3-4fb5-876e-f264792e3240",
    "team": null,
    "checkInDate": null,
    "groupId": null,
    "skillLevel": null
  },
  {
    "participant": "81fbf9cf-f767-4d1b-a338-8b535de6d1e2",
    "zone": "World",
    "registration": 1619860642,
    "seed": null,
    "addedBy": "6969eb50-f6e3-4fb5-876e-f264792e3240",
    "team": null,
    "checkInDate": null,
    "groupId": null,
    "skillLevel": null
  },
  {
    "participant": "078cb393-1bf8-49dd-b26b-a03771e13144",
    "zone": "World",
    "registration": 1619860638,
    "seed": null,
    "addedBy": "6969eb50-f6e3-4fb5-876e-f264792e3240",
    "team": null,
    "checkInDate": null,
    "groupId": null,
    "skillLevel": null
  },
  {
    "participant": "041d942b-fc48-407c-be97-f32ec9a7d782",
    "zone": "World",
    "registration": 1619860635,
    "seed": null,
    "addedBy": "6969eb50-f6e3-4fb5-876e-f264792e3240",
    "team": null,
    "checkInDate": null,
    "groupId": null,
    "skillLevel": null
  },
  {
    "participant": "a05f508b-abdd-48a1-aa7c-f85039905e33",
    "zone": "World",
    "registration": 1619860632,
    "seed": null,
    "addedBy": "6969eb50-f6e3-4fb5-876e-f264792e3240",
    "team": null,
    "checkInDate": null,
    "groupId": null,
    "skillLevel": null
  }
]
```

If a `competitionId` is invalid, the response will contain a `404` response code.
