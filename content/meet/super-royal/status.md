---
title: Get Super Royal status
description: Gets information about the current Super Royal competition.
layout: api

menus:
  main:
    parent: Super Royal

params:
  url: https://meet.trackmania.nadeo.club
  method: GET
  route: /api/me/super-royal/current

  audience: NadeoLiveServices
---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/me/super-royal/current
```

**Example response**:

```json
{
  "startsIn": 15318,
  "status": "pending",
  "matchLiveId": null
}
```
