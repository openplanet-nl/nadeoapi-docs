---
name: Add a map to your favorites

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/map/favorite/{mapUid}/add

audience: NadeoLiveServices

parameters:
  path:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

Adds a track by its UID to your favorite tracks on Nadeo Services.

Example response:

```plain
Map favorite created
```

Example response if a map is unknown:

```json
[
  "map:error-notFound"
]
```
