---
name: Delete club

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/delete

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club to delete
      required: true
---

Deletes a club the player has created.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- Deleting a club will also delete all its content, which will not be able to be recovered afterwards.
- Only the club creator can delete a club.
- Deleting a club will reset your tag and pinned club, regardless of the club deleted.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/131063/delete
```

**Example response**:

```plain
Club deleted.
```

If the club does not exist or the player is not a member of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notMember"]
```

If the player is not the creator of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notCreator"]
```
