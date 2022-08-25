---
name: Get a club member by name

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/member/{memberName}/from-login

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: string
      description: The club's ID
      required: true
    - name: memberName
      type: string
      description: The member's display name
      required: true
---

Gets a specific player's information in the context of a club using the player's name.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/9/member/tooInfinite/from-login
```

**Example response**:
```json
{
  "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
  "clubId": 9,
  "role": "Member",
  "creationTimestamp": 1614879432,
  "vip": false,
  "moderator": false,
  "hasFeatured": false,
  "pin": false,
  "useTag": false
}
```

If the club does not exist or the player is not a member of the club, the response will contain an empty role and the current timestamp:

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

If the player name can't be resolved to an account, the response will contain an error:

```json
[
  "player:error-notFound"
]
```
