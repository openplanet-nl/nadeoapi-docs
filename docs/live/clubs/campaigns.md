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

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/campaign?length=1&offset=0
```

**Example response**:
```json
{
  "clubCampaignList": [
    {
      "clubDecalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal/5f622cb28741c.png?updateTimestamp=1600269490.png",
      "campaignId": 28446,
      "activityId": 302134,
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/19489/62da68bf7d798.png?updateTimestamp=1658480834.png",
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
          {
            "id": 314742,
            "position": 1,
            "mapUid": "OHsk7nlV9jTSLDHPxuhY6baMe5b"
          },
          ...
          {
            "id": 314856,
            "position": 23,
            "mapUid": "ve3lCDlmFSUQLL_bBCyGBJbwyK0"
          },
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
            "relativeStart": -2972460,
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
      "popularityLevel": 3,
      "publicationTimestamp": 1658480776,
      "creationTimestamp": 1658480776,
      "id": 302134,
      "clubId": 19489,
      "clubName": "$s$900Flink's $fffclub",
      "name": "Icy Summer 2022",
      "mapsCount": 25
    }
  ],
  "maxPage": 1625,
  "itemCount": 1625
}
```
