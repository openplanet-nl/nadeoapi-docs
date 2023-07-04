---
name: Get matchmaking IDs

url: https://matchmaking.trackmania.nadeo.club
method: GET
route: /api/official/summary

audience: NadeoClubServices
---

Gets internal identifiers for the different matchmaking modes.

---

**Example request**:
```plain
GET https://matchmaking.trackmania.nadeo.club/api/official/summary
```

**Example response**:
```json
{
    "ranked3v3Id": 2,
    "ranked_3v3_id": 2,
    "royalId": 3,
    "royal_id": 3,
    "superRoyalId": 4,
    "super_royal_id": 4
}
```
