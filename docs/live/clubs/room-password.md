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

- This endpoint does not accept requests by dedicated server accounts. See [the Authentication guide](/auth) for more information.

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

In some rare cases the response may contain one of the following errors for unknown reasons (status 404):  
This is consistent for a given room; and rooms with this error still appear as normal in [get club activities](/live/clubs/activities-by-club).

```json
["playerServer:error-notFound"]
```

```json
["room:error-notFound"] 
```
