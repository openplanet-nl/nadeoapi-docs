---
name: Get account ID

url: https://api.trackmania.com
method: GET
route: /api/display-names/account-ids?displayName[0]={accountName}

parameters:
  query:
    - name: accountName
      type: string
      description: The name of the account you want to retrieve the ID for
      required: true
---

Retrieves the `accountId` for a given account name.

---

**Remarks**:
- This endpoint does not require any authentication through OAuth.
- To convert more than one name at a time, you can send an array of values instead of a single value - see the second example below.

---

**Example request**:
```plain
GET https://api.trackmania.com/api/display-names/account-ids?displayName[]=tooInfinite
```

**Example response**:
```json
{
  "tooInfinite": "5b4d42f4-c2de-407d-b367-cbff3fe817bc"
}
```

To retrieve more than one ID at once, send the `accountName` values as follows:
```plain
GET https://api.trackmania.com/api/display-names/account-ids?displayName[]=tooInfinite&displayName[]=Nsgr
```
