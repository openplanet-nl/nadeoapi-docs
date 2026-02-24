---
name: Use club tag

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubID}/tag

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club with the tag to be used
      required: true
---

Use the tag of a club for display.

---

**Remarks**:

- If the authenticated account is already using the club's tag, using this endpoint will unpin it.
- When using a club tag, it will be displayed in-game next to the player's display name.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/131063/tag
```

**Example response**:

```json
{
  "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "tag": "DOCS",
  "tagClubId": 131063,
  "pinnedClub": 0
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```
