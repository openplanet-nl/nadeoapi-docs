---
name: Get player club tags

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/clubTags/?accountIdList[]={accountID}

audience: NadeoServices

parameters:
  query:
    - name: accountID
      type: string
      description: The ID of the account you want to retrieve the club tag for
      required: true
---

Gets player club tags from account IDs.

---

**Remarks**:

- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts). If you encounter `401` errors using a dedicated server account, switch to using a Ubisoft account.
- This endpoint has no intrinsic limit on the number of account IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more.
- To retrieve club tags for more than one ID at a time, you can send an array of values instead of a single value - see the second example below.
- As of 2024-11-18, the `accountIdList` query parameter no longer accepts a comma-separated list of values and requires the array format shown in the examples below.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/accounts/clubTags/?accountIdList[]=5b4d42f4-c2de-407d-b367-cbff3fe817bc
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

For multiple accounts, send the `accountID` values as follows:

```plain
GET https://prod.trackmania.core.nadeo.online/accounts/clubTags/?accountIdList[]=a0f1b480-7b9b-44e7-9ca3-2196fc16cb3a&accountIdList[]=041623e9-57de-4dea-8fd2-6adf967ba558
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
