---
name: Get map records by IDs (v2)

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /v2/mapRecords/by-id/?mapRecordIdList={mapRecordIdList}

audience: NadeoServices

parameters:
  query:
    - name: mapRecordIdList
      type: string
      description: A comma-separated list of record IDs
      required: true
---

Gets map records using their primary identifiers.

---

**Remarks**:

- This endpoint only accepts a `mapRecordId` - you can use the [map records by accounts (v2) endpoint](/core/records/map-records-v2-account) to find these identifiers.
- This endpoint has no intrinsic limit on the number of records requested, but it will return a 414 error if the request URI length is 8220 characters or more (e.g. corresponding to just above 200 records, depending on how you encode the URI).
- If the map author has set a secret threshold score for their map, this endpoint will not return any actual `time` values for some entries. Instead, those leaderboard entries will contain `4294967295` in the `time` field. Additionally, the `url` link will result in a `403` error when requested.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/v2/mapRecords/by-id/?mapRecordIdList=5d78fde1-1e1f-4c1c-bc0e-929a352828c5
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

If a record can't be found, it will be omitted from the response.

If a `mapRecordId` is invalid, the response will contain an error message:

```
{
  "code": "C-AA-00-03",
  "correlation_id": "e4629040cb66c47f98e0b564d48d402a",
  "message": "There was a validation error.",
  "info": [
    "mapRecordIdList[0]: \"26803f78-1d8b-4382-8859-c292d0cb1d4x\" is not a valid UUID."
  ]
}
```
