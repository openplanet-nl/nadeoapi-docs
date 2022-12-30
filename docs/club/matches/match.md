---
name: Get match information

url: https://club.trackmania.nadeo.club
method: GET
route: /api/matches/{matchId}

audience: NadeoClubServices

parameters:
  path:
    - name: matchId
      type: string
      description: A valid match ID
      required: true
---

Gets match information for a given match ID.

---

**Remarks**:
- Match information is only stored on Nadeo's servers for about a month - afterwards, requesting it will only result in a `404` response code.
- There are two different match IDs which are both supported by this endpoint - the primary `id` is always numerical, while the `liveId` is a string typically starting with `"LID-MTCH-`.

---

**Example request**:
```plain
GET https://club.trackmania.nadeo.club/api/matches/3018551
```

**Example response**:
```json
{
    "id": 3018551,
    "liveId": "LID-MTCH-hbwk5tnbsddmnhd",
    "name": "Official 3v3 - match",
    "startDate": 1663417867,
    "endDate": 1663419667,
    "scoreDirection": "DESC",
    "serverConfig": {
        "name": "default",
        "script": "TrackMania/TM_Teams_Matchmaking_Online.Script.txt",
        "scriptSettings": {
            "S_WarmUpNb": 1,
            "S_WarmUpDuration": 30,
            "S_UseCustomPointsRepartition": true,
            "S_NoRoundTie": true,
            "S_BalanceScore": true,
            "S_PointsRepartition": "6,5,4,3,2,1",
            "S_DecoImageUrl_WhoAmIUrl": "",
            "S_ScriptEnvironment": "test",
            "S_MatchmakingId": "2"
        },
        "password": "",
        "maxPlayers": 10,
        "maxSpectators": 10,
        "plugin": "server-plugins/Club/ClubPlugin.Script.txt",
        "pluginSettings": {
            "S_ImmutableMatch": true,
            "S_AutoStartMode": "light",
            "S_EnableMatchSheet": false
        },
        "maps": [
            "WDOdgubY3FTn3pKE8enDMhaEs_3"
        ],
        "voteRatios": {
            "ban": -1,
            "kick": -1,
            "restartMap": -1,
            "nextMap": -1,
            "jumpToMapIndex": -1,
            "jumpToMapIdent": -1,
            "setNextMapIndex": -1,
            "setNextMapIdent": -1,
            "autoTeamBalance": -1,
            "setModeScriptSettings": -1
        }
    },
    "serverId": 4092404,
    "serverStatus": "DELETED",
    "joinLink": "#join=oCwp9D8ISxGEyAIDlBuk2Q@Trackmania",
    "status": "COMPLETED",
    "participantType": "team",
    "manialink": "",
    "deletedOn": null,
    "group": "matchmaking_2",
    "policy": null,
    "region": null,
    "autoMode": "ENABLED"
}
```

If a `matchId` is invalid, the response will contain a `404` response code.
