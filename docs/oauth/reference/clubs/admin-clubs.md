---
name: Get player's admin clubs

url: https://api.trackmania.com
method: GET
route: /api/user/clubs/admin
---

Retrieves the clubs the authorized player is an admin in.

---

**Remarks**:
- This endpoint requires the `clubs` scope.
- This endpoint can not be used with a token obtained from the **Client Credentials** flow because it has to be associated with a player.
- The access token has to be provided in the `Authorization` header in the format `Bearer <token>`.

---

**Example request**:
```plain
GET https://api.trackmania.com/api/user/clubs/admin
```

**Example response**:
```json
{
  "clubs": [
    {
      "id": 12730,
      "name": "TM SCENERY HUB"
    }
  ]
}
```
