---
name: Get club competition

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/club-competitions/{clubCompetitionId}

audience: NadeoLiveServices

parameters:
  path:
    - name: clubCompetitionId
      type: integer
      description: A valid activity ID of a club competition
      required: true
---

Gets the details of a club competition by its activity ID.

---

**Remarks**:

- Using the `id` field in the response, you can retrieve more detailed information about the competition via the [Competition endpoint](/meet/competitions/competition).

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/club-competitions/139313
```

**Example response**:

```json
{
  "clubCompetition": {
    "id": 160,
    "clubId": 548,
    "activityId": 139313,
    "maxPlayers": 64,
    "type": "DEFAULT",
    "participantAccess": "STANDARD",
    "competition": {
      "id": 332,
      "liveId": "LID-COMP-ad01qfx3bsd2q51",
      "creator": "6969eb50-f6e3-4fb5-876e-f264792e3240",
      "name": "RTG Cup",
      "participantType": "PLAYER",
      "description": "Introducing the $f54R$8F9T$06FG $fffCup! A competition based on tracks built with the Random Track Generator in Trackmania Turbo; but revisited with the new blockset in the latest iteration of Trackmania. 25 maps to learn fast and a prize pool of €100!\n\nChat with the participants on the $78DRTG Discord:$fff $lhttps://discord.gg/BY3UDwPdBf$l\nFollow $29E@RTGCup on Twitter$fff to learn more: $lhttps://twitter.com/RTGCup$l",
      "clubId": 548,
      "activityId": 139313,
      "registrationStart": 1618923600,
      "registrationEnd": 1618923600,
      "startDate": 1619870400,
      "endDate": 1619883600,
      "matchesGenerationDate": null,
      "nbPlayers": 163,
      "spotStructure": "{\"version\":1,\"rounds\":[{\"name\":\"\",\"matchGeneratorType\":\"spot_filler\",\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":1},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":32},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":33},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":64}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":2},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":31},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":34},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":63}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":3},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":30},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":35},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":62}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":4},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":29},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":36},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":61}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":5},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":28},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":37},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":60}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":6},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":27},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":38},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":59}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":7},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":26},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":39},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":58}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":8},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":25},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":40},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":57}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":9},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":24},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":41},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":56}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":10},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":23},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":42},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":55}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":11},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":22},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":43},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":54}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":12},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":21},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":44},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":53}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":13},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":20},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":45},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":52}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":14},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":19},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":46},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":51}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":15},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":18},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":47},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":50}]},{\"spots\":[{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":16},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":17},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":48},{\"spotType\":\"challenge_participant\",\"challengeId\":224,\"rank\":49}]}]}},{\"name\":\"\",\"matchGeneratorType\":\"spot_filler\",\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":0,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":8,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":7,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":15,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":1,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":9,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":0,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":8,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":2,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":10,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":1,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":9,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":3,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":11,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":2,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":10,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":4,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":12,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":3,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":11,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":5,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":13,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":4,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":12,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":6,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":14,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":5,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":13,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":7,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":15,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":6,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":0,\"matchPosition\":14,\"rank\":2}]}]}},{\"name\":\"\",\"matchGeneratorType\":\"spot_filler\",\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":0,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":4,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":3,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":7,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":1,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":5,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":0,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":4,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":2,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":6,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":1,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":5,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":3,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":7,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":2,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":1,\"matchPosition\":6,\"rank\":2}]}]}},{\"name\":\"\",\"matchGeneratorType\":\"spot_filler\",\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":0,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":2,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":1,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":3,\"rank\":2}]},{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":1,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":3,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":0,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":2,\"matchPosition\":2,\"rank\":2}]}]}},{\"name\":\"\",\"matchGeneratorType\":\"spot_filler\",\"matchGeneratorData\":{\"matches\":[{\"spots\":[{\"spotType\":\"match_participant\",\"roundPosition\":3,\"matchPosition\":0,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":3,\"matchPosition\":1,\"rank\":1},{\"spotType\":\"match_participant\",\"roundPosition\":3,\"matchPosition\":0,\"rank\":2},{\"spotType\":\"match_participant\",\"roundPosition\":3,\"matchPosition\":1,\"rank\":2}]}]}}]}",
      "leaderboardId": 1151,
      "manialink": null,
      "rulesUrl": null,
      "streamUrl": null,
      "websiteUrl": null,
      "logoUrl": "https://trackmania-prod-club-public.s3.eu-west-1.amazonaws.com/competitions/club/139313/logo/qx1flzj0darurljayib2.png",
      "verticalUrl": "https://trackmania-prod-club-public.s3.eu-west-1.amazonaws.com/competitions/club/139313/vertical/hokmohihqlhkzoeqtfnr.png",
      "allowedZones": [],
      "deletedOn": null,
      "partition": "crossplay",
      "autoNormalizeSeeds": true,
      "region": null,
      "autoGetParticipantSkillLevel": "DISABLED",
      "matchAutoMode": "ENABLED"
    },
    "externalRegistrationUrl": null
  },
  "rounds": [
    {
      "id": 624,
      "name": "Phase 2: Rounds",
      "position": 0,
      "status": null,
      "startDate": 1619870400,
      "endDate": 1619872500,
      "nbMatches": 0,
      "qualifierChallenge": {
        "id": 224,
        "name": "RTG Cup - qualifier",
        "startDate": 1619868600,
        "endDate": 1619869800,
        "isCompleted": false,
        "servers": []
      }
    },
    {
      "id": 625,
      "name": "Phase 3: Rounds",
      "position": 1,
      "status": null,
      "startDate": 1619873100,
      "endDate": 1619875200,
      "nbMatches": 0,
      "qualifierChallenge": null
    },
    {
      "id": 626,
      "name": "Phase 4: Rounds",
      "position": 2,
      "status": null,
      "startDate": 1619875800,
      "endDate": 1619878500,
      "nbMatches": 0,
      "qualifierChallenge": null
    },
    {
      "id": 627,
      "name": "Phase 5: Rounds",
      "position": 3,
      "status": null,
      "startDate": 1619878500,
      "endDate": 1619880600,
      "nbMatches": 0,
      "qualifierChallenge": null
    },
    {
      "id": 628,
      "name": "Phase 6: Cup (Finals)",
      "position": 4,
      "status": null,
      "startDate": 1619881200,
      "endDate": 1619883600,
      "nbMatches": 0,
      "qualifierChallenge": null
    }
  ],
  "participant": {
    "participant": "5b4d42f4-c2de-407d-b367-cbff3fe817bc",
    "zone": "World",
    "registration": 1618772273,
    "seed": null,
    "addedBy": "6969eb50-f6e3-4fb5-876e-f264792e3240",
    "team": null,
    "checkInDate": null,
    "groupId": null,
    "skillLevel": null
  },
  "currentMatchLiveId": null,
  "currentQualifierChallenge": {
    "id": 224,
    "name": "RTG Cup - qualifier",
    "startDate": 1619868600,
    "endDate": 1619869800,
    "isCompleted": false,
    "servers": []
  },
  "isRegistrationOngoing": false
}
```

If a `clubCompetitionId` is invalid, the response will contain a `404` response code.
