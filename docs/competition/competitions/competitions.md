---
name: Get competitions

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/competitions?length={length}&offset={offset}

audience: NadeoClubServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of competitions to retrieve (maximum 100)
      required: false
      default: 10
      max: 100
    - name: offset
      type: integer
      description: The number of competitions to skip
      required: false
      default: 0
---

Gets a list of competitions.

---

**Remarks**:
- The response includes Super Royal and COTD instances as well as community-made competitions.

---

**Example request**:
```plain
GET https://competition.trackmania.nadeo.club/api/competitions?length=3&offset=5
```

**Example response**:
```json
[
    {
        "id": 3633,
        "liveId": "LID-COMP-4uviu3rgnjxr4yx",
        "creator": "bb961ea9-bb72-49c2-9294-fb0a34fb7591",
        "name": "Baltic Weekly #2",
        "participantType": "PLAYER",
        "description": "Single Elimination Cup mode event for all Baltic players.\n\n Format\nTime Attack -> (Top 16) Single Elimination Cup Mode\nMaps: FastPoint",
        "registrationStart": 1663399920,
        "registrationEnd": 1663422900,
        "startDate": 1663425300,
        "endDate": 1663431300,
        "matchesGenerationDate": null,
        "nbPlayers": 8,
        "spotStructure": "{\"version\":0,\"rounds\":[{\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"roundPosition\":0,\"rank\":1,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":8,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":9,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":16,\"spotType\":\"round_challenge_participant\"}],\"settings\":[]},{\"spots\":[{\"roundPosition\":0,\"rank\":4,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":5,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":12,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":13,\"spotType\":\"round_challenge_participant\"}],\"settings\":[]},{\"spots\":[{\"roundPosition\":0,\"rank\":2,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":7,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":10,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":15,\"spotType\":\"round_challenge_participant\"}],\"settings\":[]},{\"spots\":[{\"roundPosition\":0,\"rank\":3,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":6,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":11,\"spotType\":\"round_challenge_participant\"},{\"roundPosition\":0,\"rank\":14,\"spotType\":\"round_challenge_participant\"}],\"settings\":[]}]},\"matchGeneratorType\":\"spot_filler\"},{\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"roundPosition\":0,\"matchPosition\":0,\"rank\":1,\"spotType\":\"match_participant\"},{\"roundPosition\":0,\"matchPosition\":1,\"rank\":2,\"spotType\":\"match_participant\"},{\"roundPosition\":0,\"matchPosition\":2,\"rank\":4,\"spotType\":\"match_participant\"},{\"roundPosition\":0,\"matchPosition\":3,\"rank\":1,\"spotType\":\"match_participant\"}],\"settings\":[]},{\"spots\":[{\"roundPosition\":0,\"matchPosition\":3,\"rank\":2,\"spotType\":\"match_participant\"},{\"roundPosition\":0,\"matchPosition\":2,\"rank\":1,\"spotType\":\"match_participant\"},{\"roundPosition\":0,\"matchPosition\":1,\"rank\":1,\"spotType\":\"match_participant\"},{\"roundPosition\":0,\"matchPosition\":0,\"rank\":2,\"spotType\":\"match_participant\"}],\"settings\":[]}]},\"matchGeneratorType\":\"spot_filler\"},{\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"roundPosition\":1,\"matchPosition\":0,\"rank\":1,\"spotType\":\"match_participant\"},{\"roundPosition\":1,\"matchPosition\":1,\"rank\":1,\"spotType\":\"match_participant\"},{\"roundPosition\":1,\"matchPosition\":1,\"rank\":2,\"spotType\":\"match_participant\"},{\"roundPosition\":1,\"matchPosition\":0,\"rank\":2,\"spotType\":\"match_participant\"}],\"settings\":[]}]},\"matchGeneratorType\":\"spot_filler\"}]}",
        "leaderboardId": 9109,
        "manialink": null,
        "rulesUrl": "https://discord.gg/G9nr3Pa",
        "streamUrl": null,
        "websiteUrl": null,
        "logoUrl": "https://trackmania-prod-club-public.s3.eu-west-1.amazonaws.com/competitions/club/315965/logo/odckbboirc4wbs53pe4o.png",
        "verticalUrl": null,
        "allowedZones": [
            "World|Europe|Latvia",
            "World|Europe|Estonia",
            "World|Europe|Lithuania"
        ],
        "deletedOn": null,
        "autoNormalizeSeeds": true,
        "region": null,
        "autoGetParticipantSkillLevel": "DISABLED",
        "matchAutoMode": "START"
    },
    {
        "id": 3631,
        "liveId": "LID-COMP-j4euw3yc3cawoxs",
        "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
        "name": "Cup of the Day 2022-09-16 #3",
        "participantType": "PLAYER",
        "description": null,
        "registrationStart": null,
        "registrationEnd": null,
        "startDate": 1663406190,
        "endDate": 1663413390,
        "matchesGenerationDate": 1663406165,
        "nbPlayers": 280,
        "spotStructure": "{\"version\":1,\"rounds\":[{\"matchGeneratorData\":{\"matchSize\":64,\"matchGeneratorType\":\"daily_cup\"},\"matchGeneratorType\":\"daily_cup\"}]}",
        "leaderboardId": 9093,
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
        "matchAutoMode": "ENABLED"
    },
    {
        "id": 3627,
        "liveId": "LID-COMP-zaarrvawzmixnpv",
        "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
        "name": "Super royal 2022-09-16 #2",
        "participantType": "TEAM",
        "description": null,
        "registrationStart": null,
        "registrationEnd": null,
        "startDate": 1663381260,
        "endDate": 1663388400,
        "matchesGenerationDate": 1663381260,
        "nbPlayers": 45,
        "spotStructure": "{\"version\":1,\"rounds\":[{\"matchGeneratorType\":\"super_royal_first_round\"},{\"matchGeneratorType\":\"super_royal_next_round\"},{\"matchGeneratorType\":\"super_royal_next_round\"},{\"matchGeneratorType\":\"super_royal_next_round\"}]}",
        "leaderboardId": 9081,
        "manialink": null,
        "rulesUrl": null,
        "streamUrl": null,
        "websiteUrl": null,
        "logoUrl": null,
        "verticalUrl": null,
        "allowedZones": [],
        "deletedOn": null,
        "autoNormalizeSeeds": false,
        "region": null,
        "autoGetParticipantSkillLevel": "DISABLED",
        "matchAutoMode": "ENABLED"
    }
]
```

If a `competitionId` is invalid, the response will contain a `404` response code.
