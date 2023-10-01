---
name: Get all map records for user

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/{accountId}/mapRecords

audience: NadeoServices

path:
  query:
    - name: accountId
      type: string
      description: The account ID
      required: true
---

Gets all map records for the currently authenticated user.

---

**Remarks**:
- As this endpoint requires an authenticated user, it doesn't work in combination with a dedicated server token.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/accounts/b981e0b1-2d6a-4470-9b52-c1f6b0b1d0a6/mapRecords
```

**Example response**:
```json
[
  {
    "accountId": "b981e0b1-2d6a-4470-9b52-c1f6b0b1d0a6",
    "filename": "Replays\\Downloaded\\1f66ddaf-7f21-4d7a-82d9-5d35b1e95742_b981e0b1-2d6a-4470-9b52-c1f6b0b1d0a6_(0'52''59).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "1f66ddaf-7f21-4d7a-82d9-5d35b1e95742",
    "mapRecordId": "3b0a7248-1a8c-401e-aa98-5aba5a220637",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 52595
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2022-07-26T15:51:42+00:00",
    "url": "https://prod.trackmania.core.nadeo.online/storageObjects/2b13564b-9389-4573-b3d8-682e66a26292"
  },
  {
    "accountId": "b981e0b1-2d6a-4470-9b52-c1f6b0b1d0a6",
    "filename": "Replays\\Downloaded\\919046ce-c77c-43b9-9c24-76544110b076_b981e0b1-2d6a-4470-9b52-c1f6b0b1d0a6_(0'42''9).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "919046ce-c77c-43b9-9c24-76544110b076",
    "mapRecordId": "ed0b7233-17a2-4a22-a512-29db7a6a0ca2",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 42094
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2022-07-25T01:11:41+00:00",
    "url": "https://prod.trackmania.core.nadeo.online/storageObjects/a0dbf5b0-2dfd-4b62-9039-920e07fdb2f3"
  }
]
```

If the `accountId` is invalid, the response will contain an error message (along with status code `400`):

```json
{
    "code": "C-AA-00-03",
    "correlation_id": "bf33c4a96ad81fa873382ba808289d10",
    "message": "There was a validation error.",
    "info": {
        "accountId": "Invalid account id."
    }
}
```

If the `accountId` does not belong to the authenticated user, the response will contain an error message (along with status code `403`):

```json
{
    "code": "C-AA-00-05",
    "correlation_id": "9b0902800b41de1b3f4157895962630d",
    "message": "Forbidden."
}
```
