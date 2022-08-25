---
name: Get clubs

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club?length={length}&offset={offset}&name={name}

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
    - name: name
      type: string
      description: A string to search for in the club names
      required: false
---

Gets a list of clubs.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/club?length=3&offset=0
```

**Example response**:
```json
{
  "clubList": [
    {
      "id": 51082,
      "name": "GREEN GAME JAM",
      "tag": "GGJ22",
      "description": "Welcome to the Trackmania Green Game Jam 2022!",
      "authorAccountId": "2116b392-d808-4264-923f-2bfcfa60a570",
      "iconUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/icon/51082/62c6e5faeeb76.png?updateTimestamp=1657202173.png",
      "logoUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/logo/51082/62c595878fc17.dds?updateTimestamp=1657116040.dds",
      "decalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal/51082/62c595f41c546.dds?updateTimestamp=1657116149.dds",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/screen_16x9/51082/62c595f2cab4c.dds?updateTimestamp=1657116148.dds",
      "decalSponsor4x1Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal_sponsor_4x1/51082/62c595f1962e2.dds?updateTimestamp=1657116146.dds",
      "screen8x1Url": "",
      "screen16x1Url": "",
      "verticalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/vertical/51082/62c595c18e9db.png?updateTimestamp=1657116100.png",
      "backgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/background/51082/62c595b51342b.png?updateTimestamp=1657116089.png",
      "creationTimestamp": 1657116039,
      "popularityLevel": 3,
      "state": "public",
      "featured": true,
      "walletUid": "b4a3cc2a-e187-48ea-a2b2-b9492efd326c",
      "metadata": ""
    },
    {
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
    },
    {
      "id": 4764,
      "name": "$fffTM$ec0School",
      "tag": "$FFFTM$EC0S",
      "description": "All you need for starting Trackmania ! \nAll made by Aqlx. $l[https://discord.gg/rPFGr3m]$ec0DISCORD",
      "authorAccountId": "a26bcfd0-cd7f-4477-b514-eab711dfaf61",
      "iconUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/icon/4764/621a7abff14c0.png?updateTimestamp=1645902532.png",
      "logoUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/logo/4764/621a7ab5b847b.png?updateTimestamp=1645902520.png",
      "decalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal/4764/621a7ab704d1e.png?updateTimestamp=1645902522.png",
      "screen16x9Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/screen_16x9/4764/621b5c77542f9.dds?updateTimestamp=1645960312.dds",
      "decalSponsor4x1Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/decal_sponsor_4x1/4764/621a7ac583489.png?updateTimestamp=1645902536.png",
      "screen8x1Url": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/screen_8x1/4764/621a7adf60af2.dds?updateTimestamp=1645902560.dds",
      "screen16x1Url": "",
      "verticalUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/vertical/4764/6283aaf0043c2.png?updateTimestamp=1652796147.png",
      "backgroundUrl": "https://trackmania-prod-nls-file-store-s3.cdn.ubi.com/club/background/4764/621a7ac25ffa9.png?updateTimestamp=1645902538.png",
      "creationTimestamp": 1593724621,
      "popularityLevel": 1,
      "state": "public",
      "featured": true,
      "walletUid": "5f0c19eb-9f24-4f5c-8904-5eadda6fb52a",
      "metadata": ""
    }
  ],
  "maxPage": 134,
  "clubCount": 402
}
```
