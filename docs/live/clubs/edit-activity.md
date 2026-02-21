---
name: Edit club activity

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubID}/activity/{activityID}/edit

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the activity belongs to
      required: true
    - name: activityID
      type: integer
      description: The ID of the activity to be edited
      required: true
  body:
    - name: name
      type: string
      description: The new name of the activity
    - name: active
      type: integer
      description: Whether the activity should be active (1) or deactivated (0)
    - name: featured
      type: integer
      description: Whether the activity should be featured in the club (1) or not (0)
    - name: folderID
      type: integer
      description: The ID of the folder in the club where the activity should be moved
    - name: mediaTheme
      type: string
      description: The name of the theme preset to use for the activity, in lower-case
    - name: position
      type: integer
      description: The position of the activity in the club's activities list
    - name: public
      type: integer
      description: Whether the activity should be public (1) or private (0)
---

The request body is an object with the activity details to be edited:

```json
{
  "name": name,
  "active": active,
  "featured": featured,
  "folderId": folderID,
  "mediaTheme": mediaTheme,
  "position": position,
  "public": public
}
```

Edits an activity in a club.

---

**Remarks**:

- To move an activity out of a folder, set `folderID` to `0`.
- A valid `position` depends on the other activities in the club, including deactivated and deleted ones. It's recommended to use one of the positions returned by the [Get club activities Live endpoint](/live/clubs/activities.md).
- A list of theme presets that can be used for the `mediaTheme` parameter can be found in the following directory when selecting an image for a club activity: `Manialinks\Nadeo\CMGame\OfficialThemes`.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/activity/1003588/edit
```

```json
{
  "name": "My uploaded maps",
  "active": 1,
  "featured": 1,
  "folderId": 0,
  "mediaTheme": "mirage",
  "position": 0,
  "public": 0
}
```

**Example response**:

```json
{
  "id": 1003588,
  "folderId": null,
  "public": false,
  "activityId": 1003588,
  "campaignId": 0,
  "name": "My uploaded maps",
  "clubId": 103034,
  "password": false,
  "featured": true,
  "activityType": "map-upload",
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "editionTimestamp": 1771560553,
  "mediaUrlPngLarge": "",
  "itemsCount": 0,
  "mediaTheme": "mirage",
  "position": 0,
  "targetActivityId": 1003588,
  "externalId": 0,
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "mediaUrlDds": "",
  "active": true,
  "mediaUrlPngMedium": ""
}
```

If the club / activity does not exist or the player is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the player does not have enough permissions in the club to edit activities, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```

If the `folderID` does not exist, the response will contain an error:

```json
[
  "folder:error-notFound"
]
```

If the `position` is invalid, or the activity is already at that position, the response will contain an error:

```json
[
  "position:error-wrongPosition"
]
```
