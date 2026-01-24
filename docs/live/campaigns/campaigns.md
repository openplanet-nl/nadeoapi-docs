---
name: Get seasonal campaigns

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/campaign/official?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of campaigns to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of campaigns to skip (looking backwards from the current campaign)
      required: true
---

<div class="notification is-warning">

This endpoint is deprecated and may be removed in the future. It's recommended to use the [v2 route](/live/campaigns/campaigns-v2) instead.

</div>

Gets official campaigns.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/campaign/official?offset=7&length=1
```

**Example response**:

```json
{
  "itemCount": 9,
  "campaignList": [
    {
      "id": 11612,
      "seasonUid": "2e2bbf85-bf44-4376-8b97-874cd6cf8693",
      "name": "Summer 2021",
      "color": "",
      "useCase": 0,
      "clubId": 0,
      "leaderboardGroupUid": "2e2bbf85-bf44-4376-8b97-874cd6cf8693",
      "publicationTimestamp": 1625151600,
      "startTimestamp": 1625151600,
      "endTimestamp": 1633100400,
      "rankingSentTimestamp": 1633148891,
      "year": -1,
      "week": -1,
      "day": -1,
      "monthYear": -1,
      "month": -1,
      "monthDay": -1,
      "published": true,
      "playlist": [
        {
          "id": 110493,
          "position": 0,
          "mapUid": "7fsfRSUCQ7YwfBEdRk_GivW6qzj"
        },
        {
          "id": 110494,
          "position": 1,
          "mapUid": "KOylxZkny8RdOEFhchN1kG6Uoo1"
        },
        ...
        {
          "id": 110516,
          "position": 23,
          "mapUid": "V6jgITolMc5EN8i8eHGTU65peij"
        },
        {
          "id": 110517,
          "position": 24,
          "mapUid": "Iwo4gO_0dQ3FVQ1xeYjho5ZmLrf"
        }
      ],
      "latestSeasons": [
        {
          "uid": "2e2bbf85-bf44-4376-8b97-874cd6cf8693",
          "name": "Summer 2021",
          "startTimestamp": 1625151600,
          "endTimestamp": 1633100400,
          "relativeStart": -36044916,
          "relativeEnd": -28096116,
          "campaignId": 11612,
          "active": false
        }
      ],
      "categories": [
        {
          "position": 0,
          "length": 1,
          "name": "0"
        },
        {
          "position": 1,
          "length": 1,
          "name": "1"
        },
        {
          "position": 2,
          "length": 1,
          "name": "2"
        },
        {
          "position": 3,
          "length": 1,
          "name": "3"
        },
        {
          "position": 4,
          "length": 1,
          "name": "4"
        }
      ],
      "media": {
        "buttonBackgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/campaign/button_background/11612/60ddc1764fd79.dds?updateTimestamp=1625145719.dds",
        "buttonForegroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/campaign/button_foreground/11612/60ddc17c6c55c.dds?updateTimestamp=1625145725.dds",
        "decalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/campaign/campaign_decal/11612/60ddc1bf546b9.dds?updateTimestamp=1625145792.dds",
        "popUpBackgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/campaign/pop_up_image/11612/60ddc1dedf05d.png?updateTimestamp=1625145824.png",
        "popUpImageUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/campaign/pop_up_image/11612/60ddc1dedf05d.png?updateTimestamp=1625145824.png",
        "liveButtonBackgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/campaign/live_button_background/11612/60ddc16100c5e.dds?updateTimestamp=1625145698.dds",
        "liveButtonForegroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/campaign/live_button_foreground/11612/60ddc1682a59e.dds?updateTimestamp=1625145705.dds"
      },
      "editionTimestamp": 1648543852
    }
  ],
  "nextRequestTimestamp": 1664636400,
  "relativeNextRequest": 3439884
}
```

If the campaign does not exist, the response will show an empty list:

```json
{
  "itemCount": 9,
  "campaignList": [

  ],
  "nextRequestTimestamp": 1664636400,
  "relativeNextRequest": 3439827
}
```
