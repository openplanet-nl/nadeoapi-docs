---
name: Add favorite map

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

Adds a map to your authenticated account's favorites.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/map/favorite/EgUgXeBV8vpEth2hZgSzLhlHRs8/add
```

**Example response**:

```plain
Map favorite created
```

Example response if the requested map does not exist:

```json
["map:error-notFound"]
```
