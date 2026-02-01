---
name: Get official cups

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/cups-of-the-day?type={type}&length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  query:
    - name: type
      type: string
      description: The type of cup to retrieve
      default: cotd
    - name: length
      type: integer
      description: The number of cups to retrieve
      default: 10
      max: 100
    - name: offset
      type: integer
      description: The number of cups to skip
      default: 0
---

Gets a list of official cups (including COTD, COTW and Grand Enduro Race).

---

**Remarks**:

- Supported types are `cotd`, `cotw`, and `grand_race`.
- No matter the requested type, the response structure contains a `COTDs` top-level object.
- The response includes all reruns and platform-exclusive cups.

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/cups-of-the-day?type=cotd&length=1&offset=0
```

**Example response**:

```json
{
  "COTDs": [
    {
      "id": 17421,
      "edition": 3,
      "competition": {
        "id": 40905,
        "liveId": "LID-COMP-ghzsgyccacqmh3h",
        "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
        "name": "COTD 2026-01-31 #3 luna",
        "participantType": "PLAYER",
        "description": null,
        "registrationStart": null,
        "registrationEnd": null,
        "startDate": 1769940990,
        "endDate": 1769948190,
        "matchesGenerationDate": 1769940965,
        "nbPlayers": 0,
        "spotStructure": "{\"version\":1,\"rounds\":[{\"matchGeneratorData\":{\"matchSize\":64,\"matchGeneratorType\":\"daily_cup\"},\"matchGeneratorType\":\"daily_cup\"}]}",
        "leaderboardId": 101184,
        "manialink": null,
        "rulesUrl": null,
        "streamUrl": null,
        "websiteUrl": null,
        "logoUrl": null,
        "verticalUrl": null,
        "allowedZones": [],
        "deletedOn": null,
        "autoNormalizeSeeds": true,
        "region": "eu-west",
        "autoGetParticipantSkillLevel": "DISABLED",
        "matchAutoMode": "ENABLED",
        "partition": "luna",
        "clubId": null,
        "activityId": null
      },
      "challenge": {
        "id": 19095,
        "uid": "3b006ae1-c4f3-4c98-b7cf-3a1285bc6c4c",
        "name": "COTD 2026-01-31 #3 luna - Challenge",
        "scoreDirection": "ASC",
        "startDate": 1769940060,
        "endDate": 1769940960,
        "status": "HAS_SERVERS",
        "resultsVisibility": "PUBLIC",
        "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
        "admins": [
          "6ce163d5-f240-4741-870b-f2adad843865",
          "9b11ca6f-a7b6-437f-9b32-7b9a204543d2",
          "50e65436-8ad7-40fb-9e02-ed09f267e55f"
        ],
        "nbServers": 0,
        "autoScale": false,
        "nbMaps": 1,
        "leaderboardId": 101183,
        "deletedOn": null,
        "leaderboardType": "SUM",
        "completeTimeout": 5
      },
      "startDate": 1769940060,
      "endDate": 1769948190,
      "deletedOn": null
    }
  ]
}
```
