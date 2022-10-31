---
name: Add favorite map

url: https://api.trackmania.com
method: GET
route: /api/user/maps/favorite/add

audience: n/a

---

The request body is a JSON object containing the map's UID:
```json
{
  "uid": "JlxlB7KbrCfhjAf5ld89ByXR987"
}
```

---

Adds a map to the player's favorite maps.

---

**Remarks**:
- This endpoint requires the `write_favorite` scope.
- This endpoint can not be used with a token obtained from the **Client Credentials** flow, because it has to be associated with a player.
- The access token has to be provided in the `Authorization` header in the format `Bearer <token>`.

---

**Example request**:
```plain
POST https://api.trackmania.com/api/user/maps/favorite/add
```
```json
{
  "uid": "JlxlB7KbrCfhjAf5ld89ByXR987"
}
```

**Example response**:
The response will be empty with a `204` response code.
