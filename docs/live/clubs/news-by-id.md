---
name: Get club news by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/news/{activityId}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club the news belongs to
      required: true
    - name: activityId
      type: integer
      description: The activity ID of the news to be requested
      required: true
---

Gets the details of a specific club news.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png`/`.jpg` versions are available using separate fields (see example below for reference). This only applies for custom media files, and not for preset themes.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/103034/news/1006858
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
  "body": "This is the body of news created to test the endpoint!",
  "mediaTheme": "",
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "headline": "News for testing",
  "mediaUrlJpgSmall": "",
  "mediaUrlDds": ""
}
```

If the club or news does not exist, the response will contain an error (status 404):

```json
["activity:error-notFound"]
```

If the news is private and the player is not a member of the club, the response will contain an error (status 403):

```json
["clubMemberRole:error-notMember"]
```
