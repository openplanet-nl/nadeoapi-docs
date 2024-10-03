---
name: Get map records (v2)

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /v2/mapRecords/?accountIdList={accountIdList}&mapId={mapId}&seasonId={seasonId}&gameMode={gameMode}

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
      required: false
    - name: gameMode
      type: string
      description: The game mode of the requested map (e.g. for Stunt or Platform maps)
      required: false
---

Gets map records for a set of accounts on a given map.

---

**Remarks**:

- The main difference between the [old map records endpoint](/core/records/map-records) and this **v2** version is the `mapId` parameter. Using this endpoint, it is only possible to request records for one map (as opposed to requesting records for multiple players on multiple maps).
- This endpoint only accepts a `mapId` - to translate `mapUid`s to `mapId`s, you can use the [map info (multiple) endpoint](/core/maps/info-multiple).
- This endpoint has no intrinsic limit on the number of accounts requested, but it will return a 414 error if the request URI length is 8220 characters or more (e.g. corresponding to one map and just above 200 accounts, depending on how you encode the URI).
- The `seasonId` parameter does not accept the value `"Personal_Best"`- to retrieve records on the PB leaderboards, simply omit the `seasonId` parameter from the URL.
- Stunt and Platform maps (with the map type `TrackMania\TM_Stunt`/`Trackmania\TM_Platform`) require the `gameMode` parameter to be set to `"Stunt"`/`"Platform"`, otherwise the response will contain a "Not found" error.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/mapRecords/?accountIdList=2fd1f664-85e4-4429-89ca-d49e4d2083a1&mapId=11f05603-58f4-4289-b643-d88e4d757015
```

**Example response**:

```json
[
  {
    "accountId": "2fd1f664-85e4-4429-89ca-d49e4d2083a1",
    "filename": "Replays\\Downloaded\\11f05603-58f4-4289-b643-d88e4d757015_2fd1f664-85e4-4429-89ca-d49e4d2083a1_(0'22''34).replay.gbx",
    "gameMode": "TimeAttack",
    "gameModeCustomData": "",
    "mapId": "11f05603-58f4-4289-b643-d88e4d757015",
    "mapRecordId": "5d78fde1-1e1f-4c1c-bc0e-929a352828c5",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 0,
      "time": 22340
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2024-07-06T18:27:58+00:00",
    "url": "https://core.trackmania.nadeo.live/mapRecords/5d78fde1-1e1f-4c1c-bc0e-929a352828c5/replay"
  }
]
```

**Example request** for a Stunt map:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/mapRecords/?accountIdList=374d79ae-e3cf-4231-9ee3-276d414b48dd,d3557ada-6d0c-40be-9208-8587d9293dff&mapId=623730d0-6b4c-4a83-bddc-246dea88df22&gameMode=Stunt
```

**Example response**:

```json
[
  {
    "accountId": "374d79ae-e3cf-4231-9ee3-276d414b48dd",
    "filename": "Replays\\Downloaded\\623730d0-6b4c-4a83-bddc-246dea88df22_374d79ae-e3cf-4231-9ee3-276d414b48dd_(1380-2'2''23).replay.gbx",
    "gameMode": "Stunt",
    "gameModeCustomData": "",
    "mapId": "623730d0-6b4c-4a83-bddc-246dea88df22",
    "mapRecordId": "3c9f94e9-cfcd-46f3-a1b9-24ec0bd172aa",
    "medal": 4,
    "recordScore": {
      "respawnCount": 4294967295,
      "score": 1380,
      "time": 122234
    },
    "removed": false,
    "scopeId": null,
    "scopeType": "PersonalBest",
    "timestamp": "2024-07-01T16:56:11+00:00",
    "url": "https://core.trackmania.nadeo.live/storageObjects/a2ebb386-80d8-4e98-b9b9-8ec2259e1512"
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
    "url": "https://core.trackmania.nadeo.live/storageObjects/90263730-ad1c-4680-8d80-6aea02881809"
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
