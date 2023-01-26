---
name: Get campaign/TOTD info for a map

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/campaign/map/{mapUid}

audience: NadeoLiveServices

parameters:
  path:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

Gets information about a map's official campaign/TOTD status.

---

**Remarks**:
- This endpoint does not provide any information about whether a map is part of any club campaigns.
- The `officialMaps` field in the response is a list of all maps' `mapUid`s that were part of the same seasonal campaign as the requested map.
- The `totdMaps` field in the response is a list of all maps' `mapUid`s that were part of the same week as the requested map.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/campaign/map/ClF9ty2T55DZq4a8619TMvke5P7
```

**Example response**:
```json
{
    "officialYear": -1,
    "season": -1,
    "officialMaps": [],
    "totdYear": 2023,
    "week": 3,
    "totdMaps": [
        "cfQYjTzrRAyXctfkl1MH0JtmRWc",
        "ClF9ty2T55DZq4a8619TMvke5P7",
        "ADj5UCjoxJCppggf6SsVqXi3kM",
        "yRo4EXsukowHwkDb0uQjXAEH7sg",
        "U2NfU6SMIgllFpoYmE85ZbHteo",
        "ZAs2YmLo00RT2cnMnG11wxvcnZi",
        "eE4PFcW4yhboOeNVEAi0esxOswe"
    ]
}
```

Example response if the requested map does not exist or is not part of any campaigns or TOTDs:

```json
{
    "officialYear": -1,
    "season": -1,
    "officialMaps": [],
    "totdYear": -1,
    "week": -1,
    "totdMaps": []
}
```
