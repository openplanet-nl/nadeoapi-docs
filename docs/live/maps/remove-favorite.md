---
name: Remove a map from your favorites

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

Remove a track by its UID from your favorite tracks on Nadeo Services.

Example response:

```plain
Map favorite deleted
```

Example response if a map is unknown:

```json
[
  "map:error-notFound"
]
```

Example response if a map is not on your favorite tracks:

```json
[
  "mapFavorite:error-notFound"
]
```
