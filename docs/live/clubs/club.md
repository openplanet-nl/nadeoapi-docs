---
name: Get club by ID

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/{clubId}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: string
      description: The club's ID
      required: true
---

Gets information for the specified club.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/9
```

**Example response**:
```json
{
  "id": 9,
  "name": "$s$f39Openplanet $fff",
  "tag": "$N $Z$S$F39$N $S",
  "description": "$l[https://openplanet.dev]Openplanet.dev$l and $l[https://trackmania.io]Trackmania.io$l",
  "authorAccountId": "7398eeb6-9b4e-44b8-a7a1-a2149955ac70",
  "iconUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/icon/9/60c0bb24a82d8.png?updateTimestamp=1623243559.png",
  "logoUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/logo/5f62299a7255c.png?updateTimestamp=1600268699.png",
  "decalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal/5f62299bbeffd.png?updateTimestamp=1600268700.png",
  "screen16x9Url": "",
  "decalSponsor4x1Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal_sponsor_4x1/9/603faada527d3.png?updateTimestamp=1614785244.png",
  "screen8x1Url": "",
  "screen16x1Url": "",
  "verticalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/vertical/5f62299c1d96a.png?updateTimestamp=1600268700.png",
  "backgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/background/5f62299c53093.png?updateTimestamp=1600268700.png",
  "creationTimestamp": 1591385606,
  "popularityLevel": 1,
  "state": "public",
  "featured": true,
  "walletUid": "80b8a93c-c4a3-4fc7-bd79-5bef14c405ee",
  "metadata": ""
}
```

If the club does not exist, the response will contain an error:

```json
[
  "club:error-notFound"
]
```
