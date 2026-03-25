---
name: Create club news article

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/news/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the news article should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new news
      max: 20 characters
      required: true
    - name: headline
      type: string
      description: The headline of the news article, displayed below the name
      max: 40 characters
    - name: body
      type: string
      description: The news body
      max: 2000 characters
    - name: folderId
      type: integer
      description: The ID of the folder where the news article should be created
---

The request body is an object containing the news article details:

```json
{
  "name": name,
  "headline": headline,
  "body": body,
  "folderId": folderId
}
```

Creates a news article in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `body` field supports text styling, which does not count towards the maximum character length. See the [Text Styling documentation](https://wiki.trackmania.io/en/content-creation/text-styling) for more information about the supported styles and syntax.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference).
- See the [glossary](/glossary#club-folders) for more information about folders.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/news/create
```

```json
{
  "name": "My news!",
  "headline": "News for testing",
  "body": "This is the body of an article created to test the endpoint!",
  "folderId": 0
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
  "name": "My news!",
  "clubId": 103034,
  "mediaUrl": "",
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "body": "This is the body of an article created to test the endpoint!",
  "mediaTheme": "",
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "headline": "News for testing",
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

If the authenticated account does not have enough permissions in the club to create news articles, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```
