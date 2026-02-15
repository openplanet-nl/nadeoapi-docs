---
name: Get favorite maps

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/map/favorite?offset={offset}&length={length}&sort={sort}&order={order}&mapTypeList={mapTypeList}&playable={playable}&onlyMine={onlyMine}

audience: NadeoLiveServices
parameters:
  query:
    - name: offset
      type: integer
      description: The number of maps to skip
      required: true
    - name: length
      type: integer
      description: The number of maps to retrieve
      required: true
      min: 1
    - name: sort
      type: string
      description: The sorting of the maps
      default: "date"
    - name: order
      type: string
      description: The order of the maps based on the sorting
      default: "desc"
    - name: mapTypeList
      type: string
      description: The map type filter separated by commas
    - name: playable
      type: boolean
      description: Whether the map is validated and playable
    - name: onlyMine
      type: boolean
      description: Whether the map was created by the current authenticated account
---

Retrieves your authenticated account's favorite tracks along with their information.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `sort` parameter can be set to `"date"` (when the map was added to your favorite tracks) or `"name"` (the map name).
- When no `mapTypeList` filter is applied, all available maps are returned regardless of their type.
- See the [glossary](/glossary#map-type) for examples of supported map types.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/map/favorite?offset=0&length=1&sort=date&order=desc&mapTypeList=Trackmania\\TM_Race&playable=true&onlyMine=false
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
