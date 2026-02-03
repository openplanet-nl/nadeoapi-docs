---
name: Get map records by accounts (v2)

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /v2/mapRecords/by-account/?accountIdList={accountIdList}&mapId={mapId}&seasonId={seasonId}&gameMode={gameMode}

audience: NadeoServices

parameters:
  query:
    - name: accountIdList
      type: string
      description: A comma-separated list of account IDs
      required: true
    - name: mapId
      type: string
      description: A map ID
      required: true
    - name: seasonId
      type: string
      description: The ID of the requested group/season
    - name: gameMode
      type: string
      description: The game mode of the requested map (e.g. for Stunt or Platform maps)
---

<div class="notification is-info">

This endpoint is not the same as the [deprecated map records (v2) endpoint](/core/deprecated/map-records-v2) - note the changed endpoint route.

</div>

Gets map records for a set of accounts on a given map.

---

**Remarks**:

- Using this endpoint, it is only possible to request records for one map.
- This endpoint only accepts a `mapId` - to translate `mapUid`s to `mapId`s, you can use the [map info (multiple) UID endpoint](/core/maps/info-multiple-uid).
- This endpoint has no intrinsic limit on the number of accounts requested, but it will return a 414 error if the request URI length is 8220 characters or more (e.g. corresponding to one map and just above 200 accounts, depending on how you encode the URI).
- The `seasonId` parameter does not accept the value `"Personal_Best"`- to retrieve records on the PB leaderboards, simply omit the `seasonId` parameter from the URL.
- Stunt and Platform maps (with the map type `TrackMania\TM_Stunt`/`Trackmania\TM_Platform`) require the `gameMode` parameter to be set to `"Stunt"`/`"Platform"`, otherwise the response will contain a "Not found" error.
- When omitting the `seasonId` parameter, Race maps with clones require the `gameMode` parameter to be set to `"TimeAttackClone"`, otherwise the response will contain an empty list. It's recommended to always pass the `gameMode` parameter for consistency. To find out if a map has clones, you can use the Core API's [map info (multiple) ID](/core/maps/info-multiple-id) or [map info (multiple) UID](/core/maps/info-multiple-uid) endpoints.
- If the map author has set a secret threshold score for their map, this endpoint will not return any actual `time` values for some entries. Instead, those leaderboard entries will contain `4294967295` in the `time` field. Additionally, the `url` link will result in a `403` error when requested.
- This endpoint behaves the same as the [deprecated map records (v2) endpoint](/core/deprecated/map-records-v2).

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/mapRecords/by-account/?accountIdList=2fd1f664-85e4-4429-89ca-d49e4d2083a1&mapId=11f05603-58f4-4289-b643-d88e4d757015
```

**Example response**:

```json
[
  {
    "accountId": "2fd1f664-85e4-4429-89ca-d49e4d2083a1",
    "filename": "Replays\\Downloaded\\11f05603-58f4-4289-b643-d88e4d757015_2fd1f664-85e4-4429-89ca-d49e4d2083a1_(0'22''31).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "11f05603-58f4-4289-b643-d88e4d757015",
    "mapRecordId": "5d78fde1-1e1f-4c1c-bc0e-929a352828c5",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 22318
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2024-07-28T15:09:27+00:00",
    "url": "https://core.trackmania.nadeo.live/mapRecords/5d78fde1-1e1f-4c1c-bc0e-929a352828c5/replay"
  }
]
```

**Example request** for a Stunt map:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/mapRecords/by-account/?accountIdList=374d79ae-e3cf-4231-9ee3-276d414b48dd,d3557ada-6d0c-40be-9208-8587d9293dff&mapId=623730d0-6b4c-4a83-bddc-246dea88df22&gameMode=Stunt
```

**Example response**:

```json
[
  {
    "accountId": "374d79ae-e3cf-4231-9ee3-276d414b48dd",
    "filename": "Replays\\Downloaded\\623730d0-6b4c-4a83-bddc-246dea88df22_374d79ae-e3cf-4231-9ee3-276d414b48dd_(1840-0'28''59).replay.gbx",
    "gameMode": "Stunt",
    "gameModeCustomData": "",
    "mapId": "623730d0-6b4c-4a83-bddc-246dea88df22",
    "mapRecordId": "3c9f94e9-cfcd-46f3-a1b9-24ec0bd172aa",
    "medal": 4,
    "recordScore": {
      "respawnCount": 0,
      "score": 1840,
      "time": 28590
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2024-10-01T20:03:06+00:00",
    "url": "https://core.trackmania.nadeo.live/mapRecords/3c9f94e9-cfcd-46f3-a1b9-24ec0bd172aa/replay"
  },
  {
    "accountId": "d3557ada-6d0c-40be-9208-8587d9293dff",
    "filename": "Replays\\Downloaded\\623730d0-6b4c-4a83-bddc-246dea88df22_d3557ada-6d0c-40be-9208-8587d9293dff_(1320-0'11''92).replay.gbx",
    "gameMode": "Stunt",
    "gameModeCustomData": "",
    "mapId": "623730d0-6b4c-4a83-bddc-246dea88df22",
    "mapRecordId": "26803f78-1d8b-4382-8859-c292d0cb1d49",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 1320,
      "time": 11922
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2024-07-01T16:14:39+00:00",
    "url": "https://core.trackmania.nadeo.live/mapRecords/26803f78-1d8b-4382-8859-c292d0cb1d49/replay"
  }
]
```

If the map can't be found (e.g. due to an incorrectly specified `gameMode` parameter), the response will contain an error message:

```json
{
  "code": "C-AL-02-03",
  "correlation_id": "b460ea6c98992a2d75beb65cc5414143",
  "message": "Not Found"
}
```

If the `mapId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "622513f7e08a8aca59626f333aa2f6c9",
  "message": "There was a validation error.",
  "info": ["mapId: Invalid uuid."]
}
```

If an `accountId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "88edef877d7ac273193a7ad2a9f671d1",
  "message": "There was a validation error.",
  "info": ["accountIdList: Invalid account id."]
}
```
