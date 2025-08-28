---
name: Get club map review rooms

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/map-review?length={length}&offset={offset}&name={name}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of rooms to retrieve
      required: true
      max: 250
    - name: offset
      type: integer
      description: The number of rooms to skip
      required: true
    - name: name
      type: string
      description: A string to search for in the room names
---

Gets a list of club map review rooms.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/map-review?length=3&offset=0
```

**Example response**:

```json
{
  "clubMapReviewList": [
    {
      "activityId": 506865,
      "mapReviewUid": "club_29917_506865",
      "timeLimit": 1200,
      "scalable": true,
      "allowVoteSkipMap": true,
      "submissionLimitation": true,
      "maxPlayer": 42,
      "public": true,
      "popularityLevel": 0,
      "submittedMapCount": 1,
      "id": 506865,
      "clubId": 29917,
      "clubName": "The Ritual",
      "name": "Review",
      "creationTimestamp": 1702550618,
      "creatorAccountId": "83596861-6441-4c3a-9cf2-37eec6c21440",
      "latestEditorAccountId": "83596861-6441-4c3a-9cf2-37eec6c21440",
      "game2webUrl": "https://www.trackmania.com/clubs29917/map-review/506865",
      "mediaUrl": "",
      "mediaUrlPngLarge": "",
      "mediaUrlPngMedium": "",
      "mediaUrlPngSmall": "",
      "mediaUrlDds": "",
      "mediaTheme": ""
    },
    {
      "activityId": 480607,
      "mapReviewUid": "club_58353_480607",
      "timeLimit": 420,
      "scalable": true,
      "allowVoteSkipMap": false,
      "submissionLimitation": false,
      "maxPlayer": 64,
      "public": true,
      "popularityLevel": 0,
      "submittedMapCount": 3,
      "id": 480607,
      "clubId": 58353,
      "clubName": "$S$F6FDD0LLA$FFF MAPS",
      "name": "!",
      "creationTimestamp": 1697106965,
      "creatorAccountId": "8ffe695a-8aff-4378-a85f-a503a1abb256",
      "latestEditorAccountId": "8ffe695a-8aff-4378-a85f-a503a1abb256",
      "game2webUrl": "https://www.trackmania.com/clubs58353/map-review/480607",
      "mediaUrl": "",
      "mediaUrlPngLarge": "",
      "mediaUrlPngMedium": "",
      "mediaUrlPngSmall": "",
      "mediaUrlDds": "",
      "mediaTheme": ""
    },
    {
      "activityId": 421171,
      "mapReviewUid": "club_66661_421171",
      "timeLimit": 180,
      "scalable": true,
      "allowVoteSkipMap": false,
      "submissionLimitation": false,
      "maxPlayer": 64,
      "public": true,
      "popularityLevel": 0,
      "submittedMapCount": 29,
      "id": 421171,
      "clubId": 66661,
      "clubName": "Ubisoft Club",
      "name": "Mirage",
      "creationTimestamp": 1687436865,
      "creatorAccountId": "7ad33388-641e-4497-b063-c88e75552645",
      "latestEditorAccountId": "7ad33388-641e-4497-b063-c88e75552645",
      "game2webUrl": "https://www.trackmania.com/clubs66661/map-review/421171",
      "mediaUrl": "",
      "mediaUrlPngLarge": "",
      "mediaUrlPngMedium": "",
      "mediaUrlPngSmall": "",
      "mediaUrlDds": "",
      "mediaTheme": ""
    }
  ],
  "maxPage": 4,
  "itemCount": 12
}
```
