---
name: Get Super Royal statistics

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/me/super-royal/stats

audience: NadeoClubServices
---

Gets Super Royal statistics for the current account.

---

**Example request**:
```plain
GET https://competition.trackmania.nadeo.club/api/me/super-royal/stats
```

**Example response**:
```json
{
    "masterWon": 0,
    "goldWon": 1,
    "silverWon": 2,
    "bronzeWon": 5
}
```
