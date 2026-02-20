---
name: Remove favorite map

url: https://prod.trackmania.core.nadeo.online
method: DELETE
route: /maps/favorites

audience: NadeoServices

parameters:
  body:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

The request body contains the map to remove, identified by its `mapUid`:

```json
{
  "mapUid": mapUid
}
```

Removes a map from your authenticated account's favorites.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- This endpoint serves the same purpose as the [Live API's Remove favorite map endpoint](/live/maps/remove-favorite), but the request format is different.

---

**Example request**:

```plain
DELETE https://prod.trackmania.core.nadeo.online/maps/favorites
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

Both successful and unsuccessful responses (including requests for maps that are not part of your favorites or don't exist) return a `200` response code.

An invalid `mapUid` results in a `400` response code with an error object in the response body.
