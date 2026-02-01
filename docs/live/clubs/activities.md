---
name: Get club activities

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/activity?length={length}&offset={offset}&active={active}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: string
      description: The club's ID
      required: true
  query:
    - name: length
      type: integer
      description: The number of activities to retrieve
      required: true
      max: 250
    - name: offset
      type: integer
      description: The number of activities to skip
      required: true
    - name: active
      type: Boolean
      description: Optional filter for enabled/disabled activities
    - name: folderId
      type: string
      description: Optional filter for activities in a folder
---

Gets a list of club activities, including news, rooms, campaigns, and others.

---

**Remarks**:

- Omitting the `active` parameter implicitly requests both enabled and disabled activities. For clubs you are not an admin of, `active` needs to be explicitly set to `true` because only admins are allowed to see disabled activities - otherwise you'll get an error complaining that you're not a member/admin of the club.
- As of 2024-01-17, this endpoint's response links to `.dds` media files by default, while several scaled `.png` versions are available using separate fields (see example below for reference).
- By default, all activities (including ones nested in folders) are returned. To only retrieve activities in a specific folder, use `folderId` to filter them. Setting `folderId` to `0` only returns activities outside of folders.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/4764/activity?length=3&offset=0&active=true
```

**Example response**:

```json
{
  "activityList": [
    {
      "id": 35474,
      "name": "$ec0Discord",
      "activityType": "news",
      "activityId": 35474,
      "targetActivityId": 35474,
      "campaignId": 0,
      "position": 0,
      "public": true,
      "active": true,
      "externalId": 0,
      "featured": false,
      "password": false,
      "itemsCount": 0,
      "clubId": 4764,
      "editionTimestamp": 1594152754,
      "creatorAccountId": "a26bcfd0-cd7f-4477-b514-eab711dfaf61",
      "latestEditorAccountId": "a26bcfd0-cd7f-4477-b514-eab711dfaf61",
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/86ada7a9-f401-4832-be60-631bb63f01a4/dds/game.dds?timestamp=1705418454.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/86ada7a9-f401-4832-be60-631bb63f01a4/png/large.png?timestamp=1705418454.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/86ada7a9-f401-4832-be60-631bb63f01a4/png/medium.png?timestamp=1705418454.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/86ada7a9-f401-4832-be60-631bb63f01a4/png/small.png?timestamp=1705418454.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/86ada7a9-f401-4832-be60-631bb63f01a4/dds/game.dds?timestamp=1705418454.dds",
      "mediaTheme": ""
    },
    {
      "id": 68012,
      "name": "$ec0TMS $fffRoad",
      "activityType": "campaign",
      "activityId": 68012,
      "targetActivityId": 68012,
      "campaignId": 2649,
      "position": 1,
      "public": true,
      "active": true,
      "externalId": 2649,
      "featured": false,
      "password": false,
      "itemsCount": 15,
      "clubId": 4764,
      "editionTimestamp": 1595625959,
      "creatorAccountId": "a26bcfd0-cd7f-4477-b514-eab711dfaf61",
      "latestEditorAccountId": "a26bcfd0-cd7f-4477-b514-eab711dfaf61",
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1636a29e-bbe2-4321-acc3-a523dd2c94ef/dds/game.dds?timestamp=1705418451.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1636a29e-bbe2-4321-acc3-a523dd2c94ef/png/large.png?timestamp=1705418451.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1636a29e-bbe2-4321-acc3-a523dd2c94ef/png/medium.png?timestamp=1705418451.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1636a29e-bbe2-4321-acc3-a523dd2c94ef/png/small.png?timestamp=1705418451.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/1636a29e-bbe2-4321-acc3-a523dd2c94ef/dds/game.dds?timestamp=1705418451.dds",
      "mediaTheme": ""
    },
    {
      "id": 35159,
      "name": "TM$ec0S $fffDirt",
      "activityType": "campaign",
      "activityId": 35159,
      "targetActivityId": 35159,
      "campaignId": 1094,
      "position": 3,
      "public": true,
      "active": true,
      "externalId": 1094,
      "featured": false,
      "password": false,
      "itemsCount": 11,
      "clubId": 4764,
      "editionTimestamp": 1594148450,
      "creatorAccountId": "a26bcfd0-cd7f-4477-b514-eab711dfaf61",
      "latestEditorAccountId": "a26bcfd0-cd7f-4477-b514-eab711dfaf61",
      "mediaUrl": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/75ff0c45-3c4b-47c9-a99c-208f8fc017d9/dds/game.dds?timestamp=1705402100.dds",
      "mediaUrlPngLarge": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/75ff0c45-3c4b-47c9-a99c-208f8fc017d9/png/large.png?timestamp=1705402100.png",
      "mediaUrlPngMedium": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/75ff0c45-3c4b-47c9-a99c-208f8fc017d9/png/medium.png?timestamp=1705402100.png",
      "mediaUrlPngSmall": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/75ff0c45-3c4b-47c9-a99c-208f8fc017d9/png/small.png?timestamp=1705402100.png",
      "mediaUrlDds": "https://trackmania-prod-media-s3.cdn.ubi.com/media/image/live-api/75ff0c45-3c4b-47c9-a99c-208f8fc017d9/dds/game.dds?timestamp=1705402100.dds",
      "mediaTheme": ""
    }
  ],
  "maxPage": 7,
  "itemCount": 20
}
```
