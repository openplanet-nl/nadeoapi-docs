---
name: Send matchmaking heartbeat

url: https://meet.trackmania.nadeo.club
method: POST
route: /api/matchmaking/{matchmakingType}/heartbeat

audience: NadeoLiveServices

parameters:
  path:
    - name: matchmakingType
      type: integer
      description: The ID of the matchmaking type
      required: true
  body:
    - name: code
      type: string
      description: The party code
      required: true
    - name: playWith
      type: array[string]
      description: The account IDs of the players you wish to queue with (leave empty to queue solo)
      required: true
---

The request body is an object with `code` and `playWith` fields:

```json
{
  "code": "{code}",
  "playWith": [
    "{playWith}"
  ]
}
```

---

Sends a heartbeat to start and persist a matchmaking queue.

---

**Remarks**:

- See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.
- When queueing normally, the game will send a heartbeat every 5 seconds.
- To stop queuing, you must send a [cancel](/meet/matchmaking/cancel) request.
- You must be careful with this endpoint - if you send heartbeats but do not join and complete a match when it becomes available, your account will be penalized!
- The `code` parameter can be (and typically is) left blank. This might have been used for Royal before it was discontinued.
- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The response field `"status"` is typically one of the following: `"canceled"`, `"pending"`, `"queued"`, `"match_ready"`.

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/5/heartbeat
```

```json
{
  "code": "",
  "playWith": [
    "594be80b-62f3-4705-932b-e743e97882cf"
  ]
}
```

**Example response while queueing**:

```json
{
  "banEndDate": null,
  "status": "queued",
  "matchLiveId": null,
  "matchmakingWaitingTime": 60,
  "creationDate": 1756330600
}
```

**Example response when a match is found**:

```json
{
  "banEndDate": null,
  "status": "match_ready",
  "matchLiveId": "LID-MTCH-tnn54mgcalomujp",
  "matchmakingWaitingTime": null,
  "creationDate": null
}
```
