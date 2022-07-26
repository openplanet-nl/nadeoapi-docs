---
name: Get your favorite maps

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/map/favorite?offset={offset}&limit={limit}&sort={sort}&order={order}&mapType={mapType}&playable={playable}

audience: NadeoLiveServices
parameters:
  query:
    - name: offset
      type: integer
      description: The offset to start from
      required: false
      default: 0
    - name: limit
      type: integer
      description: The maximum number of tracks to return
      required: false
      minimum: 1
      maximum: 100
    - name: sort
      type: string
      description: The sort order of the tracks
      required: false
      default: "date"
    - name: order
      type: string
      description: The order of the tracks
      required: false
      default: "desc"
    - name: mapType
      type: string
      description: The map type filter
      required: false
    - name: playable
      type: integer
      description: Whether the map is validated and playable
      required: false
---

Retrives your favorite tracks on Nadeo Services and get its map infos.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/map/favorite?offset=0&limit=1&sort=date&order=desc&mapType=Trackmania\\TM_Race&playable=1
```

**Example response**:
```json
{
  "mapList": [
    {
      "uid": "QleO8OiNAkIXrZs6r0YLSrLBjEi",
      "mapId": "606e4e16-f1d6-467c-9859-f1837a452166",
      "name": "MIDNIGHT METROPOLIS",
      "author": "144fce06-9b90-4af9-a5b0-9148bcc0566f",
      "submitter": "144fce06-9b90-4af9-a5b0-9148bcc0566f",
      "authorTime": 55910,
      "goldTime": 60000,
      "silverTime": 68000,
      "bronzeTime": 84000,
      "nbLaps": 0,
      "valid": false,
      "downloadUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/9c20aff3-2046-4d7c-aa9b-52617d8d99e2",
      "thumbnailUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/4889bf39-a4f3-40b2-a582-9fa926e41930.jpg",
      "uploadTimestamp": 1631578171,
      "updateTimestamp": 1658421115,
      "fileSize": null,
      "public": false,
      "favorite": false,
      "playable": true,
      "mapStyle": "TrackMania\\TM_Race",
      "mapType": "TrackMania\\TM_Race",
      "collectionName": "Stadium"
    }
  ],
  "itemCount": 1
}
```
