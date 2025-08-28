---
name: Get season/campaign leaderboard

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/top?length={length}&onlyWorld={onlyWorld}&offset={offset}

audience: NadeoLiveServices

parameters:
  path:
    - name: groupUid
      type: string
      description: The ID of the group/season
      required: true
  query:
    - name: length
      type: integer
      description: The number of records to retrieve
      default: 5
      max: 100
    - name: onlyWorld
      type: boolean
      description: Whether to only retrieve records from the world leaderboard
    - name: offset
      type: integer
      description: The number of records to skip
      default: 0
---

Gets the leaderboard for the given group/season/campaign.

---

**Remarks**:

- The `groupUid` `"Personal_Best"` cannot be used for this endpoint because it requires a group that refers to a campaign or season.
- Unlike some other leaderboard-related endpoints that use a `groupUid` parameter, this one also supports groups/seasons that are already closed.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/b44807b9-9284-4730-a184-281069f45b60/top?onlyWorld=true&offset=0&length=100
```

**Example response**:

```json
{
  "groupUid": "b44807b9-9284-4730-a184-281069f45b60",
  "tops": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "top": [
        {
          "accountId": "f37147a8-36f3-4c58-9577-bf0faff3aafa",
          "zoneId": "301e556c-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Tyrol",
          "position": 1,
          "sp": "254088"
        },
        {
          "accountId": "36460791-6ebe-4aa1-8ba4-8f1eab6acc7a",
          "zoneId": "302240ae-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Norte",
          "position": 2,
          "sp": "189560"
        },
        {
          "accountId": "05477e79-25fd-48c2-84c7-e1621aa46517",
          "zoneId": "30202b1c-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Dresden",
          "position": 3,
          "sp": "184999"
        },
        ...
        {
          "accountId": "ba023a24-6fa2-4142-a299-4f85eb2e017f",
          "zoneId": "301f60f6-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Finland",
          "position": 98,
          "sp": "44617"
        },
        {
          "accountId": "172f7930-77e6-4b38-8d97-c461cca430f0",
          "zoneId": "3022b0ab-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Arizona",
          "position": 99,
          "sp": "44495"
        },
        {
          "accountId": "87e8a0b9-fe8f-42e0-a08d-8f39ed56541b",
          "zoneId": "30205761-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Veszprém",
          "position": 100,
          "sp": "44443"
        }
      ]
    }
  ]
}
```

If the `groupUid` is invalid, the response will be an empty object:

```json
{}
```
