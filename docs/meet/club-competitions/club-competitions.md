---
name: Get club competitions

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/me/club-competitions?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of competitions to retrieve
      default: 0
      max: 100
    - name: offset
      type: integer
      description: The number of competitions to skip
      default: 0
---

Gets a list of competitions in clubs the current user is a member of.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- This endpoint requires the current user to own Club Access - otherwise they can't join any clubs, and this endpoint will always respond with an empty list.

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/me/club-competitions?length=1&offset=3
```

**Example response**:

```json
{
  "clubCompetitions": [
    {
      "activityId": 139313,
      "clubId": 548,
      "maxPlayers": 64,
      "type": "DEFAULT",
      "name": "RTG Cup",
      "logoUrl": "https://trackmania-prod-club-public.s3.eu-west-1.amazonaws.com/competitions/club/139313/logo/qx1flzj0darurljayib2.png",
      "verticalUrl": "https://trackmania-prod-club-public.s3.eu-west-1.amazonaws.com/competitions/club/139313/vertical/hokmohihqlhkzoeqtfnr.png"
    }
  ],
  "clubCompetitionsCount": 4
}
```

If no relevant club competitions exist, the response will contain an empty array:

```json
{
  "clubCompetitions": [],
  "clubCompetitionsCount": 0
}
```
