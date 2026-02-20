---
name: Set map vote

url: https://prod.trackmania.core.nadeo.online
method: POST
route: /maps/{mapUid}/votes

audience: NadeoServices

parameters:
  path:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
  body:
    - name: vote
      type: integer
      description: The vote value (see remarks for details)
      required: true

---

The request body contains the vote value:

```json
{
  "vote": vote
}
```

---

Sets a like/dislike vote for a map as the currently authenticated user.

---

**Remarks**:

- Because this endpoint only works for the currently authenticated user, it cannot be used by a dedicated server account.
- The `vote` field can be set to `-1` for a dislike, or `1` for a like. `0` can be used to unset the vote.

---

**Example request**:

```plain
POST https://prod.trackmania.core.nadeo.online/maps/ytKTrmjtk352Ou_7IE3xHWhyj2a/votes
```

```json
{
  "vote": 1
}
```

**Example response**:

```plain
null
```

If the `mapUid` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "127bd2d9070bad276a1422d9268c2d10",
  "message": "There was a validation error.",
  "info": [
    "mapUid: This value is too long. It should have 27 characters or less."
  ]
}
```
