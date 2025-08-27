---
name: Send heartbeat

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
      type: string
      description: The account ID(s) of the player(s) you wish to queue with (leave blank to queue solo)
      required: true
---

The request body is an object with `code` and `playWith` fields:

```json
{
  "code": "{code}",
  "playWith": "{playWith}"
}
```

---

Sends a heartbeat to start and persist a matchmaking queue.

---

**Remarks**:

- The `matchmakingType` parameter is typically `5` (Ranked 2v2). For a dynamic way of retrieving those IDs see [the matchmaking summary endpoint](/meet/matchmaking/summary). This parameter may also be a string, i.e. `"ranked-2v2"`.
- When queueing normally, the game will send a heartbeat every 5 seconds.
- To stop queuing, you must send a [cancel](/meet/matchmaking/cancel) request.
- You must be careful with this endpoint - if you send heartbeats but do not join and complete a match when it becomes available, your account will be penalized!
- The `code` parameter can be (and typically is) left blank. This might have been used for Royal before it was discontinued.

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/5/heartbeat
```

```json
{
  "code": "",
  "playWith": "594be80b-62f3-4705-932b-e743e97882cf"
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

The response field `"status"` is typically one of the following: `"canceled"`, `"pending"`, `"queued"`, `"match_ready"`.
