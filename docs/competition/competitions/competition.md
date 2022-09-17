---
name: Get competition

url: https://competition.trackmania.nadeo.club
method: GET
route: /api/competitions/{competitionId}

audience: NadeoClubServices

parameters:
  path:
    - name: competitionId
      type: string
      description: A valid competition ID
      required: true
---

Gets competition details for a competition ID.

---

**Remarks**:
- There are two different competition IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-COMP-`.

---

**Example request**:
```plain
GET https://competition.trackmania.nadeo.club/api/competitions/3633
```

**Example response**:
```json
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
}
```

If a `competitionId` is invalid, the response will contain a `404` response code.
