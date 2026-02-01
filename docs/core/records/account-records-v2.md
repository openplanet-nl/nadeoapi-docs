---
name: Get account records (v2)

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /v2/accounts/{accountId}/mapRecords?mapIdList={mapIdList}&seasonIdList={seasonIdList}&gameMode={gameMode}

audience: NadeoServices

parameters:
  path:
    - name: accountId
      type: string
      description: An account ID
      required: true
  query:
    - name: mapIdList
      type: string
      description: A comma-separated list of map IDs
    - name: seasonIdList
      type: string
      description: A comma-separated list of season IDs (only official campaigns supported)
    - name: gameMode
      type: string
      description: The game mode of the requested records (e.g. for Stunt maps)
---

<div class="notification is-warning">

Starting in January 2026, this endpoint will no longer support retrieving a player's most recent records, and it will require supplying specific map/season IDs.

</div>

Gets records for the currently authenticated account.

---

**Remarks**:

- This endpoint only works for the currently authenticated account, requesting others' records will result in error `403`. This feature is not supported when using a dedicated server account's token.
- This endpoint is limited to the most recent 1,000 records driven by the currently authenticated account. Retrieving all historical records is not supported.
- To retrieve records driven on Stunt maps (with the map type `TrackMania\TM_Stunt`), set the `gameMode` query parameter to `"Stunt"`.
- `mapIdList` and `seasonIdList` should not both be provided in the same request as they both get applied on every result.
- This endpoint's `mapIdList` parameter only accepts `mapId`s - to translate `mapUid`s to `mapId`s, you can use the [map info (multiple) UID endpoint](/core/maps/info-multiple-uid).
- This endpoint has no intrinsic limit on the number of map/season IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 200 map IDs, depending on how you encode the URI).
- If the map author has set a secret threshold score for their map, this endpoint will not return any actual `time` values for some entries. Instead, those leaderboard entries will contain `4294967295` in the `time` field. Additionally, the `url` link will result in a `403` error when requested.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/accounts/5b4d42f4-c2de-407d-b367-cbff3fe817bc/mapRecords?seasonIdList=3987d489-03ae-4645-9903-8f7679c3a418
```

**Example response**:

```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "filename": "Replays\\Downloaded\\73edcfb9-0f84-4fd8-9c52-272dae4e82e5_5b4d42f4-c2de-407d-b367-cbff3fe817bc_(0'19''1).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "73edcfb9-0f84-4fd8-9c52-272dae4e82e5",
    "mapRecordId": "054eb4c1-8e99-4011-bd55-09a376e4b998",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 19013
    },
    "removed": false,
    "scopeId": "3987d489-03ae-4645-9903-8f7679c3a418",
    "scopeType": "Season",
    "timestamp": "2020-07-02T18:32:47+00:00",
    "url": "https://core.trackmania.nadeo.live/storageObjects/f80e7239-771f-491e-a812-2b05cfb91d40"
  },
  ...
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "filename": "Replays\\Downloaded\\bb5ed92d-f2af-462e-a912-7aeb686ff90c_5b4d42f4-c2de-407d-b367-cbff3fe817bc_(0'15''61).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "bb5ed92d-f2af-462e-a912-7aeb686ff90c",
    "mapRecordId": "edc36276-d0c5-4917-bbfa-e1c99b116e65",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 15614
    },
    "removed": false,
    "scopeId": "3987d489-03ae-4645-9903-8f7679c3a418",
    "scopeType": "Season",
    "timestamp": "2020-08-25T16:07:04+00:00",
    "url": "https://core.trackmania.nadeo.live/storageObjects/cff99c66-93ee-4e50-ba5a-34fd04072ed1"
  }
]
```

**Example request** for Stunt records:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/accounts/5b4d42f4-c2de-407d-b367-cbff3fe817bc/mapRecords?mapIdList=623730d0-6b4c-4a83-bddc-246dea88df22&gameMode=Stunt
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
  }
]
```

If the `accountId` does not match the currently authenticated account, the response will contain an error message:

```json
{
  "code": "C-AA-00-19",
  "correlation_id": "2d733fd542604afb77b8fc7cc595f322",
  "message": "Forbidden."
}
```

If the `accountId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "a6aee422ec4c6769c4a4e4fb77ca0e70",
  "message": "There was a validation error.",
  "info": [
    "accountId: \"5b4d42f4-c2de-407d-b367-cbff3fe817bx\" is not a valid UUID."
  ]
}
```
