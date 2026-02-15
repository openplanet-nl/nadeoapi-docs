---
name: Get favorite maps

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /maps/favorites?offset={offset}&length={length}&sort={sort}&order={order}&mapTypeList={mapTypeList}&playable={playable}&onlyMine={onlyMine}

audience: NadeoServices

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

Retrieves your authenticated account's favorite tracks.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `sort` parameter can be set to `"date"` (when the map was added to your favorite tracks) or `"name"` (the map name).
- When no `mapTypeList` filter is applied, all available maps are returned regardless of their type.
- See the [glossary](/glossary#map-type) for examples of supported map types.
- The `timestamp` field is when the map was added to your favorite tracks.
- This endpoint behaves similarly to the [Live API's Get favorite map endpoint](/live/maps/favorites), but the response data model is different, with the Live endpoint also including additional map information.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/maps/favorites?offset=0&length=1&sort=date&order=desc&mapTypeList=Trackmania\\TM_Race&playable=true&onlyMine=false
```

**Example response**:

```json
{
  "mapFavoriteList": [
    {
      "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
      "mapUid": "KRelvYHRjEQoqnkJ_Th8FLKzTsg",
      "timestamp": "2026-02-13T20:58:41+00:00"
    }
  ],
  "count": 11
}
```
