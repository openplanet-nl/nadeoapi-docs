---
name: Get player trophy history

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /accounts/{accountId}/trophies?count={count}&offset={offset}

audience: NadeoServices

parameters:
  path:
    - name: accountId
      type: string
      description: An account ID
      required: true
  query:
    - name: count
      type: integer
      description: The number of entries to retrieve
      default: 100
      max: 1000
    - name: offset
      type: integer
      description: The number of entries to skip (looking back from the most recent)
      default: 0
---

Gets a player's earned trophy history, sorted newest to oldest.

---

**Remarks**:

- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts). If you encounter `401` errors using a dedicated server account, switch to using a Ubisoft account.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/accounts/594be80b-62f3-4705-932b-e743e97882cf/trophies
```

**Example response**:

```json
{
  "count": 100,
  "data": [
    {
      "accountId": "594be80b-62f3-4705-932b-e743e97882cf",
      "t1Count": 0,
      "t2Count": 0,
      "t3Count": 1,
      "t4Count": 1,
      "t5Count": 0,
      "t6Count": 0,
      "t7Count": 0,
      "t8Count": 0,
      "t9Count": 0,
      "timestamp": "2025-08-24T16:52:16+00:00",
      "trophyAchievementInfo": {
        "trophyAchievementId": "5dcea319-a9a4-471f-b48d-c9ce20db71fb",
        "trophyAchievementType": "SoloMedal",
        "trophySoloMedalAchievementType": "WeeklyShorts"
      },
      "trophyGainDetails": {
        "level": 4,
        "previousLevel": 2
      }
    },
    ...
    {
      "accountId": "594be80b-62f3-4705-932b-e743e97882cf",
      "t1Count": 0,
      "t2Count": 0,
      "t3Count": 0,
      "t4Count": 0,
      "t5Count": 3,
      "t6Count": 0,
      "t7Count": 0,
      "t8Count": 0,
      "t9Count": 0,
      "timestamp": "2023-08-12T17:37:36+00:00",
      "trophyAchievementInfo": {
        "trophyAchievementId": "be2893a1-9936-4188-8ee6-6ad8ccef2880",
        "trophyAchievementType": "CompetitionMatch",
        "competitionId": "c7e875a3-6e5c-4de6-b88c-7b7eacc68488",
        "competitionMatchInfo": "",
        "competitionName": "COTD 2023-08-12 #1",
        "competitionStage": "1",
        "competitionStageStep": "3",
        "competitionType": "DailyCup",
        "serverId": "883d8d6f-9bbc-4f83-9eca-b94d85a97075"
      },
      "trophyGainDetails": {
        "rank": 9
      }
    }
  ],
  "offset": 0,
  "totalCount": 2978
}
```

If the `accountId` is a valid UUID but does not correspond to a real account, the response will contain all 0's:

```json
{
  "count": 0,
  "data": [],
  "offset": 0,
  "totalCount": 0
}
```

If the `accountId` is invalid, the response will contain an error message:

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "8c3304a24f360916169a457e67b3a381",
  "message": "There was a validation error.",
  "info": [
    "accountId: \u0022test\u0022 is not a valid UUID."
  ]
}
```
