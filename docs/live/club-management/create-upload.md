---
name: Create club upload activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/bucket/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
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
    - name: folderId
      type: integer
      description: The ID of the folder where the upload activity should be created
---

The request body is an object containing the upload activity details:

```json
{
  "name": name,
  "type": type,
  "folderId": folderId
}
```

Creates an upload activity in a club for maps, items, or skins.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- See the [glossary](/glossary#club-upload-activity-types) for a list of available upload types.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference). This only applies for custom media files, and not for preset themes.
- See the [glossary](/glossary#club-folders) for more information about folders.

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
