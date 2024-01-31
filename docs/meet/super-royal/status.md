---
name: Get Super Royal status

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/me/super-royal/current

audience: NadeoLiveServices
---

Gets information about the current Super Royal competition.

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
