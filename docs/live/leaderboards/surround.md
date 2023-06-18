---
name: Get surrounding records for a score

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupId}/map/{mapUid}/surround/{lower}/{upper}?score={score}

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
    - name: lower
      type: integer
      description: The amount of records to return that are lower than the requested score
      required: true
      max: 1
    - name: upper
      type: integer
      description: The amount of records to return that are higher than the requested score
      required: true
      max: 1
  query:
    - name: score
      type: integer
      description: The score/time to get surrounding records for
      required: true
---

Gets surrounding records for a score on a map's leaderboard.

---

**Remarks**:
- The `groupId` `"Personal_Best"` can be used to get the global leaderboard.
- The `lower` and `upper` parameters used to support more than `1`, but now no more than one upper and one lower record is returned.
- This endpoint can sometimes include a delay due to leaderboard calculations happening in the background.

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/Personal_Best/map/mVkXbeiVyQQXIIJhVQcmiwlGDL8/surround/1/1?score=60785
```

**Example response**:
```json
{
  "groupUid": "Personal_Best",
  "mapUid": "mVkXbeiVyQQXIIJhVQcmiwlGDL8",
  "tops": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "top": [
        {
          "accountId": "2a13aa7d-992d-4a7c-a3c5-d29b08b7f8cb",
          "zoneId": "30228671-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Sweden",
          "position": 29,
          "score": 60783
        },
        {
          "accountId": "924598eb-c042-4f12-a189-b7f03c4b83b2",
          "zoneId": "301ff90f-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Stuttgart",
          "position": 30,
          "score": 60785
        },
        {
          "accountId": "794a286c-44d9-4276-83ce-431cba7bab74",
          "zoneId": "302012a4-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Duisburg",
          "position": 31,
          "score": 60797
        }
      ]
    }
  ]
}
```

If the `groupId` is invalid, the response will be an empty object:

```json
{}
```

If the map does not exist, the response will be based off an empty leaderboard (i.e. it only shows the requested score):

```json
{
  "groupUid": "Personal_Best",
  "mapUid": "mVkXbeiVyQQXIIJhVQcmiwlGDL8_fake",
  "tops": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "top": [
        {
          "accountId": "caa61df0-7222-492b-8e39-a23ef67a36bd",
          "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "World",
          "position": 1,
          "score": 60785
        }
      ]
    }
  ]
}
```
