---
name: Get player season rankings

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupId}?accountId={accountId}

audience: NadeoLiveServices

parameters:
  path:
    - name: groupId
      type: string
      description: The ID of the group/season
      required: true
  query:
    - name: accountId
      type: string
      description: A player's account ID
      required: true
---

Gets the player's regional ranks for the given group/season.

---

**Remarks**:
- The `groupId` `"Personal_Best"` cannot be used for this endpoint because it requires a group that refers to a campaign or season.
- Unlike some other leaderboard-related endpoints that use a `groupId` parameter, this one also supports groups/seasons that are already closed.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/ee54d6c5-954c-49b9-bd82-b51f8175b3f7?accountId=5b4d42f4-c2de-407d-b367-cbff3fe817bc
```

**Example response**:
```json
{
  "groupUid": "ee54d6c5-954c-49b9-bd82-b51f8175b3f7",
  "sp": "2809",
  "zones": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "ranking": {
        "position": 200000,
        "length": 0
      }
    },
    {
      "zoneId": "301e2106-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Europe",
      "ranking": {
        "position": 90000,
        "length": 0
      }
    },
    {
      "zoneId": "301ff622-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Germany",
      "ranking": {
        "position": 20000,
        "length": 0
      }
    },
    {
      "zoneId": "301ff6b7-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Baden-Württemberg",
      "ranking": {
        "position": 2338,
        "length": 0
      }
    },
    {
      "zoneId": "301ff90f-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Stuttgart",
      "ranking": {
        "position": 1409,
        "length": 0
      }
    }
  ]
}
```

If the `groupId` or the `accountId` is invalid, the response will be an empty object:

```json
{}
```
