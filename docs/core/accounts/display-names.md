---
name: Get player display names

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/displayNames/?accountIdList={accountIdList}

audience: NadeoServices

parameters:
  query:
    - name: accountIdList
      type: string
      description: A comma-separated list of account IDs
      required: true
      max: 50 account IDs
---

<div class="notification is-danger">

This endpoint is deprecated and will be removed soon. Use the [OAuth API endpoint](/oauth/reference/accounts/id-to-name) instead.

</div>

Gets player display names from account IDs.

---

**Remarks**:
- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts). If you encounter `401` errors using a dedicated server account, switch to using a Ubisoft account.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/accounts/displayNames/?accountIdList=5b4d42f4-c2de-407d-b367-cbff3fe817bc,7398eeb6-9b4e-44b8-a7a1-a2149955ac70
```

**Example response**:
```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "displayName": "tooInfinite",
    "timestamp": "2020-07-01T15:05:34+00:00"
  },
  {
    "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
    "displayName": "Miss-tm",
    "timestamp": "2020-06-05T19:32:19+00:00"
  }
]
```

If an `accountId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
    "correlation_id": "4874aee1aee172e0afd7f605100f170a",
    "message": "There was a validation error.",
    "info": {
        "accountIdList": "Invalid account id."
    }
}
```
