---
name: Get player zones

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/zones/?accountIdList={accountIdList}

audience: NadeoServices

parameters:
  query:
    - name: accountIdList
      type: string
      description: A comma-separated list of account IDs
      required: true
---

Gets player zones from account IDs.

---

**Remarks**:
- This endpoint may only be accessible to Ubisoft user accounts (as opposed to dedicated server accounts). If you encounter `401` errors using a dedicated server account, try using a Ubisoft account and see if that gives you the data you're looking for.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/accounts/zones/?accountIdList=5b4d42f4-c2de-407d-b367-cbff3fe817bc,7398eeb6-9b4e-44b8-a7a1-a2149955ac70
```

**Example response**:
```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "timestamp": "2022-08-25T14:29:23+00:00",
    "zoneId": "301ff90f-7e13-11e8-8060-e284abfd2bc4"
  },
  {
    "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
    "timestamp": "2020-06-05T19:32:46+00:00",
    "zoneId": "30209bf3-7e13-11e8-8060-e284abfd2bc4"
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
