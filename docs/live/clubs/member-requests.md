---
name: Get club pending member requests

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/member/request?length={length}&offset={offset}

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
      description: The number of member requests to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of member requests to skip
      required: true
---

Gets a list of pending member requests for a club.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/354/member/request?offset=0&length=3
```

**Example response**:

```json
{
  "clubMemberList": [
    {
      "creationTimestamp": 1747349376,
      "accountId": "49745547-c2c6-4800-8860-2471744fb1f7",
      "clubId": 354,
      "moderator": false,
      "vip": false,
      "hasFeatured": false,
      "useTag": false,
      "pin": false,
      "role": "Apply"
    },
    {
      "creationTimestamp": 1748780844,
      "accountId": "860ecb27-7e4b-4275-a0ad-578d99a87a55",
      "clubId": 354,
      "moderator": false,
      "vip": false,
      "hasFeatured": false,
      "useTag": false,
      "pin": false,
      "role": "Apply"
    },
    {
      "creationTimestamp": 1750991529,
      "accountId": "cbca399b-0f87-42fe-bd12-a51a843050fb",
      "clubId": 354,
      "moderator": false,
      "vip": false,
      "hasFeatured": false,
      "useTag": false,
      "pin": false,
      "role": "Apply"
    }
  ],
  "maxPage": 10,
  "itemCount": 28
}
```

If the club does not exist or support requests, the response will contain an empty list of pending member requests:

```json
{
  "clubMemberList": [],
  "maxPage": 0,
  "itemCount": 0
}
```
