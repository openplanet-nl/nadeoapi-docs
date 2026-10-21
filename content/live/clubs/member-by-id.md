---
title: Get club member by ID
description: Gets a specific player's information in the context of a club using the player's account ID.
layout: api

menus:
  main:
    parent: Clubs

params:
  url: https://live-services.trackmania.nadeo.live
  method: GET
  route: /api/token/club/{clubId}/member/{accountId}

  audience: NadeoLiveServices

  path:
    - name: clubId
      type: integer
      description: The club ID of the club to get member information for
      required: true
    - name: accountId
      type: string
      description: The account ID of the account to get member information for
      required: true
---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/9/member/7398eeb6-9b4e-44b8-a7a1-a2149955ac70
```

**Example response**:
```json
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
}
```

If the club does not exist, the player does not exist, or the player is not a member of the club, the response will contain an empty role and the current timestamp:

```json
{
  "accountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
  "clubId": 1,
  "role": "",
  "creationTimestamp": 1661449122,
  "vip": false,
  "moderator": false,
  "hasFeatured": false,
  "pin": false,
  "useTag": false
}
```
