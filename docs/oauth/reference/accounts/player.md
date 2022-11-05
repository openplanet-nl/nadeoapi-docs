---
name: Get authorized player

url: https://api.trackmania.com
method: GET
route: /api/user
---

Retrieves the currently authorized player account

---

**Remarks**:
- This endpoint can be used as an additional authentication step after the initial authorization flow.
- This endpoint can not be used with a token obtained from the **Client Credentials** flow, because it has to be associated with a player.
- The access token has to be provided in the `Authorization` header in the format `Bearer <token>`.

---

**Example request**:
```plain
GET https://api.trackmania.com/api/user
```

**Example response**:
```json
{
  "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
  "displayName": "tooInfinite"
}
```
