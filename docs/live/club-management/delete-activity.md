---
name: Delete club activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/activity/{activityId}/delete

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the activity belongs to
      required: true
    - name: activityId
      type: integer
      description: The activity ID of the activity to delete
      required: true
---

Deletes an activity from a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- When deleting a folder with other activities inside it, they will be moved outside the folder.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/activity/1003588/delete
```

**Example response**:

```plain
Activity deleted
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notMember"]
```

If the activity does not exist, the response will contain an error (status 404):

```json
["activity:error-notFound"]
```

If the player does not have enough permissions in the club to delete activities, the response will contain an error (status 403):

```json
["clubMemberRole:error-notAdmin"]
```
