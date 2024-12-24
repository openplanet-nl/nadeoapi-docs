---
name: Get map vote

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /maps/{mapUid}/votes

audience: NadeoServices

parameters:
  path:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true

---

Gets the currently authenticated user's vote for a map.

---

**Remarks**:

- Because this endpoint only works for the currently authenticated user, it cannot be used by a dedicated server account.
- The `vote` field can be set to `-1` for a dislike, or `1` for a like. `0` can be used to unset the vote.
- The `voteDate` field in the response contains the day of the vote (i.e. the last change to the given map's vote), but not an exact timestamp.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/maps/ytKTrmjtk352Ou_7IE3xHWhyj2a/votes
```

**Example response**:

```json
{
  "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
  "mapUid": "ytKTrmjtk352Ou_7IE3xHWhyj2a",
  "vote": 1,
  "voteDate": "2024-12-24T00:00:00+00:00"
}
```

If the `mapUid` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "60e8a3c2c6233f9408e315b31799b56b",
  "message": "There was a validation error.",
  "info": [
    "mapUid: This value is too long. It should have 27 characters or less."
  ]
}
```
