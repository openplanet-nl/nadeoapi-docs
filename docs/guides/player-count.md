# Get a map's total player count

[Map leaderboards](/live/leaderboards/top) don't contain a given leaderboard's total number of entries but it can be useful for a varity of use cases:

- Calculating relative leaderboard positions/percentiles
- Determining a map's/game mode's popularity (especially compared to other maps of the same type, e.g. consecutive TOTDs across a certain period of time)
- Tracking individual map leaderboards over time

---

## Approach

Retrieving the total player count relies on the [surround endpoint](/live/leaderboards/surround) which is typically used to retrieve the position of a given leaderboard entry by its time/score. The game client uses this to determine the rank of a newly driven record (e.g. to display it in the post-race menu while the full ghost is still being uploaded).

Since the total player count is equivalent to the position of the slowest/worst leaderboard entry, this endpoint returns the map's total player count when the request asks for an extremely slow time/bad score.

### Limitations and notes

The surround endpoint comes with a few general restrictions that are relevant to this scenario:

- [Closed leaderboards](/glossary#closed-leaderboard) are not supported. It's recommended to fall back to the map's global PB leaderboard instead by using `Personal_Best` as the `groupUID`.
- Leaderboards with more than 100,000 entries do not return exact position values but instead use the upper boundaries of larger intervals. Precise player counts for leaderboards with more entries are not available.
- The surround endpoint is not limited to the global leaderboard, it also allows retrieving surrounding leaderboard entries on regionally filtered leaderboards (as long as the `onlyWorld` query parameter is not set to `true`) - however, the returned zones are not configurable during the request and are instead determined by the authenticated account's set zone. Retrieving player counts of several zones in quick succession therefore would require frequent zone changes for the relevant account, which is generally not recommended as it is a global action that could affect other requests in unexpected ways. It also may sometimes update with some delay.
- If the goal is to determine the total player count of a given map, the surround endpoint should not be requested by a real player account that could already have a record on the map. This is because the surround endpoint ignores requested scores worse than the authenticated account's current score and instead returns that. It's recommended to use a clean Ubisoft account that will never be played on (which means Openplanet plugins that need this functionality should rely on a separate server for this data instead of letting the client retrieve the data itself).
- This approach is only available for global and regional leaderboards, it does not allow for further filters such as the total players that are members of a particular club - there's [a separate endpoint for club members' leaderboard entries](/live/leaderboards/top-club) if you're interested in that data, but note it does not offer a single-request option to retrieve the total number of entries.
- Stunt map scores are sorted in ascending order (as the worst possible value is `0`), but the surround endpoint does not allow requesting a score of `0`. The recommended solution is to request the score `1`, which fails to account for leaderboard entries without any points - but on most Stunt maps that should be a negligible factor.

## Requirements

- An Ubisoft user access token for the Live audience - see [the authentication docs](/auth/ubi) for instructions
- The map's [`mapUID`](/glossary#map-uid)
- Optional: A [`seasonUID`/`groupUID`](/glossary#group-uid/leaderboard-group-uid/season-uid) for an open campaign/TOTD leaderboard

## Implementation

Let's assume we want to determine the total player count of [Midnight Metropolis by htimh](https://trackmania.io/#/leaderboard/QleO8OiNAkIXrZs6r0YLSrLBjEi). As its TOTD leaderboard has been closed for years, we are only able to retrieve the all-time leaderboard player count.

The following request retrieves the surrounding leaderboard entries for a fictional record with a time of `999999999` milliseconds.

```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/Personal_Best/map/QleO8OiNAkIXrZs6r0YLSrLBjEi/surround/1/1?score=999999999&onlyWorld=true

Headers:
    Content-Type: application/json
    Authorization: nadeo_v1 <access token for Live audience>
    User-Agent: <your project/contact information>
```

```json
{
  "groupUid": "Personal_Best",
  "mapUid": "QleO8OiNAkIXrZs6r0YLSrLBjEi",
  "tops": [
    {
      "zoneId": "301e1b69-7e13-11e8-8060-e284abfd2bc4",
      "zoneName": "World",
      "top": [
        {
          "accountId": "28a03b10-c588-4c9c-91dc-614d300752c2",
          "zoneId": "3022ed9f-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Texas",
          "position": 33167,
          "score": 546900,
          "timestamp": -1
        },
        {
          "accountId": "924598eb-c042-4f12-a189-b7f03c4b83b2",
          "zoneId": "301ff90f-7e13-11e8-8060-e284abfd2bc4",
          "zoneName": "Stuttgart",
          "position": 33168,
          "score": 999999999,
          "timestamp": -1
        }
      ]
    }
  ]
}
```

The second entry in the `top` array is the requested one (which doesn't actually exist on the leaderboard), and the first holds the information we're looking for in its `position` field: At the time of writing, `33167` accounts have set a time on the all-time leaderboard for this map.

As a quick aside, you might be surprised to see a score of `546900` (more than 9 minutes) on a map that should only take about a minute to finish with a normal run. As you inspect other popular maps you'll see these extremely slow leaderboard entries fairly often as people have realized that getting an absurdly bad record on a map is a reliable (if time-consuming) way of determining its player count in-game. Using the API we can send the same request the game client uses without having to actually drive that record ourselves.
