---
name: Get a club member

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/member/{memberId}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: string
      description: The club's ID
      required: true
    - name: memberId
      type: string
      description: The member's account ID
      required: true
---

Gets a specific player's information in the context of a club using the player's account ID.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/9/member/7398eeb6-9b4e-44b8-a7a1-a2149955ac70
```

**Example response**:
```json
{
  "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
  "clubId": 9,
  "role": "Creator",
  "creationTimestamp": 1591385606,
  "vip": true,
  "moderator": false,
  "hasFeatured": false,
  "pin": false,
  "useTag": false
}
```

If the club does not exist, the player does not exist, or the player is not a member of the club, the response will contain an empty role and the current timestamp:

```json
{
  "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
  "clubId": 1,
  "role": "",
  "creationTimestamp": 1661449122,
  "vip": false,
  "moderator": false,
  "hasFeatured": false,
  "pin": false,
  "useTag": false
}
```
