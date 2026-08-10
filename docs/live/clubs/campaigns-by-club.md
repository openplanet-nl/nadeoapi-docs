---
name: Get club campaigns by club

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/campaign?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The club's ID
      required: true
  query:
    - name: length
      type: integer
      description: The number of campaigns to retrieve
      required: true
      max: 250
    - name: offset
      type: integer
      description: The number of campaigns to skip
      required: true
---

Gets a list of club campaigns for a specified club.

---

**Remarks**:

- This endpoint does not accept requests by dedicated server accounts. See [the Authentication guide](/auth) for more information.
- It is not possible to retrieve inactive campaigns using this endpoint.
- It is not possible to retrieve campaigns from a specific folder.
- The campaigns returned by this endpoint are in order of most recently created, not the display order inside the club.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference). This only applies for custom media files, and not for preset themes.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/42175/campaign?length=1&offset=0
```

**Example response**:

```json
{
    "clubCampaignList": [
        {
            "clubDecalUrl": "https:\/\/trackmania-prod-media-s3.cdn.ubi.com\/media\/image\/live-api\/68c31605-f85d-49a6-be91-c8e8a6fb1b51\/dds\/game.dds?timestamp=1705464474.dds",
            "campaignId": 150670,
            "activityId": 1137979,
            "campaign": {
                "id": 150670,
                "seasonUid": "NLS-PKxEalQbPkqOZVD19EoKziVpCTbASUWxMBP",
                "name": "Summer 2026 Magnet",
                "color": "",
                "useCase": 2,
                "clubId": 42175,
                "leaderboardGroupUid": "NLS-PKxEalQbPkqOZVD19EoKziVpCTbASUWxMBP",
                "publicationTimestamp": 1785149518,
                "startTimestamp": 1785149518,
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
                        "id": 1852222,
                        "position": 0,
                        "mapUid": "ueh0QQj3acyFSBjOtg8Uke41xUe"
                    },
                    ...
                    {
                        "id": 1852246,
                        "position": 24,
                        "mapUid": "3Rbi4BI9nJPQ94lJnKk148rOLTi"
                    }
                ],
                "latestSeasons": [
                    {
                        "uid": "NLS-PKxEalQbPkqOZVD19EoKziVpCTbASUWxMBP",
                        "name": "Summer 2026 Magnet",
                        "startTimestamp": 1785149518,
                        "endTimestamp": 0,
                        "relativeStart": -617836,
                        "relativeEnd": 0,
                        "campaignId": 150670,
                        "active": true
                    }
                ],
                "categories": [
                    {
                        "position": 0,
                        "length": 5,
                        "name": "Summer 2026 Magnet"
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
                "editionTimestamp": 1785149518,
                "mediaUrl": "",
                "video": false
            },
            "popularityLevel": 0,
            "publicationTimestamp": 1785149519,
            "creationTimestamp": 1785149519,
            "creatorAccountId": "fc8467b8-b253-457f-b8bb-3bbd2bb5bfdd",
            "latestEditorAccountId": "fc8467b8-b253-457f-b8bb-3bbd2bb5bfdd",
            "id": 1137979,
            "clubId": 42175,
            "clubName": "$Z$f72ArEyeses$fff\u0027 $888Club",
            "name": "Summer 2026 Magnet",
            "mapsCount": 25,
            "mediaUrl": "",
            "mediaUrlPngLarge": "",
            "mediaUrlPngMedium": "",
            "mediaUrlPngSmall": "",
            "mediaUrlDds": "",
            "mediaTheme": ""
        }
    ],
    "maxPage": 67,
    "itemCount": 67
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error (status 403):

```json
["globalAdmin:error-notAllowed"]
```
