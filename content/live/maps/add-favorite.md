---
title: Add favorite map
description: Adds a map to your authenticated account's favorites.
layout: api

menus:
  main:
    identifier: LiveAddFavorite
    parent: LiveMaps

params:
  url: https://live-services.trackmania.nadeo.live
  method: POST
  route: /api/token/map/favorite/{mapUid}/add

  audience: NadeoLiveServices

  path:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/map/favorite/EgUgXeBV8vpEth2hZgSzLhlHRs8/add
```

**Example response**:

Both successful and unsuccessful responses have no content and return a `204` response code.

If the map does not exist, the response will contain an error (status 500):

```json
{
  "error":"InternalServerError",
  "message":"Nadeo Live Services Internal Log",
  "traceId":"Root=1-69d40bd6-34cab79440814f711e17f38a"
}
```