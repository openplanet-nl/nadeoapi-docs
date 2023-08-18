---
name: Get player webIdentities

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /webidentities/?accountIdList={accountIdList}

audience: NadeoServices

parameters:
  query:
    - name: accountIdList
      type: string
      description: A comma-separated list of account IDs
      required: true
---

Gets player webIdentities from account IDs.

---

**Remarks**:
- The `timestamp` field is the creation date of the account - effectively the date when the account started playing Trackmania.
- Due to the `ubiServices` and `uplay` providers being handled separately (potentially for historical reasons), there are typically two objects for each requested account. They will otherwise be identical.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/webidentities/?accountIdList=5b4d42f4-c2de-407d-b367-cbff3fe817bc,7398eeb6-9b4e-44b8-a7a1-a2149955ac70
```

**Example response**:
```json
[
    {
        "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
        "provider": "ubiServices",
        "uid": "a59df3e8-6bff-48a2-98b6-801abf2a298e",
        "timestamp": "2020-07-01T15:05:34+00:00"
    },
    {
        "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
        "provider": "uplay",
        "uid": "a59df3e8-6bff-48a2-98b6-801abf2a298e",
        "timestamp": "2020-07-01T15:05:34+00:00"
    },
    {
        "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
        "provider": "ubiServices",
        "uid": "1ad088a9-4a99-43b7-a0a7-add68e3ac974",
        "timestamp": "2020-06-05T19:32:19+00:00"
    },
    {
        "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
        "provider": "uplay",
        "uid": "1ad088a9-4a99-43b7-a0a7-add68e3ac974",
        "timestamp": "2020-06-05T19:32:19+00:00"
    }
]
```

If an `accountId` is invalid, the response will contain an error message:

```json
{
    "code": "C-AA-00-03",
    "correlation_id": "16749c9cd157abf072db92319bdc51f1",
    "message": "There was a validation error.",
    "info": {
        "accountIdList": "Invalid account id."
    }
}
```
