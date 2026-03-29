---
name: Edit club news article

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/news/{newsId}/edit

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the news article belongs to
      required: true
    - name: newsId
      type: integer
      description: The ID of the news article to be edited
      required: true
  body:
    - name: name
      type: string
      description: The new name of the news article
      max: 20 characters
    - name: headline
      type: string
      description: The headline of the news article, displayed below the name
      max: 40 characters
    - name: body
      type: string
      description: The news article body
      max: 2000 characters
---

The request body is an object containing the news article details:

```json
{
  "name": name,
  "headline": headline,
  "body": body
}
```

Edits a news article in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference). This only applies for custom media files, and not for preset themes.
- The `body` field supports text styling, which does not count towards the maximum character length. See the [Text Styling documentation](https://wiki.trackmania.io/en/content-creation/text-styling) for more information about the supported styles and syntax.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/news/1006858/edit
```

```json
{
  "name": "My edited news!",
  "headline": "Edited news for testing",
  "body": "This is me editing the body!"
}
```

**Example response**:

```json
{
  "creationTimestamp": 1771912390,
  "mediaUrlJpgLarge": "",
  "mediaUrlJpgMedium": "",
  "clubName": "Fort's club",
  "id": 1006858,
  "name": "My edited news!",
  "clubId": 103034,
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "body": "This is me editing the body!",
  "mediaTheme": "",
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "headline": "Edited news for testing",
  "mediaUrlJpgSmall": "",
  "mediaUrlDds": ""
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the news article does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```

If the authenticated account does not have enough permissions in the club to edit news articles, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
