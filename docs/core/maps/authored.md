---
name: Get authored maps

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /maps/by-author

audience: NadeoServices
---

Gets all maps authored/created by the currently authenticated user.

---

**Remarks**:

- Because this endpoint only works for the currently authenticated user, it cannot be used by a dedicated server account.
- Authored maps are defined as maps that were created/last saved by the current user - who initially uploaded/submitted the maps to Nadeo's servers is irrelevant for this endpoint. To get a list of maps uploaded by the current user, use [the submitted maps endpoint](/core/maps/submitted).

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/maps/by-author
```

**Example response**:

```json
{
  "mapList": [
    {
      "author": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
      "authorScore": 22410,
      "bronzeScore": 34000,
      "collectionName": "Stadium",
      "createdWithGamepadEditor": null,
      "createdWithSimpleEditor": null,
      "filename": "Rocky Fields.Map.Gbx",
      "goldScore": 24000,
      "hasClones": false,
      "isPlayable": true,
      "mapId": "6a2643a6-eb85-4bbb-82d9-70e3bea9347b",
      "mapStyle": "",
      "mapType": "TrackMania\\TM_Race",
      "mapUid": "AqzKeKIDr1VcY1esMt0fFtOgZXi",
      "name": "Rocky Fields",
      "silverScore": 27000,
      "submitter": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
      "timestamp": "2021-09-14T00:21:41+00:00",
      "fileUrl": "https://core.trackmania.nadeo.live/maps/6a2643a6-eb85-4bbb-82d9-70e3bea9347b/file",
      "thumbnailUrl": "https://core.trackmania.nadeo.live/maps/6a2643a6-eb85-4bbb-82d9-70e3bea9347b/thumbnail.jpg"
    },
    ...
    {
      "author": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
      "authorScore": 27842,
      "bronzeScore": 42000,
      "collectionName": "Stadium",
      "createdWithGamepadEditor": null,
      "createdWithSimpleEditor": null,
      "filename": "Desert Hills.Map.Gbx",
      "goldScore": 30000,
      "hasClones": false,
      "isPlayable": true,
      "mapId": "0fbe8e92-b590-4e43-8372-43dbff65d3a7",
      "mapStyle": "",
      "mapType": "TrackMania\\TM_Race",
      "mapUid": "XKU9t4JixdOdp00Fyq2Bi5TFrB1",
      "name": "Desert Hills",
      "silverScore": 34000,
      "submitter": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
      "timestamp": "2021-09-13T22:32:46+00:00",
      "fileUrl": "https://core.trackmania.nadeo.live/maps/0fbe8e92-b590-4e43-8372-43dbff65d3a7/file",
      "thumbnailUrl": "https://core.trackmania.nadeo.live/maps/0fbe8e92-b590-4e43-8372-43dbff65d3a7/thumbnail.jpg"
    }
  ],
  "count": 13
}
```
