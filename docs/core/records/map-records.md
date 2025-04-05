---
name: Get map records

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /mapRecords/?accountIdList={accountIdList}&mapIdList={mapIdList}&seasonId={seasonId}

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
      required: false
    - name: seasonId
      type: string
      description: The ID of the requested group/season
      required: false
    - name: gameMode
      type: string
      description: The game mode of the requested map (e.g. for Stunt maps)
      require: false
---

<div class="notification is-warning">

This endpoint is deprecated and may be removed in the future. Requesting records for multiple maps is no longer supported. It's recommended to use the [v2 route](/core/records/map-records-v2) instead.

</div>

Gets map records for a set of maps and a set of accounts.

---

**Remarks**:

- This endpoint only accepts `mapId`s - to translate `mapUid`s to `mapId`s, you can use the [map info (multiple) endpoint](/core/maps/info-multiple).
- This endpoint has no intrinsic limit on the number of maps/accounts requested, but it will return a `414` error if the request URI length is 8220 characters or more (e.g. corresponding to one map and just above 200 accounts, depending on how you encode the URI).
- The `seasonId` parameter does not accept the value `"Personal_Best"`- to retrieve records on the PB leaderboards, simply omit the `seasonId` parameter from the URL.
- By omitting `mapIdList` you can request all records on all maps for a requested `accountId` - note that this only works for the currently authenticated account, requesting others' records without specifying `mapId`s will result in error `403`. This feature is not supported when using a dedicated server account's token.
- Stunt maps (with the map type `TrackMania\TM_Stunt`) require the `gameMode` parameter to be set to `"Stunt"`, otherwise the response will contain a "Not found" error.
- As of July 12th 2024, this endpoint allows multiple `mapId`s only in combination with exactly one `accountId`. Requesting multiple accounts and multiple maps at the same time results in a `400` error response.

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
    "url": "https://core.trackmania.nadeo.live/mapRecords/3b0a7248-1a8c-401e-aa98-5aba5a220637/replay"
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
    "url": "https://core.trackmania.nadeo.live/mapRecords/ed0b7233-17a2-4a22-a512-29db7a6a0ca2/replay"
  }
]
```

If a map can't be found (e.g. due to an incorrectly specified `gameMode` parameter), the response will contain an error message:

```json
{
  "code": "C-AL-02-03",
  "correlation_id": "b460ea6c98992a2d75beb65cc5414143",
  "message": "Not Found"
}
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
