---
name: Delete club member

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/member/{accountId}/delete

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the player is a member of
      required: true
    - name: accountId
      type: string
      description: The account ID of the member to be deleted
      required: true
---

Deletes a member of a club. 

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- To leave a club, set `accountId` to your account ID.
- When trying to leave a club you are the creator of, the response will still return a `200` response code, but the account will not leave the club.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/383/member/69f31664-4252-48e0-a433-024c49caee8c/delete
```

**Example response**:

```plain
Club member deleted
```

If the club or account does not exist, or the player is not a member of the club, the response will contain an error:

```json
[
  "clubMember:error-notFound"
]
```

If the authenticated account is not an admin in the club and its account ID does not match the `accountId` parameter, the response will contain an error:

```json
[
  "clubMemberRole:error-notAdmin"
]
```
