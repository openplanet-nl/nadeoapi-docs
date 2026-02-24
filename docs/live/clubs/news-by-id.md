---
name: Get club news by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubID}/news/{newsID}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the news belongs to
      required: true
    - name: newsID
      type: integer
      description: The ID of the news to be requested
      required: true
---

Gets the details of a specific club news.

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

If the club or news does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```
