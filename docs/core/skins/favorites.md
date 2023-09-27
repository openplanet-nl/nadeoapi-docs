---
name: Get favorited skins

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/{accountId}/skins/favorites

audience: NadeoServices

parameters:
  path:
    - name: accountId
      type: string
      description: The account ID of the authenticated user
      required: true
---

Gets the favorited/garage skins data for the currently authenticated user.

---

**Remarks**:
- Because this endpoint only works for the currently authenticated user, it cannot be used by a dedicated server account.
- The `timestamp` value for each skin corresponds to when it got added to the user's favorites.
- This endpoint only returns a skin's identifier - if you need to retrieve the actual skin information, you can use [the skin info endpoint](/core/skins/info).

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/accounts/5b4d42f4-c2de-407d-b367-cbff3fe817bc/skins/favorites/
```

**Example response**:
```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "skinId": "148c3dee-baf8-499f-8f63-757f46a482da",
    "timestamp": "2021-05-18T16:48:16+00:00"
  },
  ...
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "skinId": "f056c154-b408-44af-a5e3-8919cc7f3689",
    "timestamp": "2022-02-07T16:11:52+00:00"
  }
]
```

If the `accountId` is invalid, the response will contain an error message (along with status code `400`):

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "ae97862a4d59402deb5f5cdc6a92b643",
  "message": "There was a validation error.",
  "info": {
    "accountId": "Invalid account id."
  }
}
```

If the `accountId` belongs to a user that's not currently authenticated, the response will contain an error message (along with status `403`):

```json
{
  "code": "C-AA-00-05",
  "correlation_id": "6ec3b5614cb3260d39ff279db231ff83",
  "message": "Forbidden."
}
```
