---
name: Remove items from club upload activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubID}/bucket/{bucketID}/remove

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the upload activity belongs to
      required: true
    - name: bucketID
      type: integer
      description: The ID of the upload activity where the items should be removed from
      required: true
  body:
    - name: itemIdList
      type: string[]
      description: A list of items to remove from the upload activity, identified by their ID (see remarks below)
      required: true
---

The request body is an object containing the items to be removed:

```json
{
  "itemIdList": itemIdList
}
```

Removes a list of maps, items, or skins from an upload activity in a club.

---

**Remarks**:

- The IDs needed for the `itemIdList` parameter depend on the type of upload activity requested. For maps uploads, it requires their `mapUid`, while skins and items require their `skinID` and `itemID`, respectively.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/bucket/1009342/remove
```

```json
{
  "itemIdList": [
    "nHC4rwnDO4gGNsFdfzH_lqglXK9",
    "3klKca5nVUdW6TPuSzqv4xAjuse"
  ]
}
```

**Example response**:

```json
Items removed.
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
