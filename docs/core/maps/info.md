---
name: Get map info

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /maps/{mapId}

audience: NadeoServices

parameters:
  path:
    - name: mapId
      type: string
      description: The ID of the map
      required: true
---

Gets information about a map via its ID.

---

**Remarks**:

- This endpoint only accepts `mapId`s - to get map information for a `mapUid` (or to translate `mapUid`s to `mapId`s), you can use the [map info (multiple) UID endpoint](/core/maps/info-multiple-uid).

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/maps/d2b8a048-209d-4cfa-b5a4-bc3e3cab3566
```

**Example response**:

```json
{
  "author": "d2372a08-a8a1-46cb-97fb-23a161d85ad0",
  "authorScore": 29089,
  "bronzeScore": 44000,
  "collectionName": "Stadium",
  "createdWithGamepadEditor": false,
  "createdWithSimpleEditor": false,
  "filename": "Spring 2024 - 01.Map.Gbx",
  "goldScore": 31000,
  "isPlayable": true,
  "mapId": "d2b8a048-209d-4cfa-b5a4-bc3e3cab3566",
  "mapStyle": "",
  "mapType": "TrackMania\\TM_Race",
  "mapUid": "yQ4ktCXu3SAxyRx9gar8hj7kVBb",
  "name": "Spring 2024 - 01",
  "silverScore": 35000,
  "submitter": "d2372a08-a8a1-46cb-97fb-23a161d85ad0",
  "timestamp": "2024-03-27T10:40:03+00:00",
  "fileUrl": "https://core.trackmania.nadeo.live/storageObjects/69ff7efb-010e-43db-8233-11d119aa0499",
  "thumbnailUrl": "https://core.trackmania.nadeo.live/storageObjects/ea9128eb-dabb-4b08-b9d1-37adb25b41b2.jpg"
}
```

If the `mapId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "e88e55743a177f17d32d963070057078",
  "message": "There was a validation error.",
  "info": ["mapId: Invalid uuid."]
}
```
