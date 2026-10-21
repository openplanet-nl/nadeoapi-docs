---
title: Add favorite map
description: Adds a map to your authenticated account's favorites.
layout: api

menus:
  main:
    identifier: CoreAddFavorite
    parent: Maps

params:
  url: https://prod.trackmania.core.nadeo.online
  method: POST
  route: /maps/favorites

  audience: NadeoServices

  body:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

The request body contains the map to add, identified by its `mapUid`:

```json
{
  "mapUid": mapUid
}
```

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- This endpoint serves the same purpose as the [Live API's Add favorite map endpoint](/live/maps/add-favorite), but the request format is different.

---

**Example request**:

```plain
POST https://prod.trackmania.core.nadeo.online/maps/favorites
```

```json
{
  "mapUid": "KRelvYHRjEQoqnkJ_Th8FLKzTsg"
}
```

**Example response**:

```plain
null
```

Both successful and unsuccessful responses (including requests for maps that don't exist) return a `200` response code.

An invalid `mapUid` results in a `400` response code with an error object in the response body.
