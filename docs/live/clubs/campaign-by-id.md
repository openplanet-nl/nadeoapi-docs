---
name: Get club campaign by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubID}/campaign/{campaignID}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubID
      type: integer
      description: The ID of the club the campaign belongs to
      required: true
    - name: campaignID
      type: integer
      description: The ID of the campaign to be requested
      required: true
---

Gets the details of a specific club campaign.

---

**Remarks**:

- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/19489/campaign/28446
```

**Example response**:

```json
{
  "clubDecalUrl": "",
  "campaignId": 28446,
  "activityId": 302134,
  "campaign": {
    "id": 28446,
    "seasonUid": "NLS-oCLUEcsEL1c45ePnhFnW4wZv4vkd1VKijYY",
    "name": "Icy Summer 2022",
    "color": "",
    "useCase": 2,
    "clubId": 19489,
    "leaderboardGroupUid": "NLS-oCLUEcsEL1c45ePnhFnW4wZv4vkd1VKijYY",
    "publicationTimestamp": 1658480776,
    "startTimestamp": 1658480776,
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
        "id": 314741,
        "position": 0,
        "mapUid": "tknxMmzHqPOImrE7FWNzzdvCia2"
      },
      ...
      {
        "id": 314857,
        "position": 24,
        "mapUid": "i5dupTLKB6AquA1yhsNp40SjXF2"
      }
    ],
    "latestSeasons": [
      {
        "uid": "NLS-oCLUEcsEL1c45ePnhFnW4wZv4vkd1VKijYY",
        "name": "Icy Summer 2022",
        "startTimestamp": 1658480776,
        "endTimestamp": 0,
        "relativeStart": -47124886,
        "relativeEnd": 0,
        "campaignId": 28446,
        "active": true
      }
    ],
    "categories": [
      {
        "position": 0,
        "length": 5,
        "name": "Icy Summer 2022"
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
    "editionTimestamp": 1658531133
  },
  "popularityLevel": 0,
  "publicationTimestamp": 1658480776,
  "creationTimestamp": 1658480776,
  "creatorAccountId": "1e64ec02-5384-431b-9a34-c180e2e072f7",
  "latestEditorAccountId": "1e64ec02-5384-431b-9a34-c180e2e072f7",
  "id": 302134,
  "clubId": 19489,
  "clubName": "$s$900Flink's $fffclub",
  "name": "Icy Summer 2022",
  "mapsCount": 25,
  "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/809d31a8-102d-4e27-9152-adece083e2d1/dds/game.dds?timestamp=1705423431.dds",
  "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/809d31a8-102d-4e27-9152-adece083e2d1/png/large.png?timestamp=1705423431.png",
  "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/809d31a8-102d-4e27-9152-adece083e2d1/png/medium.png?timestamp=1705423431.png",
  "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/809d31a8-102d-4e27-9152-adece083e2d1/png/small.png?timestamp=1705423431.png",
  "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/809d31a8-102d-4e27-9152-adece083e2d1/dds/game.dds?timestamp=1705423431.dds",
  "mediaTheme": ""
}
```

If the club or campaign does not exist, the response will contain an error:

```json
[
  "activity:error-notFound"
]
```
