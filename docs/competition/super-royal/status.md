---
name: Get Super Royal status

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/me/super-royal/current

audience: NadeoClubServices
---

Gets information about the current Super Royal competition.

---

**Example request**:
```plain
GET https://competition.trackmania.nadeo.club/api/me/super-royal/current
```

**Example response**:
```json
{
    "startsIn": 15318,
    "status": "pending",
    "matchLiveId": null
}
```
