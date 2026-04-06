---
name: Edit club campaign

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/campaign/{campaignId}/edit

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the campaign belongs to
      required: true
    - name: campaignId
      type: integer
      description: The campaign ID of the campaign to be edited
      required: true
  body:
    - name: name
      type: string
      description: The new name of the campaign
      max: 20 characters
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
  ]
}
```

Edits a campaign in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The position of the maps in the campaign seems to be determined by their order in the `playlist` array in the request body, rather than by their `position` parameter. It is still recommended to pass the desired position.
- If a map is missing its `mapUid` or `position`, the campaign will be edited, but the map will be skipped.
- Maps used for this endpoint must be uploaded to Nadeo's servers beforehand.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference). This only applies for custom media files, and not for preset themes.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/campaign/126985/edit
```

```json
{
  "name": "RPG maps",
  "playlist": [
    {
      "position": 0,
      "mapUid": "zx45UUBTayedFisP7N_wYWZa3Ih"
    },
    {
      "position": 1,
      "mapUid": "F082FKYgeG0OO8XlUSzE5uaOgL0"
    }
  ]
}
```

**Example response**:

```json
{
  "creationTimestamp": 1771568272,
  "clubName": "Fort's club",
  "id": 1003600,
  "clubDecalUrl": "",
  "publicationTimestamp": 1771568272,
  "activityId": 1003600,
  "campaignId": 126985,
  "name": "RPG maps",
  "clubId": 103034,
  "mediaUrlPngSmall": "",
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "mediaUrlPngLarge": "",
  "campaign": {
    "day": -1,
    "id": 126985,
    "video": false,
    "publicationTimestamp": 1771568272,
    "monthDay": -1,
    "color": "",
    "name": "RPG maps",
    "clubId": 103034,
    "month": -1,
    "endTimestamp": 0,
    "monthYear": -1,
    "rankingSentTimestamp": null,
    "mediaUrl": "",
    "startTimestamp": 1771568272,
    "editionTimestamp": 1771568272,
    "leaderboardGroupUid": "NLS-RHoGdQjhHjyIHHtpmLIaFVS4616v7M8gbwG",
    "seasonUid": "NLS-RHoGdQjhHjyIHHtpmLIaFVS4616v7M8gbwG",
    "categories": [
      {
        "name": "RPG maps",
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
        "id": 1515297,
        "mapUid": "zx45UUBTayedFisP7N_wYWZa3Ih",
        "position": 0
      },
      {
        "id": 1515298,
        "mapUid": "F082FKYgeG0OO8XlUSzE5uaOgL0",
        "position": 1
      }
    ],
    "week": -1,
    "latestSeasons": [
      {
        "uid": "NLS-RHoGdQjhHjyIHHtpmLIaFVS4616v7M8gbwG",
        "campaignId": 126985,
        "name": "RPG maps",
        "endTimestamp": 0,
        "startTimestamp": 1771568272,
        "relativeEnd": 0,
        "active": true,
        "relativeStart": -217
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

If the campaign does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the authenticated account does not have enough permissions in the club to edit campaigns, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```

An invalid `mapUid` results in a `500` response code with an error object in the response body.
