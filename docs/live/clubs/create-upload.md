---
name: Create club upload activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubID}/bucket/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club where the upload activity should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new upload activity
      max: 20 characters
      required: true
    - name: type
      type: string
      description: The type of upload activity to be created (see remarks below)
      required: true
    - name: folderID
      type: integer
      description: The ID of the folder where the upload activity should be created
---

The request body is an object containing the upload activity details:

```json
{
  "name": name,
  "type": type,
  "folderId": folderID
}
```

Creates an upload activity in a club for maps, items, or skins.

---

**Remarks**:

- The `type` parameter supports 3 types: Track uploads (`"map-upload"`), Skin uploads (`"skin-upload"`), and Item collections (`"item-upload"`).

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/bucket/create
```

**Example response**:

```json
{
  "name": "My maps",
  "type": "map-upload",
  "folderId": 0
}
```

```json
{
  "creationTimestamp": 1772159451,
  "clubName": "Fort's test club",
  "id": 1008748,
  "name": "My maps",
  "clubId": 103034,
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "type": "map-upload",
  "mediaUrlPngLarge": "",
  "mediaTheme": "",
  "popularityLevel": 0,
  "bucketItemList": [],
  "popularityValue": 0,
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "bucketItemCount": 0,
  "mediaUrlDds": "",
  "mediaUrlPngMedium": ""
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to create upload activities, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```

If the `type` parameter is invalid, the response will contain an error:

```json
[
  "type:error-inArray"
]
```
