---
name: Get player club tags

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/clubTags/?accountIdList={accountIdList}

audience: NadeoServices

parameters:
  query:
    - name: accountIdList
      type: string
      description: A comma-separated list of account IDs
      required: true
---

Gets player club tags from account IDs.

---

**Remarks**:
- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts). If you encounter `401` errors using a dedicated server account, switch to using a Ubisoft account.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/accounts/clubTags/?accountIdList=5b4d42f4-c2de-407d-b367-cbff3fe817bc
```

**Example response**:
```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "clubTag": "$F05TSH",
    "timestamp": "2022-04-18T10:35:43+00:00"
  }
]
```

If an `accountId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "8646a82e689541aff09f34244d879d88",
  "message": "There was a validation error.",
  "info": {
    "accountIdList": "Invalid account id."
  }
}
```
