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
    - name: offset
      type: integer
      description: The number of activities to skip
      required: true
    - name: active
      type: Boolean
      description: Whether to only include currently active entries
      required: true
---

Gets a list of club activities, including news, rooms, campaigns and others.

---

**Remarks**:
- For clubs you are not an admin of, `active` needs to be set to `true` because only admins are allowed to see disabled activities. Otherwise you'll get an error complaining that you're not a member/admin of the club.

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
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/4764/621a7e68e441e.png?updateTimestamp=1645903469.png",
      "externalId": 0,
      "featured": false,
      "password": false,
      "itemsCount": 0,
      "clubId": 4764
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
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/4764/621a7bc9385ae.png?updateTimestamp=1645902796.png",
      "externalId": 2649,
      "featured": false,
      "password": false,
      "itemsCount": 15,
      "clubId": 4764
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
      "mediaUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/card/5f624cd7ca5a9.png?updateTimestamp=1600277720.png",
      "externalId": 1094,
      "featured": false,
      "password": false,
      "itemsCount": 11,
      "clubId": 4764
    }
  ],
  "maxPage": 7,
  "itemCount": 20
}
```
