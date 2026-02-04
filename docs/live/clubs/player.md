---
name: Get your club player info

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/player/info

audience: NadeoLiveServices
---

Gets club-related information for your account.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/player/info
```

**Example response**:

```json
{
  "hasClubVip": true,
  "hasPlayerVip": true,
  "hasFollower": true,
  "tagClubId": 12730,
  "tag": "$F05TSH",
  "pinnedClub": 12730,
  "pinnedClubName": "TM SCENERY HUB"
}
```
