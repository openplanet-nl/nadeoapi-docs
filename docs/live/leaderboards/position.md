---
name: Get record positions by their time

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/leaderboard/group/map?scores[{mapUid}]={score}

audience: NadeoLiveServices

parameters:
  query:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
      max: 50 map UIDs
    - name: score
      type: integer
      description: The score/time (in milliseconds) to get the position for
      required: true
  body:
    - name: groupUid
      type: string
      description: The ID of the group/season for a specific map
      required: true
---

The request body is an array of maps, identified by their mapUids:

```json
{
  "maps": [
    {
      "mapUid": "{mapUid}",
      "groupUid": "{groupUid}"
    }
  ]
}
```

---

Gets position data for one or more records by their score/time.

---

**Remarks**:

- The `groupUid` `"Personal_Best"` can be used to get the global leaderboard.
- When using a different `groupUid`, make sure you're only referencing currently open leaderboards. Maps with closed leaderboards will not be included in the response.
- The `mapUid` parameter in the URL has to correspond with a map in the request body.
- This endpoint supports up to 50 maps at once - they need to be added to the request body's array as well as to the query parameters (see example below).
- This endpoint can sometimes be very delayed - there have been cases where it has returned data that was outdated for multiple hours. On average, this route should be up to date within about three hours - some maps are prioritized though (official campaign maps and current TOTDs), so they are typically updated every five minutes.
- If the authenticated account has a record on the requested map, no scores worse than that record can be requested - it's recommended to use this endpoint with an account that does not have any records.
- The positions returned by this endpoint don't correspond to existing records, instead they tell you what a new record's position would be given the requested score.
- This is technically the same endpoint as [get player records](/live/leaderboards/player-records), but works differently if given query parameters.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/map?scores[gjt2DWATrQ_NdrbrXG0G9oDpTfh]=15800&scores[XiGZvMOqIgT3_g0TdeFa0lxMp46]=17500
```

```json
{
    "maps": [
        {
            "mapUid": "gjt2DWATrQ_NdrbrXG0G9oDpTfh",
            "groupUid": "Personal_Best"
        },
        {
            "mapUid": "XiGZvMOqIgT3_g0TdeFa0lxMp46",
            "groupUid": "Personal_Best"
        }
    ]
}
```

**Example response**:

```json
[
    {
        "groupUid": "Personal_Best",
        "mapUid": "gjt2DWATrQ_NdrbrXG0G9oDpTfh",
        "score": 15800,
        "zones": [
            {
                "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
                "zoneName": "World",
                "ranking": {
                    "position": 294,
                    "length": 0
                }
            }
        ]
    },
    {
        "groupUid": "Personal_Best",
        "mapUid": "XiGZvMOqIgT3_g0TdeFa0lxMp46",
        "score": 17500,
        "zones": [
            {
                "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
                "zoneName": "World",
                "ranking": {
                    "position": 42,
                    "length": 0
                }
            }
        ]
    }
]
```

If a `groupUid` or a `mapUid` is invalid (or the referenced leaderboard is closed), the response will simply omit that map's record.

If the query parameters reference a map that is not contained in the request body, the endpoint may return a `500` error.
