---
name: Join a club

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/member/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the player will join
      required: true
---

Join a club as a new member.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- If the club is private, but accepts requests, the `role` field in the response body will be `"Apply"`.
- If the current authenticated account has already joined the club, the endpoint will return the member information.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/member/create
```

**Example response**:

```json
{
  "creationTimestamp": 1771819382,
  "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "clubId": 103034,
  "moderator": false,
  "vip": false,
  "hasFeatured": false,
  "useTag": false,
  "pin": false,
  "role": "Member"
}
```

If the club does not exist, the response will contain an error:

```json
[
  "club:error-notFound"
]
```

If the club is private, the response will contain an error:

```json
[
  "clubState:error-wrongState"
]
```
