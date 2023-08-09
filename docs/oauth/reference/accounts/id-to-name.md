---
name: Get account name

url: https://api.trackmania.com
method: GET
route: /api/display-names?accountId[]={accountId}

parameters:
  query:
    - name: accountId
      type: string
      description: The ID of the account you want to retrieve the name for
      required: true
      max: 50 account IDs
---

Retrieves the account name for a given `accountId`.

---

**Remarks**:
- To convert more than one ID at a time, you can send an array of values instead of a single value - see the second example below.

---

**Example request**:
```plain
GET https://api.trackmania.com/api/display-names?accountId[]=5b4d42f4-c2de-407d-b367-cbff3fe817bc
```

**Example response**:
```json
{
  "5b4d42f4-c2de-407d-b367-cbff3fe817bc": "tooInfinite"
}
```

To retrieve more than one name at once, send the `accountId` values as follows:
```plain
GET https://api.trackmania.com/api/display-names?accountId[]=5b4d42f4-c2de-407d-b367-cbff3fe817bc&accountId[]=4c803b5a-a344-4d5c-a358-d8f7455d6c85
```
