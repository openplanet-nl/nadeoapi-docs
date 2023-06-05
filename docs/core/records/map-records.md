---
name: Get map records

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /mapRecords/?accountIdList={accountIdList}&mapIdList={mapIdList}

audience: NadeoServices

parameters:
  query:
    - name: accountIdList
      type: string
      description: A comma-separated list of account IDs
      required: true
    - name: mapIdList
      type: string
      description: A comma-separated list of map IDs
      required: true
---

Gets map records for a set of maps and a set of accounts.

---

**Remarks**:
- This endpoint only accepts `mapId`s - to translate `mapUid`s to `mapId`s, you can use the [map info endpoint](/core/maps/info).
- Due to URI length limitations, the maximum number of IDs allowed is 207. Realistically, this means one map and at most 206 accounts, or more maps and fewer accounts.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/mapRecords/?accountIdList=b981e0b1-2d6a-4470-9b52-c1f6b0b1d0a6&mapIdList=1f66ddaf-7f21-4d7a-82d9-5d35b1e95742,919046ce-c77c-43b9-9c24-76544110b076
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

If a `mapId` is invalid, the response will contain an error message:

```json
{
    "code": "C-AA-00-03",
    "correlation_id": "e1a8421f860c4824ee336647f2eab1a3",
    "message": "There was a validation error.",
    "info": {
        "mapIdList": "Invalid uuid."
    }
}
```

If an `accountId` is invalid, the response will contain an error message:

```json
{
    "code": "C-AA-00-03",
    "correlation_id": "5bcbe4ed58d0da7a1b9184bab60389d1",
    "message": "There was a validation error.",
    "info": {
        "accountIdList": "Invalid account id."
    }
}
```
