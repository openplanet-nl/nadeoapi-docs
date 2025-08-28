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
- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts). If you encounter `401` errors using a dedicated server account, switch to using a Ubisoft account.
- This endpoint has no intrinsic limit on the number of account IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 200 account IDs, depending on how you encode the URI).
- To translate `zoneId` values to names, reference the response from [the global zones endpoint](/core/meta/zones).
- If you'd prefer a response that already contains zone names as well as the full zone hierarchy for a player, take a look at [the player trophies endpoint](/live/leaderboards/trophies-multiple).

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
