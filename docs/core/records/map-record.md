---
name: Get record by ID

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /mapRecords/{mapRecordId}

audience: NadeoServices

parameters:
  query:
    - name: mapRecordId
      type: string
      description: A mapRecord ID
      required: true
---

Gets a single map record using its primary identifier.

---

**Remarks**:
- This endpoint only accepts a `mapRecordId` - to retrieve it, use the map records endpoint.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/mapRecords/ade1de4c-dd53-4a65-9d9b-89c5b1b9fa44
```

**Example response**:
```json
{
  "accountId": "04dd686d-0d2e-4c4c-bd37-81d57ae47656",
  "filename": "Replays\\Downloaded\\37852772-23c5-40cb-8106-9fdae43efa6f_04dd686d-0d2e-4c4c-bd37-81d57ae47656_(0'45''37).replay.gbx",
  "gameMode": "TimeAttack",
  "gameModeCustomData": "",
  "mapId": "37852772-23c5-40cb-8106-9fdae43efa6f",
  "mapRecordId": "ade1de4c-dd53-4a65-9d9b-89c5b1b9fa44",
  "medal": 1,
  "recordScore": {
    "respawnCount": 4294967295,
    "score": 0,
    "time": 45376
  },
  "removed": false,
  "scopeId": null,
  "scopeType": "PersonalBest",
  "timestamp": "2020-07-12T01:54:41+02:00",
  "url": "https://prod.trackmania.core.nadeo.online/storageObjects/317832fc-7576-4a65-954e-b0eb390a7372"
}
```

If the `mapRecordId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "8ed109aa5aff42c0b2606c51a43bbf15",
  "message": "There was a validation error.",
  "info": {
    "mapRecordId": "Invalid uuid."
  }
}
```
