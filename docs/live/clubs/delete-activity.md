---
name: Delete club activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubID}/activity/{activityID}/delete

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the activity belongs to
      required: true
    - name: activityID
      type: integer
      description: The ID of the activity to delete
      required: true
---

Deletes an activity from a club.

---

**Remarks**:

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

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the activity does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the player does not have enough permissions in the club to delete activities, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
