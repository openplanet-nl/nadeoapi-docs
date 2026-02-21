---
name: Get club room password

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubID}/room/{roomID}/get-password

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the room belongs to
      required: true
    - name: roomID
      type: integer
      description: The ID of the room to be requested
      required: true
---

Gets the password of a club room.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/150/room/17541/get-password
```

**Example response**:

```json
{
  "password": "4VJW6U"
}
```

If the room does not exist, it's deactivated in the club, or it's not password protected, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to get the password, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
