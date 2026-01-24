---
name: Get matchmaking IDs

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/official/summary

audience: NadeoLiveServices
---

Gets internal identifiers for the different matchmaking modes.

---

**Remarks**:

- As of July 2025 this endpoint may return outdated information and deprecated matchmaking types. See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/official/summary
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
