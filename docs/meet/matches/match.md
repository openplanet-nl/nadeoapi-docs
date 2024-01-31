---
name: Get match information

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matches/{matchId}

audience: NadeoLiveServices

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
- As of February 2023, this endpoint no longer included any `serverConfig` data. You can find the previous response structure at the bottom of the page for reference.
- As of 2024-01-22, the endpoint's response was adjusted to again include the script name and related maps (identified by their `mapUid`).

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/matches/8410984
```

**Example response**:

```json
{
  "id": 8410984,
  "liveId": "LID-MTCH-ahrwj00ccqenvrx",
  "name": "Official 3v3 - match",
  "startDate": 1705929747,
  "endDate": 1705931547,
  "status": "ONGOING",
  "participantType": "team",
  "joinLink": "#join=TmnMwMfaQ0m4HzkwXKOOxA@Trackmania",
  "serverStatus": "STARTED",
  "manialink": null,
  "publicConfig": {
    "script": "TrackMania/TM_Teams_Matchmaking_Online.Script.txt",
    "maps": ["OsaDprWoMJSbmNVGSVz9_W7ue0d"]
  }
}
```

If a `matchId` is invalid, the response will contain a `404` response code.

---

This endpoint was changed in February 2023 to no longer include the `serverConfig` along with the removal of several other fields - the previous response structure can be found below for reference.

**Request**:

```plain
GET https://club.trackmania.nadeo.club/api/matches/3018551
```

**Response**:

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
    "maps": ["WDOdgubY3FTn3pKE8enDMhaEs_3"],
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
