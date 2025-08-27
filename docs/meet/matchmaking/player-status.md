---
name: Get player matchmaking status

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

Gets the matchmaking status of the currently authenticated user.

---

**Remarks**:

- The `matchmakingType` parameter is typically `5` (Ranked 2v2). For a dynamic way of retrieving those IDs see [the matchmaking summary endpoint](/meet/matchmaking/summary). This parameter may also be a string, i.e. `"ranked-2v2"`.
- Though this endpoint doesn't strictly require a token authenticated through a Ubisoft user account, if a dedicated server account is used, the response fields will be null.

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
