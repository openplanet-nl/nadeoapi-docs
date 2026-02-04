---
name: Get map medal records

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/map/{mapUid}/medals

audience: NadeoLiveServices

parameters:
  path:
    - name: groupUid
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
- The `groupUid` `"Personal_Best"` can be used to get the global leaderboard.
- Unlike some other leaderboard-related endpoints that use a `groupUid` parameter, this one also supports groups/seasons that are already closed.
- Because this endpoint relies on leaderboard records that are close to the medal times, it doesn't always return all (or any) ghosts. Especially maps with a low number of records on the leaderboard won't work well.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/Personal_Best/map/Kn63nCh9bkaRHcZZsrtf_KcLMH2/medals
```

**Example response**:
```json
{
  "groupUid": "Personal_Best",
  "mapUid": "Kn63nCh9bkaRHcZZsrtf_KcLMH2",
  "medals": [
    {
      "medal": "Author",
      "accountId": "a5f21e96-c8cb-4330-800d-90b506f7b15d",
      "zoneId": "3022e90b-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Ohio",
      "score": 21500
    },
    {
      "medal": "Gold",
      "accountId": "213a4b97-fb65-481d-961c-79a258df8115",
      "zoneId": "301e2c9d-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Argentina",
      "score": 23000
    },
    {
      "medal": "Silver",
      "accountId": "118c8f84-4e41-4919-9e02-decb80ab7944",
      "zoneId": "3022e7ba-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "North Carolina",
      "score": 26000
    },
    {
      "medal": "Bronze",
      "accountId": "fb25a307-c42c-46ec-8af2-94b0c0641490",
      "zoneId": "30204664-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "Greece",
      "score": 33000
    }
  ]
}
```

If the `groupUid` is invalid, the response will be an empty object:

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
