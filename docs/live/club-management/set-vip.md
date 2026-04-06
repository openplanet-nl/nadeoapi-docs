---
name: Set VIP club member

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/vip/{accountId}/set

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the user should become VIP
      required: true
    - name: accountId
      type: integer
      description: The account ID of the club member
      required: true
---

Sets a club member as a VIP.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- VIP members will be displayed in the Club VIP leaderboard in-game while playing a map.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/131063/vip/69f31664-4252-48e0-a433-024c49caee8c/set
```

**Example response**:

```json
{
  "creationTimestamp": 1771820094,
  "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "clubId": 131063,
  "moderator": false,
  "vip": true,
  "hasFeatured": false,
  "useTag": false,
  "pin": false,
  "role": "Creator"
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notMember"]
```

If the authenticated account does not have enough permissions in the club to manage VIP members, the response will contain an error (status 403):

```json
["clubMemberRole:error-notAdmin"]
```

If the `accountID` is invalid or does not belong to a member of the club, the response will contain an error (status 404):

```json
["clubMember:error-notFound"]
```
