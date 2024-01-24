---
name: Get club competitions

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/club/competition?length={length}&offset={offset}&name={name}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of competitions to retrieve
      required: true
      maximum: 250
    - name: offset
      type: integer
      description: The number of competitions to skip
      required: true
    - name: name
      type: string
      description: A string to search for in the competition names
      required: false
---

Gets a list of club competitions.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/club/competition?length=3&offset=0
```

**Example response**:

```json
{
  "clubCompetitionList": [
    {
      "competitionId": 2857,
      "mediaUrl": "https://trackmania-prod-club-public.s3-eu-west-1.amazonaws.com/manual/competitions/tmgl/logo_tmgl.png",
      "popularityLevel": 1,
      "popularityValue": 2447,
      "id": 287991,
      "clubId": 383,
      "clubName": "Grand League",
      "name": "World cup qualifier",
      "creationTimestamp": 1654676009
    },
    {
      "competitionId": 2469,
      "mediaUrl": "https://trackmania-prod-club-public.s3-eu-west-1.amazonaws.com/manual/competitions/tmgl/logo_tmgl.png",
      "popularityLevel": 1,
      "popularityValue": 2447,
      "id": 269522,
      "clubId": 383,
      "clubName": "Grand League",
      "name": "TMGL The Final",
      "creationTimestamp": 1650531477
    },
    {
      "competitionId": 2417,
      "mediaUrl": "https://trackmania-prod-club-public.s3-eu-west-1.amazonaws.com/manual/competitions/tmgl/logo_tmgl.png",
      "popularityLevel": 1,
      "popularityValue": 2447,
      "id": 265140,
      "clubId": 383,
      "clubName": "Grand League",
      "name": "TMGL Final Chance",
      "creationTimestamp": 1649770818
    }
  ],
  "maxPage": 10,
  "itemCount": 30
}
```
