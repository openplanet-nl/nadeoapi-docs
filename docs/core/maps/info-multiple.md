---
name: Get map info (multiple)

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

Gets information about multiple maps via their IDs/UIDs.

---

**Remarks**:

- The two parameters work the same way, but you can only use one of them at a time.
- This endpoint has no intrinsic limit on the number of map IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 200 map IDs or almost 300 map UIDs, depending on how you encode the URI).

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/maps/?mapUidList=k45jQI6Y7XrPfe1T0hZhj4pKzY2,cmJJhEUYqesM6Tqpeds0lQudvOb
```

**Example response**:

```json
[
  {
    "author": "73eba009-a074-4439-916f-d25d7fa7bc1c",
    "authorScore": 102399,
    "bronzeScore": 154000,
    "collectionName": "Stadium",
    "createdWithGamepadEditor": false,
    "createdWithSimpleEditor": false,
    "filename": "Laserhawk_-_Megacity_Race.Map.Gbx",
    "goldScore": 109000,
    "isPlayable": true,
    "mapId": "a74716be-d124-4de1-87c2-834304ccef5b",
    "mapStyle": "",
    "mapType": "TrackMania\\TM_Race",
    "mapUid": "cmJJhEUYqesM6Tqpeds0lQudvOb",
    "name": "$i$a1bLaserhawk $fff- Megacity Race",
    "silverScore": 123000,
    "submitter": "7ad33388-641e-4497-b063-c88e75552645",
    "timestamp": "2023-10-23T17:05:25+00:00",
    "fileUrl": "https://core.trackmania.nadeo.live/storageObjects/6d67fafb-1be8-451a-91ca-661e019a9087",
    "thumbnailUrl": "https://core.trackmania.nadeo.live/storageObjects/70e82469-68b6-454a-a105-2af7c3279a4c.jpg"
  },
  {
    "author": "7cd60a75-609a-4e64-b286-16f329878249",
    "authorScore": 26972,
    "bronzeScore": 41000,
    "collectionName": "Stadium",
    "createdWithGamepadEditor": false,
    "createdWithSimpleEditor": false,
    "filename": "SnowIsBack.Map.Gbx",
    "goldScore": 29000,
    "isPlayable": true,
    "mapId": "5546883f-b1ed-49e0-9397-55fc46f1d00c",
    "mapStyle": "",
    "mapType": "TrackMania\\TM_Race",
    "mapUid": "k45jQI6Y7XrPfe1T0hZhj4pKzY2",
    "name": "SnowIsBack",
    "silverScore": 33000,
    "submitter": "7cd60a75-609a-4e64-b286-16f329878249",
    "timestamp": "2023-11-21T16:50:01+00:00",
    "fileUrl": "https://core.trackmania.nadeo.live/storageObjects/5b244c36-da6d-45f2-bbd3-c97ed4b5efc0",
    "thumbnailUrl": "https://core.trackmania.nadeo.live/storageObjects/647ea926-6959-439e-a6e2-e7a78caa9529.jpg"
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
