---
name: Create club folder

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubID}/folder/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club where the folder should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new folder
      required: true
    - name: folderID
      type: integer
      description: The ID of the parent folder
---

The request body is an object containing the name of the club folder and its parent folder's ID:

```json
{
  "name": name,
  "folderId": folderID,
}
```

Creates a folder in a club.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/folder/create
```

```json
{
  "name": "My maps",
  "folderId": 0
}
```

**Example response**:

```json
{
  "id": 1004355,
  "folderId": null,
  "public": true,
  "activityId": 1004355,
  "campaignId": 0,
  "name": "My maps",
  "clubId": 103034,
  "password": false,
  "featured": false,
  "activityType": "folder",
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "editionTimestamp": 1771658680,
  "mediaUrlPngLarge": "",
  "itemsCount": 0,
  "mediaTheme": "",
  "position": 0,
  "targetActivityId": 1004355,
  "externalId": 0,
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "mediaUrlDds": "",
  "active": true,
  "mediaUrlPngMedium": ""
}
```

If the club does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the player does not have enough permissions in the club to create folders, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
