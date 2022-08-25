---
name: Get your clubs

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/mine?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of clubs to retrieve
      required: true
    - name: offset
      type: integer
      description: The number of clubs to skip
      required: true
---

Gets clubs that you are a member of.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/mine?length=3&offset=0
```

**Example response**:
```json
{
  "clubList": [
    {
      "role": "Admin",
      "id": 12730,
      "name": "$sTM SCENERY HUB",
      "tag": "$F05TSH",
      "description": "TRACKMANIA SCENERY HUB",
      "authorAccountId": "144fce06-9b90-4af9-a5b0-9148bcc0566f",
      "iconUrl": "",
      "logoUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/logo/12730/61a4146a49662.png?updateTimestamp=1638143084.png",
      "decalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal/12730/61a4146b772f4.png?updateTimestamp=1638143086.png",
      "screen16x9Url": "",
      "decalSponsor4x1Url": "",
      "screen8x1Url": "",
      "screen16x1Url": "",
      "verticalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/vertical/12730/61a4165ea9f4a.png?updateTimestamp=1638143585.png",
      "backgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/background/12730/61a416d3aa1de.png?updateTimestamp=1638143705.png",
      "creationTimestamp": 1594732383,
      "popularityLevel": 1,
      "state": "public",
      "featured": true,
      "walletUid": "5c67101e-f0d5-4f96-943a-87445b139fa5",
      "metadata": ""
    },
    {
      "role": "Member",
      "id": 292,
      "name": "Kem's Klub",
      "tag": "KEMW",
      "description": "Nothing like joining this club and getting absolutely nothing, $iamirite$i?",
      "authorAccountId": "a0d85450-0b61-431e-9291-57b660af4f5f",
      "iconUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/icon/292/608209c72dfed.png?updateTimestamp=1619134920.png",
      "logoUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/logo/292/608208e69a19f.png?updateTimestamp=1619134696.png",
      "decalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal/292/608209c5e881c.png?updateTimestamp=1619134919.png",
      "screen16x9Url": "",
      "decalSponsor4x1Url": "",
      "screen8x1Url": "",
      "screen16x1Url": "",
      "verticalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/vertical/292/608209e0057cf.png?updateTimestamp=1619134945.png",
      "backgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/background/292/607c5492556e0.png?updateTimestamp=1618760854.png",
      "creationTimestamp": 1593041196,
      "popularityLevel": 1,
      "state": "public",
      "featured": true,
      "walletUid": "cc762c0c-02b6-4fd4-960b-d766c59a27ee",
      "metadata": ""
    },
    {
      "role": "Member",
      "id": 607,
      "name": "The Vibe - Wirtual",
      "tag": "$0CDV$2DDI$5EDB$7FDE",
      "description": "We are The Vibe - Strictly here to make Trackmania great again!",
      "authorAccountId": "bd45204c-80f1-4809-b983-38b3f0ffc1ef",
      "iconUrl": "",
      "logoUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/logo/5f6240b70b511.png?updateTimestamp=1600274616.png",
      "decalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal/5f6240b8583bd.png?updateTimestamp=1600274616.png",
      "screen16x9Url": "",
      "decalSponsor4x1Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal_sponsor_4x1/5f6240b897908.png?updateTimestamp=1600274616.png",
      "screen8x1Url": "",
      "screen16x1Url": "",
      "verticalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/vertical/5f6240b8c96e5.png?updateTimestamp=1600274616.png",
      "backgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/background/607/6246be43b15d3.png?updateTimestamp=1648803411.png",
      "creationTimestamp": 1593616941,
      "popularityLevel": 1,
      "state": "public",
      "featured": true,
      "walletUid": "7e735b87-18f1-4f08-aeee-2493c897693f",
      "metadata": ""
    }
  ],
  "maxPage": 14,
  "clubCount": 41
}
```

If you aren't a member of any clubs, the reponse will contain an empty list:

```json
{
  "clubList": [

  ],
  "maxPage": 0,
  "clubCount": 0
}
```
