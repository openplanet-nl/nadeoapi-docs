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

- The `matchmakingType` parameter is typically `5` (Ranked 2v2). This parameter may also be a string, i.e. `"ranked-2v2"`. See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.
- If a match has already been found, canceling will not do anything. You must join and complete the match to avoid penalties!
- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/5/cancel
```

**Example response**:

A successful response has no content and a `204` response code.
