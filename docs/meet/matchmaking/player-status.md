---
name: Get your player matchmaking status

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matchmaking/{matchmakingType}/player-status

audience: NadeoLiveServices

parameters:
  path:
    - name: matchmakingType
      type: integer
      description: The ID of the matchmaking type
      required: true
---

Gets the matchmaking status of the authenticated account.

---

**Remarks**:

- This endpoint does not accept requests by dedicated server accounts. See [the Authentication guide](/auth) for more information.
- See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.
- The response field `"currentHeartbeat"` will be an object with the same data received as when sending a [heartbeat](/meet/matchmaking/heartbeat) request.

---

**Example request**:

```plain
https://meet.trackmania.nadeo.club/api/matchmaking/5/player-status
```

**Example response**:

```json
{
  "currentHeartbeat": null,
  "penalty": null,
  "currentDivision": "8afc1512-6acf-4495-92db-f4dc92c36926",
  "currentProgression": 3703,
  "matchmakingStatus": "enabled",
  "inactivity": {
    "inactivityPenaltyEnabled": true,
    "immunityDays": 10,
    "penalty": -20
  },
  "matchGenerationTimer": null
}
```
