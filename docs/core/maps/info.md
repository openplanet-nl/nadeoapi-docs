---
name: Get map info

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /maps/?mapIdList={mapIdList}&mapUidList={mapUidList}

audience: NadeoServices

parameters:
  query:
    - name: mapIdList
      type: string
      description: A comma-separated list of map IDs
      required: true
    - name: mapUidList
      type: string
      description: A comma-separated list of map UIDs
      required: true
---

Gets map information for a number of maps at once.

---

**Remarks**:
- The two parameters work the same way, but you can only use one of them at a time.
- This endpoint has no intrinsic limit on the number of map IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 200 map IDs or almost 300 map UIDs, depending on how you encode the URI).

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/maps/?mapUidList=kgeriJWc1DqgHfAnRX6k8d3XW2c,CxVgpC7yvEvdEBSL4Kk6SKrTdue6
```

**Example response**:
```json
[
  {
    "author": "d7c02452-7333-49df-8a31-4cf932475007",
    "authorScore": 47017,
    "bronzeScore": 71000,
    "collectionName": "Stadium",
    "filename": "Ceramic Terrace.Map.Gbx",
    "goldScore": 50000,
    "isPlayable": true,
    "mapId": "7c213041-2b35-4fd5-bf02-d2d6815b1cfe",
    "mapStyle": "",
    "mapType": "TrackMania\\TM_Race",
    "mapUid": "CxVgpC7yvEvdEBSL4Kk6SKrTdue",
    "name": "Ceramic Terrace",
    "silverScore": 57000,
    "submitter": "d7c02452-7333-49df-8a31-4cf932475007",
    "timestamp": "2022-05-25T15:35:51+00:00",
    "fileUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/8c8ef6fd-cbfd-4e38-acb1-ca91aeb9e3b5",
    "thumbnailUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/6ce08d22-1bce-4a35-997d-208a3ef3fa18.jpg"
  },
  {
    "author": "3bb0d130-637d-46a6-9c19-87fe4bda3c52",
    "authorScore": 56105,
    "bronzeScore": 85000,
    "collectionName": "Stadium",
    "filename": "Poggadopolis 2033.Map.Gbx",
    "goldScore": 60000,
    "isPlayable": true,
    "mapId": "11d40c4f-5d95-48ca-a564-a7576fad1c30",
    "mapStyle": "",
    "mapType": "TrackMania\\TM_Race",
    "mapUid": "kgeriJWc1DqgHfAnRX6k8d3XW2c",
    "name": "$s$F90P$F91og$E92ga$E93do$E94p$E95o$D95l$D96is$D97 2$C9803$C993",
    "silverScore": 68000,
    "submitter": "3bb0d130-637d-46a6-9c19-87fe4bda3c52",
    "timestamp": "2022-06-07T13:52:01+00:00",
    "fileUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/f18834d8-63ba-4bf9-b485-9ce5453c2117",
    "thumbnailUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/0e98d63f-9320-4bd0-9a10-39d1353dc1a8.jpg"
  }
]
```

If a `mapId` is invalid, the response will contain an error message:

```json
{
    "code": "C-AA-00-03",
    "correlation_id": "10d26dadac018cccf1c9bcf138e3fb1c",
    "message": "There was a validation error.",
    "info": {
        "mapIdList": "Invalid uuid."
    }
}
```

If a `mapUid` is invalid, that map will not be returned in the response.
