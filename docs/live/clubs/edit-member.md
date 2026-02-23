---
name: Edit club member

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubID}/member/{accountID}/edit

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the members belongs to
      required: true
    - name: accountID
      type: integer
      description: The account ID of the club member
      required: true
  body:
    - name: role
      type: string
      description: The new role of the member in the club
---

The request body is an object containing the member details:

```json
{
  "role": role
}
```

Edits a member in the club.

---

**Remarks**:

- The `role` parameter supports 3 roles: Member (`"Member"`), Content Creator (`"Content Creator"`), and Admin (`"Admin"`).
- For more information about member roles, including their permissions, read the [Club Organisation page](https://wiki.trackmania.io/en/content-creation/club-organisation#member-management) in the Trackmania wiki.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/member/5b4d42f4-c2de-407d-b367-cbff3fe817bc/edit
```

```json
{
  "role": "Admin"
}
```

**Example response**:

```json
{
  "creationTimestamp": 1771820894,
  "accountId": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
  "clubId": 131063,
  "moderator": false,
  "vip": true,
  "hasFeatured": false,
  "useTag": false,
  "pin": false,
  "role": "Admin"
}
```

If the `accountID` is invalid or does not belong to a member of the club, the response will contain an error:

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

If the authenticated account does not have enough permissions in the club to manage members, the response will contain an error:

```json
[
  "clubMemberRole:error-notAdmin"
]
```

If trying to set a member's role to `"Creator"`, the response will contain an error:

```json
[
  "role:error-creatorForbidden"
]
```

if the `role` parameter is invalid, the response will contain an error:

```json
[
  "role:error-inArray"
]
```
