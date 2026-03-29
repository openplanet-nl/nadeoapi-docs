---
name: Get season/campaign club leaderboard

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/club/{clubId}/top?length={length}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: groupUid
      type: string
      description: The ID of the group/season
      required: true
    - name: clubId
      type: string
      description: The ID of the club
      required: true
  query:
    - name: length
      type: integer
      description: The number of ranks to retrieve
      default: 5
    - name: offset
      type: integer
      description: The number of ranks to skip
      default: 0
---

Gets the leaderboard of a club for the given group/season/campaign.

---

**Remarks**:

- The `groupUid` `"Personal_Best"` cannot be used for this endpoint because it requires a group that refers to a campaign or season.
- Unlike some other leaderboard-related endpoints that use a `groupUid` parameter, this one also supports groups/seasons that are already closed.
- The `position` field is the rank of the player within the club, instead of their rank in the season/campaign itself.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/dccdf820-6a24-4ab1-9078-58fea41282db/club/9/top?offset=0&length=5
```

**Example response**:

```json
{
  "top": [
    {
      "accountId": "61e24c6b-8410-4998-82fe-cacc36d3ce7e",
      "zoneId": "30209e41-7e13-11e8-8060-e284abfd2bc4",
      "position": 1,
      "zoneName": "Zuid-Holland",
      "sp": "45314"
    },
    {
      "accountId": "421db8c7-7208-4e30-b89d-464c93a37847",
      "zoneId": "3022c725-7e13-11e8-8060-e284abfd2bc4",
      "position": 2,
      "zoneName": "Kentucky",
      "sp": "40638"
    },
    {
      "accountId": "02a822c2-5c84-4ec9-b15e-f43a736ce4e0",
      "zoneId": "301e3b69-7e13-11e8-8060-e284abfd2bc4",
      "position": 3,
      "zoneName": "Victoria",
      "sp": "37121"
    },
    {
      "accountId": "908ae383-a5d3-4bc5-ae16-ad1113d19317",
      "zoneId": "301e309b-7e13-11e8-8060-e284abfd2bc4",
      "position": 4,
      "zoneName": "New South Wales",
      "sp": "34924"
    },
    {
      "accountId": "dc029c0a-5188-4765-8e55-91066d425fba",
      "zoneId": "301febb8-7e13-11e8-8060-e284abfd2bc4",
      "position": 5,
      "zoneName": "Loire-Atlantique",
      "sp": "33839"
    }
  ],
  "clubId": 9,
  "groupUid": "dccdf820-6a24-4ab1-9078-58fea41282db",
  "length": 588
}
```

If the `clubId` is invalid, the response will contain an empty list:

```json
{
  "top": [],
  "clubId": 1239790,
  "groupUid": "dccdf820-6a24-4ab1-9078-58fea41282db",
  "length": 0
}
```

An invalid `groupUid` results in a `200` response code and an empty response.
