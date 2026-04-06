---
name: Get club room password

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/room/{activityId}/get-password

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

Gets the password of a club room.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

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

If the room does not exist, it's deactivated in the club, or it's not password protected, the response will contain an error (status 404):

```json
["activity:error-notFound"]
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notMember"]
```

If the authenticated account does not have enough permissions in the club to get the password, the response will contain an error (status 403):

```json
["clubMemberRole:error-notContentCreator"]
```

Sometimes a room is consistently not found (despite the activity existing) for unknown reasons, and the response will contain an error (status 404):

```json
["playerServer:error-notFound"]
```

or for some rooms the error will instead be

```json
["room:error-notFound"] 
```
