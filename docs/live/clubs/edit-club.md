---
name: Edit club

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/edit

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club to be edited
      required: true
  body:
    - name: name
      type: string
      description: The new name of the club
      min: 3 characters
      max: 20 characters
    - name: state
      type: string
      description: The privacy level of the club (see remarks below)
    - name: tag
      type: string
      description: The club tag that can be displayed in-game next to the player's display name.
      max: 5 characters
    - name: description
      type: string
      description: A description of the club
      max: 200 characters
    - name: iconTheme
      type: string
      description: The name of the theme preset for the icon displayed in the list of clubs in-game, in lower case
    - name: decalTheme
      type: string
      description: The name of the theme preset for the image displayed at the start, checkpoints, and finishes, in lower case
    - name: verticalTheme
      type: string
      description: The name of the theme preset for the vertical image displayed in My Clubs list, in lower case
    - name: backgroundTheme
      type: string
      description: The name of the theme preset for the background displayed in the club details page, in lower case
    - name: screen8x1Theme
      type: string
      description: The name of the theme preset for the image displayed on the stadium's bleachers, in lower case
    - name: screen16x1Theme
      type: string
      description: The name of the theme preset for the image displayed on the stadium's banners below the big screen, in lower case
    - name: screen16x9Theme
      type: string
      description: The name of the theme preset for the image displayed on the stadium's big screen, in lower case
---

The request body is an object containing the club details:

```json
{
  "name": name,
  "state": state,
  "tag": tag,
  "description": description,
  "iconTheme": iconTheme,
  "decalTheme": decalTheme,
  "verticalTheme": verticalTheme,
  "backgroundTheme": backgroundTheme,
  "screen8x1Theme": screen8x1Theme,
  "screen16x1Theme": screen16x1Theme,
  "screen16x9Theme": screen16x9Theme
}
```

Edits a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `state` parameter supports three privacy levels: Public - Open to everyone (`"public"`), Private - Accept requests (`"private-open"`), and Private (`"private-closed"`).
- For more information about club customization, including how to create your own images, read the [Club Organisation page](https://wiki.trackmania.io/en/content-creation/club-organisation) in the Trackmania wiki.
- A list of theme presets that can be used for the theme parameters can be found in the following directory when selecting an image for a club activity: `Manialinks\Nadeo\CMGame\OfficialThemes`.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/131063/edit
```

```json
{
  "name": "Edited club",
  "tag": "TEST",
  "description": "This is an edited description",
  "state": "private-open",
  "iconTheme": "hungry",
  "decalTheme": "hungry",
  "backgroundTheme": "honor",
  "verticalTheme": "honor",
  "screen8x1Theme": "animals",
  "screen16x1Theme": "animals",
  "screen16x9Theme": "animals"
}
```

**Example response**:

```json
{
  "creationTimestamp": 1771820094,
  "walletUid": "559cd73b-de9d-45df-82b6-b36ae04bd668",
  "id": 131063,
  "decalUrl": "",
  "decalSponsor4x1UrlPngLarge": "",
  "backgroundUrlJpgLarge": "",
  "decalSponsor4x1UrlDds": "",
  "decalTheme": "hungry",
  "screen16x1Url": "",
  "name": "Edited club",
  "screen64x41Theme": "animals",
  "screen64x41UrlDds": "",
  "featured": false,
  "decalUrlPngMedium": "",
  "screen64x41UrlPngLarge": "",
  "screen16x1UrlDds": "",
  "verified": false,
  "screen16x9Theme": "animals",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "iconUrlPngMedium": "",
  "backgroundUrlDds": "",
  "editionTimestamp": 1771820095,
  "backgroundUrlJpgSmall": "",
  "tag": "TEST",
  "backgroundUrlJpgMedium": "",
  "verticalUrlPngMedium": "",
  "metadata": "",
  "decalUrlPngSmall": "",
  "verticalTheme": "honor",
  "backgroundTheme": "honor",
  "verticalUrlPngSmall": "",
  "iconUrlPngSmall": "",
  "iconUrl": "",
  "popularityLevel": 0,
  "screen8x1UrlDds": "",
  "verticalUrlPngLarge": "",
  "screen16x9Url": "",
  "screen64x41UrlPngMedium": "",
  "screen16x1UrlPngMedium": "",
  "screen8x1UrlPngSmall": "",
  "authorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "screen16x1UrlPngLarge": "",
  "state": "private-open",
  "screen16x9UrlDds": "",
  "verticalUrlDds": "",
  "logoUrl": "",
  "screen8x1UrlPngMedium": "",
  "screen16x9UrlPngLarge": "",
  "screen64x41Url": "",
  "screen16x9UrlPngSmall": "",
  "screen16x9UrlPngMedium": "",
  "description": "This is an edited description",
  "decalSponsor4x1UrlPngSmall": "",
  "screen8x1Theme": "animals",
  "screen8x1UrlPngLarge": "",
  "verticalUrl": "",
  "screen16x1Theme": "animals",
  "iconTheme": "hungry",
  "screen64x41UrlPngSmall": "",
  "decalUrlPngLarge": "",
  "iconUrlPngLarge": "",
  "decalUrlDds": "",
  "decalSponsor4x1Url": "",
  "screen8x1Url": "",
  "iconUrlDds": "",
  "screen16x1UrlPngSmall": "",
  "decalSponsor4x1UrlPngMedium": "",
  "backgroundUrl": ""
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to edit it, the response will contain an error:

```json
[
  "clubMemberRole:error-notAdmin"
]
```

If the `state` parameter is invalid, the response will contain an error:

```json
[
  "state:error-inArray"
]
```
