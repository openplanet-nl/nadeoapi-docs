---
name: Get competition teams

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/competitions/{competitionId}/mode-teams

audience: NadeoClubServices

parameters:
  path:
    - name: competitionId
      type: string
      description: A valid competition ID
      required: true
---

Gets teams for a competition ID.

---

**Remarks**:
- There are two different competition IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-COMP-`.

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/competitions/4621/mode-teams
```

**Example response**:
```json
[
    {
        "Id": "1a95ea05-6c59-4839-9777-0ce807b2cc76",
        "Name": "Southern Speedsters",
        "Players": [
            {
                "AccountId": "19964586-33bd-4645-8ceb-2ca9f2195060"
            },
            {
                "AccountId": "fd6ca975-d21b-43db-a416-cd36a1be75fc"
            }
        ]
    },
    {
        "Id": "6b38c00f-b820-437b-9871-0f6975f717e3",
        "Name": "Orgless",
        "Players": [
            {
                "AccountId": "1699cffd-862d-4ae0-bbd4-0efbb40ef28b"
            },
            {
                "AccountId": "3a88d4bc-a2a5-4b38-9fd6-f05c02ef159a"
            }
        ]
    },
    {
        "Id": "7bb198d0-2f69-4265-b467-dc0fa8c0a9f0",
        "Name": "PF Racing",
        "Players": [
            {
                "AccountId": "3ca1d081-3872-4a7d-ad8f-a3e785bfbfff"
            },
            {
                "AccountId": "ac424f5e-5612-4a44-8b87-6403be2b690f"
            }
        ]
    },
    {
        "Id": "a6543d8d-b277-4029-92e5-c08ba1d6166a",
        "Name": "F10",
        "Players": [
            {
                "AccountId": "0da0a251-20e8-4219-86eb-7d9c52847779"
            },
            {
                "AccountId": "e07e9ea9-daa5-4496-9908-9680e35da02b"
            }
        ]
    },
    {
        "Id": "ce1f8c64-fb80-4411-bef1-ce6cc2ef6e52",
        "Name": "Molotov Gaming",
        "Players": [
            {
                "AccountId": "54c7bd69-67f6-4544-902a-41c6ed4e0b3a"
            },
            {
                "AccountId": "9f0dae68-3ae7-4396-bb97-44822c302b7c"
            }
        ]
    },
    {
        "Id": "d88996af-5af7-48a0-83ba-1fd0ee2aa5ea",
        "Name": "Camurun Icinde",
        "Players": [
            {
                "AccountId": "9d4f5763-1c07-412e-875c-d9277b102d52"
            },
            {
                "AccountId": "df3fcb0e-e187-4634-b205-c56e4f52a20b"
            }
        ]
    }
]
```

If a `competitionId` is invalid or the competition doesn't have any teams, the response will contain an empty array.
