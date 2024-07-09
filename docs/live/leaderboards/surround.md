---
name: Get surrounding records for a score

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/map/{mapUid}/surround/{lower}/{upper}?score={score}

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

- The `groupUid` `"Personal_Best"` can be used to get the global leaderboard.
- When using a different `groupUid`, make sure you're only referencing currently open leaderboards. Maps with closed leaderboards will result in an empty response.
- The `lower` and `upper` parameters used to support more than `1`, but now no more than one upper and one lower record is returned.
- This endpoint can sometimes include a delay due to leaderboard calculations happening in the background.
- This endpoint returns precise positions for the first 100,000 records - anything beyond that is not available at the same level of detail.
- When authenticated through a Ubisoft user account that has a zone assigned, the response will include multiple entries in the `tops` array - one for each of the account's assigned sub-zones (representing the leaderboards of the continent, country, city, etc.).
- This endpoint's response always includes the requested score as a fake record (using the requester's account information for the `accountId` and zone data) between the surrounding ones. This is because in-game this endpoint is used to determine surrounding records for your own PB (that might not have fully uploaded to the leaderboards yet), so it supports an arbitrary score value that the game sets based on your PB.
- If the authenticated account has a record on the requested map, no scores lower than that record can be requested - it's recommended to use this endpoint with an account that does not have any records.

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

If the `groupUid` is invalid (or the referenced leaderboard is closed), the response will be an empty object:

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
