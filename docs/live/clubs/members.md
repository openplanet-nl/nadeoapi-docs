---
name: Get club members

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}/member?length={length}&offset={offset}

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
      description: The number of members to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of members to skip
      required: true
---

Gets a list of members for a club.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/9/member?length=3&offset=0
```

**Example response**:
```json
{
  "clubMemberList": [
    {
      "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
      "clubId": 9,
      "role": "Creator",
      "creationTimestamp": 1591385606,
      "vip": true,
      "moderator": false,
      "hasFeatured": false,
      "pin": false,
      "useTag": false
    },
    {
      "accountId": "a13831d2-5386-467b-bc65-264694dcaa4d",
      "clubId": 9,
      "role": "Member",
      "creationTimestamp": 1660938863,
      "vip": false,
      "moderator": false,
      "hasFeatured": false,
      "pin": false,
      "useTag": false
    },
    {
      "accountId": "b73665ce-d3b4-4cb4-ac45-8f9a57ddaa1e",
      "clubId": 9,
      "role": "Member",
      "creationTimestamp": 1591439123,
      "vip": false,
      "moderator": false,
      "hasFeatured": false,
      "pin": false,
      "useTag": false
    }
  ],
  "maxPage": 152,
  "itemCount": 455
}
```

If the club does not exist, the response will contain an empty list of members:

```json
{
  "clubMemberList": [

  ],
  "maxPage": 0,
  "itemCount": 0
}
```
