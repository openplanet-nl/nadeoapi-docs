---
name: Get map info (multiple)

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/map/get-multiple?mapUidList={mapUidList}

audience: NadeoLiveServices

parameters:
  query:
    - name: mapUidList
      type: string
      description: A comma-separated list of map UIDs (maximum 100)
      required: true
---

Gets information about multiple maps from their UIDs.

---

**Remarks**:
- Invalid UIDs will be ignored in the result without any visible errors.
- The API returns a `400` error if more than 100 map UIDs are requested.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/map/get-multiple?mapUidList=YewzuEnjmnh_ShMW1cX0puuZHcf,HisPAAWhTMTjQPxhMJtMak7Daud
```

**Example response**:
```json
{
  "mapList": [
    {
      "uid": "YewzuEnjmnh_ShMW1cX0puuZHcf",
      "mapId": "17d72086-de9c-406b-8f8f-364e41d3e3bf",
      "name": "$009L$00Aa$00Bs$00Ct $063O$073u$072t$082p$081o$091s$090t$fff ft Agrabou",
      "author": "78332411-010f-4d61-84d8-0db1d6b5f8c0",
      "submitter": "5f9c2a43-593f-4e84-a64d-82319058dd3a",
      "authorTime": 45900,
      "goldTime": 49000,
      "silverTime": 56000,
      "bronzeTime": 69000,
      "nbLaps": 0,
      "valid": false,
      "downloadUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/b0e97432-eefe-40dc-96ef-583ec0c23099",
      "thumbnailUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/83a1ee79-9c41-4be2-9e30-67bd8a8bf4fe.jpg",
      "uploadTimestamp": 1658695534,
      "updateTimestamp": 1661191160,
      "fileSize": null,
      "public": false,
      "favorite": false,
      "playable": true,
      "mapStyle": "",
      "mapType": "TrackMania\\TM_Race",
      "collectionName": "Stadium"
    },
    {
      "uid": "HisPAAWhTMTjQPxhMJtMak7Daud",
      "mapId": "0ee6d969-f58f-4a7e-8716-7d25a795dd03",
      "name": "$n$oWORK IN $FC3PROGRESS",
      "author": "912ae713-d291-44c7-b34e-bd96c655dc64",
      "submitter": "912ae713-d291-44c7-b34e-bd96c655dc64",
      "authorTime": 46368,
      "goldTime": 49000,
      "silverTime": 56000,
      "bronzeTime": 70000,
      "nbLaps": 0,
      "valid": false,
      "downloadUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/a41c5eb7-9632-4c14-af02-b1cc760a35e0",
      "thumbnailUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/c959a0dc-66be-4843-bf30-a3b70b52f722.jpg",
      "uploadTimestamp": 1659006890,
      "updateTimestamp": 1661109091,
      "fileSize": null,
      "public": false,
      "favorite": false,
      "playable": true,
      "mapStyle": "",
      "mapType": "TrackMania\\TM_Race",
      "collectionName": "Stadium"
    }
  ],
  "itemCount": 2
}
```
