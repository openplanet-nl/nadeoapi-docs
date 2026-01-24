---
name: Get player trophy summary

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/{accountId}/trophies/lastYearSummary

audience: NadeoServices

parameters:
  path:
    - name: accountId
      type: string
      description: An account ID
      required: true
---

Gets a summary of a player's earned trophies over the past year.

---

**Remarks**:

- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts). If you encounter `401` errors using a dedicated server account, switch to using a Ubisoft account.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/accounts/594be80b-62f3-4705-932b-e743e97882cf/trophies/lastYearSummary
```

**Example response**:

```json
{
  "accountId": "594be80b-62f3-4705-932b-e743e97882cf",
  "points": 1361289,
  "t1Count": 529,
  "t2Count": 766,
  "t3Count": 1041,
  "t4Count": 239,
  "t5Count": 71,
  "t6Count": 3,
  "t7Count": 0,
  "t8Count": 0,
  "t9Count": 0,
  "timestamp": "2025-08-26T00:40:18+00:00"
}
```

If the `accountId` is a valid UUID but does not correspond to a real account, the response will not have an error, but will contain all 0's:

```json
{
  "accountId": "00000000-1111-2222-3333-444444444444",
  "points": 0,
  "t1Count": 0,
  "t2Count": 0,
  "t3Count": 0,
  "t4Count": 0,
  "t5Count": 0,
  "t6Count": 0,
  "t7Count": 0,
  "t8Count": 0,
  "t9Count": 0,
  "timestamp": "2025-08-26T22:53:43+00:00"
}
```

If the `accountId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "b1beabc9d907eec6d7fd11f8202b8712",
  "message": "There was a validation error.",
  "info": [
    "accountId: \u0022test\u0022 is not a valid UUID."
  ]
}
```
