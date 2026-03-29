---
name: Create club campaign

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/campaign/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the campaign should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new campaign
      max: 20 characters
      required: true
    - name: playlist
      type: object[]
      description: A list of maps, with their positions and UIDs
      children:
        - name: position
          type: integer
          description: The position of the map in the campaign (see remarks below)
        - name: mapUid
          type: string
          description: The UID of a specific map
    - name: folderId
      type: integer
      description: The ID of the folder where the campaign should be created
---

The request body is an object containing the campaign details:

```json
{
  "name": name,
  "playlist": [
    {
      "position": position,
      "mapUid": mapUid
    }
  ],
  "folderId": folderId
}
```

Creates a campaign in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- Campaigns created using this endpoint will be deactivated by default. To activate them, use the [Edit activity Live endpoint](/live/club-management/edit-activity.md).
- The position of the maps in the campaign seems to be determined by their order in the `playlist` array in the request body, rather than by their `position` parameter. It is still recommended to pass the desired position.
- If a map is missing its `mapUid` or `position`, the campaign will be created, but the map will be skipped.
- Maps used for this endpoint must be uploaded to Nadeo's servers beforehand.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference). This only applies for custom media files, and not for preset themes.
- See the [glossary](/glossary#club-folders) for more information about folders.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/campaign/create
```

```json
{
  "name": "RPG",
  "playlist": [
    {
      "position": 0,
      "mapUid": "zx45UUBTayedFisP7N_wYWZa3Ih"
    },
    {
      "position": 1,
      "mapUid": "XiynRhPNCztF7UeXGa7bmYL32xm"
    }
  ],
  "folderId": 0
}
```

**Example response**:

```json
{
  "creationTimestamp": 1771654457,
  "clubName": "Fort's club",
  "id": 1004334,
  "clubDecalUrl": "",
  "publicationTimestamp": 1771654457,
  "activityId": 1004334,
  "campaignId": 127119,
  "name": "RPG",
  "clubId": 103034,
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "mediaUrlPngLarge": "",
  "campaign": {
    "day": -1,
    "id": 127119,
    "video": false,
    "publicationTimestamp": 1771654457,
    "monthDay": -1,
    "color": "",
    "name": "RPG",
    "clubId": 103034,
    "month": -1,
    "endTimestamp": 0,
    "monthYear": -1,
    "rankingSentTimestamp": null,
    "mediaUrl": "",
    "startTimestamp": 1771654457,
    "editionTimestamp": 1771654457,
    "leaderboardGroupUid": "NLS-jZ46Fn4oNK9KLokxwvMLMo0bOwQFca1Dq0A",
    "seasonUid": "NLS-jZ46Fn4oNK9KLokxwvMLMo0bOwQFca1Dq0A",
    "categories": [
      {
        "name": "RPG",
        "position": 0,
        "length": 5
      }
    ],
    "year": -1,
    "media": {
      "decalUrl": "",
      "popUpImageUrl": "",
      "liveButtonForegroundUrl": "",
      "liveButtonBackgroundUrl": "",
      "buttonBackgroundUrl": "",
      "popUpBackgroundUrl": "",
      "buttonForegroundUrl": ""
    },
    "published": true,
    "useCase": 2,
    "playlist": [
      {
        "id": 1516902,
        "mapUid": "zx45UUBTayedFisP7N_wYWZa3Ih",
        "position": 0
      },
      {
        "id": 1516903,
        "mapUid": "XiynRhPNCztF7UeXGa7bmYL32xm",
        "position": 1
      }
    ],
    "week": -1,
    "latestSeasons": [
      {
        "uid": "NLS-jZ46Fn4oNK9KLokxwvMLMo0bOwQFca1Dq0A",
        "campaignId": 127119,
        "name": "RPG",
        "endTimestamp": 0,
        "startTimestamp": 1771654457,
        "relativeEnd": 0,
        "active": true,
        "relativeStart": 0
      }
    ]
  },
  "mediaTheme": "",
  "popularityLevel": 0,
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "mediaUrlDds": "",
  "mapsCount": 2,
  "mediaUrlPngMedium": ""
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to create campaigns, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```

An invalid or duplicated `mapUid` results in a `500` response code with an error object in the response body.
