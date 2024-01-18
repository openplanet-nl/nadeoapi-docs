---
name: Get club campaigns

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/campaign?length={length}&offset={offset}&name={name}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of campaigns to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of campaigns to skip
      required: true
    - name: name
      type: string
      description: A string to search for in the campaign names
      required: false
---

Gets a list of club campaigns.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/campaign?length=1&offset=0
```

**Example response**:

```json
{
  "clubCampaignList": [
    {
      "clubDecalUrl": "",
      "campaignId": 55779,
      "activityId": 496443,
      "campaign": {
        "id": 55779,
        "seasonUid": "NLS-cMIkwBwqaHO5VptBneeoo72EBHLZTd8IUE4",
        "name": "SNOW DISCOVERY",
        "color": "",
        "useCase": 2,
        "clubId": 150,
        "leaderboardGroupUid": "NLS-cMIkwBwqaHO5VptBneeoo72EBHLZTd8IUE4",
        "publicationTimestamp": 1700585401,
        "startTimestamp": 1700585401,
        "endTimestamp": 0,
        "rankingSentTimestamp": null,
        "year": -1,
        "week": -1,
        "day": -1,
        "monthYear": -1,
        "month": -1,
        "monthDay": -1,
        "published": true,
        "playlist": [
          {
            "id": 656090,
            "position": 0,
            "mapUid": "k45jQI6Y7XrPfe1T0hZhj4pKzY2"
          },
          ...
          {
            "id": 656104,
            "position": 14,
            "mapUid": "GXY3_DkrkGSceiut44HOz8LJP52"
          }
        ],
        "latestSeasons": [
          {
            "uid": "NLS-cMIkwBwqaHO5VptBneeoo72EBHLZTd8IUE4",
            "name": "SNOW DISCOVERY",
            "startTimestamp": 1700585401,
            "endTimestamp": 0,
            "relativeStart": -5019174,
            "relativeEnd": 0,
            "campaignId": 55779,
            "active": true
          }
        ],
        "categories": [
          {
            "position": 0,
            "length": 5,
            "name": "SNOW DISCOVERY"
          }
        ],
        "media": {
          "buttonBackgroundUrl": "",
          "buttonForegroundUrl": "",
          "decalUrl": "",
          "popUpBackgroundUrl": "",
          "popUpImageUrl": "",
          "liveButtonBackgroundUrl": "",
          "liveButtonForegroundUrl": ""
        },
        "editionTimestamp": 1700585964
      },
      "popularityLevel": 3,
      "publicationTimestamp": 1700585401,
      "creationTimestamp": 1700585401,
      "creatorAccountId": "7cd60a75-609a-4e64-b286-16f329878249",
      "latestEditorAccountId": "7cd60a75-609a-4e64-b286-16f329878249",
      "id": 496443,
      "clubId": 150,
      "clubName": "UBISOFT NADEO",
      "name": "SNOW DISCOVERY",
      "mapsCount": 15,
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2e3f791b-3b0d-450d-b8cc-39930ffa4a64/dds/game.dds?timestamp=1705439396.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2e3f791b-3b0d-450d-b8cc-39930ffa4a64/png/large.png?timestamp=1705439396.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2e3f791b-3b0d-450d-b8cc-39930ffa4a64/png/medium.png?timestamp=1705439396.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2e3f791b-3b0d-450d-b8cc-39930ffa4a64/png/small.png?timestamp=1705439396.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/2e3f791b-3b0d-450d-b8cc-39930ffa4a64/dds/game.dds?timestamp=1705439396.dds",
      "mediaTheme": ""
    }
  ],
  "maxPage": 2482,
  "itemCount": 2482
}
```
