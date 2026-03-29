---
name: Pin club

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/pin

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club to be pinned
      required: true
---

Pins a club for the current authenticated account.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- If the club is already pinned, using this endpoint will unpin it.
- When a club is pinned, the game will display its assets while editing / playing a map in solo, and the club will be used for the club leaderboards in-game.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/131063/pin
```

**Example response**:

```json
{
  "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "tag": "",
  "tagClubId": 0,
  "pinnedClub": 131063
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```
