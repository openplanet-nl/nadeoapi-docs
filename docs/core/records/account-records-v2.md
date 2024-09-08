---
name: Get account records (v2)

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /v2/accounts/{accountId}/mapRecords?gameMode={gameMode}

audience: NadeoServices

parameters:
  path:
    - name: accountId
      type: string
      description: An account ID
      required: true
  query:
    - name: gameMode
      type: string
      description: The game mode of the requested records (e.g. for Stunt maps)
      required: false
---

Gets records for the currently authenticated account.

---

**Remarks**:

- This endpoint only works for the currently authenticated account, requesting others' records will result in error `403`. This feature is not supported when using a dedicated server account's token.
- This endpoint is limited to the most recent 1,000 records driven by the currently authenticated account. Retrieving all historical records is not supported.
- To retrieve records driven on Stunt maps (with the map type `TrackMania\TM_Stunt`), set the `gameMode` query parameter to `"Stunt"`.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/accounts/5b4d42f4-c2de-407d-b367-cbff3fe817bc/mapRecords
```

**Example response**:

```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "filename": "Replays\\Downloaded\\8c6913ab-45aa-4d28-84be-4945b7da74b2_5b4d42f4-c2de-407d-b367-cbff3fe817bc_(0'42''67).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "8c6913ab-45aa-4d28-84be-4945b7da74b2",
    "mapRecordId": "002e5a7f-473d-4122-9ad6-7b8b7e0b1d89",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 42670
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2020-12-16T17:51:47+00:00",
    "url": "https://core.trackmania.nadeo.live/storageObjects/16aab3d3-1d31-46b3-b68b-a2b5268ebb4a"
  },
  ...
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "filename": "Replays\\Downloaded\\75a92412-bc14-43eb-9a90-179b5628faa6_5b4d42f4-c2de-407d-b367-cbff3fe817bc_(0'47''24).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "75a92412-bc14-43eb-9a90-179b5628faa6",
    "mapRecordId": "ffc85e08-3335-40d5-9165-c6031d705aed",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 47242
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2022-01-28T23:04:01+00:00",
    "url": "https://core.trackmania.nadeo.live/storageObjects/5b711ed4-6114-4b9f-b7c5-860f5ab69047"
  }
]
```

**Example request** for Stunt records:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/accounts/5b4d42f4-c2de-407d-b367-cbff3fe817bc/mapRecords?gameMode=Stunt
```

**Example response**:

```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "filename": "Replays\\Downloaded\\623730d0-6b4c-4a83-bddc-246dea88df22_5b4d42f4-c2de-407d-b367-cbff3fe817bc_(320-0'24''27).replay.gbx",
    "gameMode": "Stunt",
    "gameModeCustomData": "",
    "mapId": "623730d0-6b4c-4a83-bddc-246dea88df22",
    "mapRecordId": "86bf658f-e248-4650-8c64-c6a87c6ef10b",
    "medal": 0,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 320,
      "time": 24275
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2024-07-02T18:11:11+00:00",
    "url": "https://core.trackmania.nadeo.live/storageObjects/f1ad31f8-aceb-43f7-844d-623e0aca2de0"
  },
  ...
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "filename": "Replays\\Downloaded\\4cc348de-1ccf-4744-8f0a-c2fd3c0b6986_5b4d42f4-c2de-407d-b367-cbff3fe817bc_(500-0'12''7).replay.gbx",
    "gameMode": "Stunt",
    "gameModeCustomData": "",
    "mapId": "4cc348de-1ccf-4744-8f0a-c2fd3c0b6986",
    "mapRecordId": "d753d0af-06b3-4424-8e0a-753341fe0e63",
    "medal": 1,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 500,
      "time": 12070
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2024-06-30T10:26:17+00:00",
    "url": "https://core.trackmania.nadeo.live/storageObjects/4711e17b-8959-45d9-a930-705b64486513"
  }
]
```

If the `accountId` does not match the currently authenticated account, the response will contain an error message:

```json
{
  "code": "C-AA-00-07",
  "correlation_id": "1de197bc1958b39483e330e6b79fb3f6",
  "message": "You are not allowed to do this action on this account"
}
```

If the `accountId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "27131a8db1972a29ebb9b9bd967e5021",
  "message": "There was a validation error.",
  "info": [
    "accountId: Invalid account id."
  ]
}
```
