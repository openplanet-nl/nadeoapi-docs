---
name: Get map info (multiple) by UIDs

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /maps/by-uid/?mapUidList={mapUidList}

audience: NadeoServices

parameters:
  query:
    - name: mapUidList
      type: string
      description: A comma-separated list of map UIDs
      required: true
---

<div class="notification is-info">

This endpoint is not the same as the [deprecated map info (multiple) endpoint](/core/deprecated/info-multiple) - note the changed endpoint route.

</div>

Gets information about multiple maps via their UIDs.

---

**Remarks**:

- This endpoint only accepts `mapUid`s - the [map info (multiple) by ID endpoint](/core/maps/info-multiple-uid) offers the same functionality for `mapId`s.
- This endpoint has no intrinsic limit on the number of map UIDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to almost 300 map UIDs, depending on how you encode the URI).
- This endpoint behaves the same as the [deprecated map info (multiple) endpoint](/core/deprecated/info-multiple).

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/maps/by-uid/?mapUidList=k45jQI6Y7XrPfe1T0hZhj4pKzY2,cmJJhEUYqesM6Tqpeds0lQudvOb
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
    "fileUrl": "https://core.trackmania.nadeo.live/maps/a74716be-d124-4de1-87c2-834304ccef5b/file",
    "filename": "Laserhawk - Megacity Race.Map.Gbx",
    "goldScore": 109000,
    "hasClones": false,
    "isPlayable": true,
    "mapId": "a74716be-d124-4de1-87c2-834304ccef5b",
    "mapStyle": "",
    "mapType": "TrackMania\\TM_Race",
    "mapUid": "cmJJhEUYqesM6Tqpeds0lQudvOb",
    "name": "$i$a1bLaserhawk $fff- Megacity Race",
    "silverScore": 123000,
    "submitter": "7ad33388-641e-4497-b063-c88e75552645",
    "thumbnailUrl": "https://core.trackmania.nadeo.live/maps/a74716be-d124-4de1-87c2-834304ccef5b/thumbnail.jpg",
    "timestamp": "2023-10-23T17:05:25+00:00"
  },
  {
    "author": "7cd60a75-609a-4e64-b286-16f329878249",
    "authorScore": 26972,
    "bronzeScore": 41000,
    "collectionName": "Stadium",
    "createdWithGamepadEditor": false,
    "createdWithSimpleEditor": false,
    "fileUrl": "https://core.trackmania.nadeo.live/maps/5546883f-b1ed-49e0-9397-55fc46f1d00c/file",
    "filename": "SnowIsBack.Map.Gbx",
    "goldScore": 29000,
    "hasClones": false,
    "isPlayable": true,
    "mapId": "5546883f-b1ed-49e0-9397-55fc46f1d00c",
    "mapStyle": "",
    "mapType": "TrackMania\\TM_Race",
    "mapUid": "k45jQI6Y7XrPfe1T0hZhj4pKzY2",
    "name": "SnowIsBack",
    "silverScore": 33000,
    "submitter": "7cd60a75-609a-4e64-b286-16f329878249",
    "thumbnailUrl": "https://core.trackmania.nadeo.live/maps/5546883f-b1ed-49e0-9397-55fc46f1d00c/thumbnail.jpg",
    "timestamp": "2023-11-21T16:50:01+00:00"
  }
]
```

If a `mapUid` is invalid, that map will not be returned in the response.
