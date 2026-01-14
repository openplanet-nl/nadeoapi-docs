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
- This endpoint has no intrinsic limit on the number of account IDs requested, but it will return a `414` error if the request URI length is 8220 characters or more (corresponding to just over 200 account IDs, depending on how you encode the URI).
- As of 2024-11-18, the `accountIdList` query parameter also supports the array format `accountIdList[]={accountID}`. The examples below show how to request club tags for multiple accounts using this approach.
- Each player can have exactly one club tag - this is the tag that's also displayed in-game next to the player's display name (e.g. on leaderboards). Note that it doesn't always match the currently pinned club for that player (as that is an independent concept).
- This endpoint only returns the club tag string, it does not return a reference to the club itself. Note that club tags are not unique, so the information from this endpoint alone is not enough to determine the referenced club.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/accounts/clubTags/?accountIdList=5b4d42f4-c2de-407d-b367-cbff3fe817bc,45e5e4bc-d237-4e6e-8258-b60e8dc0c76a
```

**Example response**:

```json
[
  {
    "accountId": "45e5e4bc-d237-4e6e-8258-b60e8dc0c76a",
    "clubTag": "$A00X",
    "timestamp": "2024-03-30T05:54:17+00:00"
  },
  {
    "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "clubTag": "$F05TSH",
    "timestamp": "2024-11-21T18:30:18+00:00"
  }
]
```

For multiple accounts, you may also send the `accountID` values as follows:

```plain
GET https://prod.trackmania.core.nadeo.online/accounts/clubTags/?accountIdList[]=5b4d42f4-c2de-407d-b367-cbff3fe817bc&accountIdList[]=45e5e4bc-d237-4e6e-8258-b60e8dc0c76a
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
