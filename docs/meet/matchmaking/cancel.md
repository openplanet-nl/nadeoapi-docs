---
name: Cancel matchmaking queue

url: https://meet.trackmania.nadeo.club
method: POST
route: /api/matchmaking/{matchmakingType}/cancel

audience: NadeoLiveServices

parameters:
  path:
    - name: matchmakingType
      type: integer
      description: The ID of the matchmaking type
      required: true
---

Cancels the active matchmaking queue.

---

**Remarks**:

- This endpoint does not accept requests by dedicated server accounts. See [the Authentication guide](/auth) for more information.
- See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.
- If a match has already been found, canceling will not do anything. You must join and complete the match to avoid penalties!

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/5/cancel
```

**Example response**:

A successful response has no content and a `204` response code.
