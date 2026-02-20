---
name: Remove favorite map

url: https://api.trackmania.com
method: POST
route: /api/user/maps/favorite/remove
parameters:
  body:
    - name: uid
      type: string
      description: The map's UID
      required: true

---

The request body is a JSON object containing the map's UID:

```json
{
  "uid": uid
}
```

---

Removes a map from the player's favorite maps.

---

**Remarks**:

- This endpoint requires the `write_favorite` scope.
- This endpoint can not be used with a token obtained from the **Client Credentials** flow because it has to be associated with a player.
- The access token has to be provided in the `Authorization` header in the format `Bearer <token>`.

---

**Example request**:

```plain
POST https://api.trackmania.com/api/user/maps/favorite/remove
```

```json
{
  "uid": "JlxlB7KbrCfhjAf5ld89ByXR987"
}
```

**Example response**:

A successful response has no content and a `204` response code.
