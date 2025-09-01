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

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/map/favorite/EgUgXeBV8vpEth2hZgSzLhlHRs8/remove
```

**Example response**:

A successful response has no content and a `204` response code.

If you try to remove a map that doesn't exist or a map that isn't among your favorites, you will also get a response with no content and a `204` response code.
