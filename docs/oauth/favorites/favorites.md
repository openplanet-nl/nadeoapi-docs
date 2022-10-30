---
name: Get favorite maps

url: https://api.trackmania.com
method: GET
route: /api/user/maps/favorite?length={length}&offset={offset}

parameters:
  path:
    - name: length
      type: integer
      description: The number of maps to retrieve (10 by default, 100 is the maximum)
      required: false
    - name: offset
      type: integer
      description: The number of maps to skip
      required: false

audience: n/a

---

Retrieves the player's favorite maps.

---

**Remarks**:
- This endpoint requires the `read_favorite` scope.
- The access token has to be provided in the `Authorization` header in the format `Bearer <token>`.

---

**Example request**:
```plain
GET https://api.trackmania.com/api/user/maps/favorite?length=1&offset=3
```

**Example response**:
```json
{
  "list": [
    {
      "uid": "JlxlB7KbrCfhjAf5ld89ByXR987",
      "name": "Winter 2022 - 01",
      "author": "d2372a08-a8a1-46cb-97fb-23a161d85ad0",
      "thumbnailUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/3ddb465d-0357-41c0-9946-394b96836577.jpg"
    }
  ]
}
```
