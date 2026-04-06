---
name: Get club room join link

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/room/{activityId}/join

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the room belongs to
      required: true
    - name: activityId
      type: integer
      description: The activity ID of the room to be requested
      required: true
---

Gets a join link for a club room.

---

**Remarks**:

- If the requested room is inactive, using this endpoint will start it. `joinLink` will be an empty string while the room isn't ready.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/25/room/381929/join
```

**Example response**:

```json
{
  "starting": false,
  "joinLink": "#qjoin=fKw5ovkrSCGub82AdaoxCA"
}
```

If the requested room has been deactivated in the club, the response will contain an error:

```json
[
  "roomServer:error-NoServerAvailable"
]
```

If the club or room does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the requested room is private and the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```
