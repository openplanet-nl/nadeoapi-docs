---
name: Get current COTD

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/cup-of-the-day/current

audience: NadeoClubServices

---

Gets details for the currently ongoing Cup of the Day.

---

**Remarks**:
- This endpoint only returns data about the cross-platform/"crossplay" COTD. Platform-specific COTD instances are not included.

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/cup-of-the-day/current
```

**Example response**:
```json
{
  "id": 3872,
  "edition": 1,
  "competition": {
    "id": 9263,
    "liveId": "LID-COMP-pdejsjire2fz2ve",
    "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
    "name": "COTD 2023-08-27 #1",
    "participantType": "PLAYER",
    "description": null,
    "registrationStart": null,
    "registrationEnd": null,
    "startDate": 1693156590,
    "endDate": 1693163790,
    "matchesGenerationDate": 1693156565,
    "nbPlayers": 3404,
    "spotStructure": "{\"version\":1,\"rounds\":[{\"matchGeneratorData\":{\"matchSize\":64,\"matchGeneratorType\":\"daily_cup\"},\"matchGeneratorType\":\"daily_cup\"}]}",
    "leaderboardId": 23684,
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
    "partition": "crossplay"
  },
  "challenge": {
    "id": 4595,
    "uid": "4c053e36-b356-431e-af49-081b351438f0",
    "name": "COTD 2023-08-27 #1 - Challenge",
    "scoreDirection": "ASC",
    "startDate": 1693155660,
    "endDate": 1693156560,
    "status": "HAS_SERVERS",
    "resultsVisibility": "PUBLIC",
    "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
    "admins": [
      "0060a0c1-2e62-41e7-9db7-c86236af3ac4",
      "54e4dda4-522d-496f-8a8b-fe0d0b5a2a8f",
      "2116b392-d808-4264-923f-2bfcfa60a570",
      "6ce163d5-f240-4741-870b-f2adad843865",
      "a76653e1-998a-4c53-8a91-0a396e15bfb5"
    ],
    "nbServers": 0,
    "autoScale": false,
    "nbMaps": 1,
    "leaderboardId": 23682,
    "deletedOn": null,
    "leaderboardType": "SUM",
    "completeTimeout": 5
  },
  "startDate": 1693155660,
  "endDate": 1693163790,
  "deletedOn": null
}
```

If there is no COTD currently happening, this endpoint will respond with status code `204` (No content).
