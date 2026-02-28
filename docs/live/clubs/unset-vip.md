---
name: Unset VIP club member

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/vip/{accountId}/unset

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the user should stop being VIP
      required: true
    - name: accountId
      type: integer
      description: The account ID of the club member
      required: true
---

Removes a club member as a VIP.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/131063/vip/69f31664-4252-48e0-a433-024c49caee8c/unset
```

**Example response**:

```json
{
  "creationTimestamp": 1771820094,
  "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "clubId": 131063,
  "moderator": false,
  "vip": false,
  "hasFeatured": false,
  "useTag": false,
  "pin": false,
  "role": "Creator"
}
```

If the `accountId` is invalid or does not belong to a member of the club, the response will contain an error:

```json
[
  "clubMember:error-notFound"
]
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to manage VIP members, the response will contain an error:

```json
[
  "clubMemberRole:error-notAdmin"
]
```
