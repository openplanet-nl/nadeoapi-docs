---
name: Add items to club upload activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/bucket/{bucketId}/add

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the upload activity belongs to
      required: true
    - name: bucketId
      type: integer
      description: The ID of the upload activity where the items should be added
      required: true
  body:
    - name: itemIdList
      type: string[]
      description: A list of items to add to the upload activity, identified by their ID (see remarks below)
      required: true
---

The request body is an object containing the items to be added:

```json
{
  "itemIdList": itemIdList
}
```

Adds a list of maps, items, or skins to an upload activity in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The IDs needed for the `itemIdList` parameter depend on the type of upload activity requested. For maps uploads, it requires their `mapUid`, while skins and items require their `skinID` and `itemID`, respectively.
- When passing an invalid ID, including IDs for other upload types, the items will be added, but an error might be displayed in-game when accessing the activity.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/bucket/1009342/add
```

```json
{
  "itemIdList": [
    "KRelvYHRjEQoqnkJ_Th8FLKzTsg",
    "3LRPuWYIe85IJBbUcmIHkaSBuHh"
  ]
}
```

**Example response**:

```json
Items added.
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the upload activity does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the authenticated account does not have enough permissions in the club to edit upload activities, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
