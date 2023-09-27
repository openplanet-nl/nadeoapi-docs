---
name: Get equipped skins

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/skins?accountIdList={accountIdList}

audience: NadeoServices

parameters:
  query:
    - name: accountIdList
      type: string
      description: Comma-separated list of account IDs
      required: true
---

Gets the equipped skins data for the requested users.

---

**Remarks**:
- This endpoint only returns a skin's identifier - if you need to retrieve the actual skin information, you can use [the skin info endpoint](/core/skins/info).

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/accounts/skins/?accountIdList=5b4d42f4-c2de-407d-b367-cbff3fe817bc,da4642f9-6acf-43fe-88b6-b120ff1308ba
```

**Example response**:
```json
[
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "skinId": "dca3a74a-acf5-4780-8842-15ba80c3b673",
    "skinType": "Models/CarSport",
    "timestamp": "2023-06-01T15:18:02+00:00"
  },
  {
    "accountId": "da4642f9-6acf-43fe-88b6-b120ff1308ba",
    "skinId": "28ea4f72-7a5b-42b2-a082-cc6c59616918",
    "skinType": "Models/CarSport",
    "timestamp": "2023-05-25T22:16:09+00:00"
  }
]
```

If an `accountId` is invalid, the response will contain an error message (along with status code `400`):

```json
{
    "code": "C-AA-00-03",
    "correlation_id": "2b43d7ab9ac81778cdae282cd5644fe4",
    "message": "There was a validation error.",
    "info": {
        "accountIdList": "Invalid account id."
    }
}
```

If an `accountId` belongs to a user without an equipped skin, that user will be omitted from the results.
