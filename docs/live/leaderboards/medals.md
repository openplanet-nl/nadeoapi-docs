---
name: Get map medal records

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupId}/map/{mapUid}/medals

audience: NadeoLiveServices

parameters:
  path:
    - name: groupId
      type: string
      description: The ID of the group/season
      required: true
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

Gets automatically selected medal records for a map based on its leaderboard (when available).

---

**Remarks**:
- The `groupId` `"Personal_Best"` can be used to get the global leaderboard.
- Because this endpoint relies on leaderboard records that are close to the medal times, it doesn't always return all (or any) ghosts. Especially maps with a low number of records on the leaderboard won't work well.
- The endpoint only returns records for the gold, silver and bronze medals.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/Personal_Best/map/q1kDVh5fq1OCKfyFjJ2QAnB9UW8/medals
```

**Example response**:
```json
{
  "groupUid": "Personal_Best",
  "mapUid": "q1kDVh5fq1OCKfyFjJ2QAnB9UW8",
  "medals": [
    {
      "medal": "Gold",
      "accountId": "75328b1f-a38e-4ac0-9233-09a98dffd8ca",
      "zoneId": "3022973a-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Zürich",
      "score": 46690
    },
    {
      "medal": "Silver",
      "accountId": "188a5a83-0a14-493b-8155-11986db487ad",
      "zoneId": "3022a07d-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Ukraine",
      "score": 49210
    },
    {
      "medal": "Bronze",
      "accountId": "fbfee29a-76e3-43d8-96d7-bc9b425cfe33",
      "zoneId": "3022e90b-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Ohio",
      "score": 52980
    }
  ]
}
```

If the `groupId` is invalid, the response will be an empty object:

```json
{}
```

If the map does not exist, the response will return an empty list of medals:

```json
{
  "groupUid": "Personal_Best",
  "mapUid": "q1kDVh5fq1OCKfyFjJ2QAnB9UW8_fake",
  "medals": [

  ]
}
```
