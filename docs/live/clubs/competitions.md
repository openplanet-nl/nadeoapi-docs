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

**Remarks**:

- This endpoint does not return all available club competitions. When excluding the `name` parameter, it returns all verified clubs' competitions - otherwise the response is limited to 200 competitions.

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
      "competitionId": 11125,
      "mediaUrl": "",
      "mediaTheme": "",
      "popularityLevel": 3,
      "popularityValue": 101231,
      "id": 486751,
      "clubId": 66661,
      "clubName": "Ubisoft Club",
      "name": "LASERHAWK",
      "creationTimestamp": 1698225982,
      "creatorAccountId": "0060a0c1-2e62-41e7-9db7-c86236af3ac4",
      "latestEditorAccountId": "7ad33388-641e-4497-b063-c88e75552645"
    },
    {
      "competitionId": 7184,
      "mediaUrl": "",
      "mediaTheme": "",
      "popularityLevel": 3,
      "popularityValue": 101231,
      "id": 421113,
      "clubId": 66661,
      "clubName": "Ubisoft Club",
      "name": "Mirage",
      "creationTimestamp": 1687429155,
      "creatorAccountId": "0060a0c1-2e62-41e7-9db7-c86236af3ac4",
      "latestEditorAccountId": "50e65436-8ad7-40fb-9e02-ed09f267e55f"
    },
    {
      "competitionId": 5636,
      "mediaUrl": "",
      "mediaTheme": "",
      "popularityLevel": 3,
      "popularityValue": 90732,
      "id": 380198,
      "clubId": 54094,
      "clubName": "CUPRA",
      "name": "Cupra cup 2",
      "creationTimestamp": 1682528914,
      "creatorAccountId": "6ce163d5-f240-4741-870b-f2adad843865",
      "latestEditorAccountId": "6ce163d5-f240-4741-870b-f2adad843865"
    }
  ],
  "maxPage": 10,
  "itemCount": 28
}
```
