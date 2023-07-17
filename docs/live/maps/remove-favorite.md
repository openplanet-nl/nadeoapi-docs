---
name: Remove favorite map

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/map/favorite/{mapUid}/remove

audience: NadeoLiveServices
parameters:
  path:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

Removes a map from your authenticated account's favorites.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/map/favorite/EgUgXeBV8vpEth2hZgSzLhlHRs8/remove
```

**Example response**:

```plain
Map favorite deleted
```

Example response if the requested map does not exist:

```json
[
  "map:error-notFound"
]
```

Example response if the requested map is not among your favorites:

```json
[
  "mapFavorite:error-notFound"
]
```
