---
name: Get your club player info

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/player/info

audience: NadeoLiveServices
---

Gets club-related information for the authenticated account.

---

**Remarks**:

- This endpoint does not accept requests by dedicated server accounts. See [the Authentication guide](/auth) for more information.

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
