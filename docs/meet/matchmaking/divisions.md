---
name: Get matchmaking divisions

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matchmaking/{matchmakingType}/division/display-rules

audience: NadeoLiveServices

parameters:
  path:
    - name: matchmakingType
      type: integer
      description: The ID of the matchmaking type
      required: true
---

Gets division definitions/rules for the different matchmaking modes.

---

**Remarks**:

- See the [glossary](/glossary#matchmaking-type) for a list of available matchmaking types and their IDs.

---

**Example request**:

```plain
GET https://meet.trackmania.nadeo.club/api/matchmaking/2/division/display-rules
```

**Example response**:

```json
{
  "divisions": [
    {
      "id": "d9a8485d-4f43-402b-af9f-a1b819678723",
      "position": 1,
      "displayRuleType": "points_range",
      "displayRuleMinimumPoints": 0,
      "displayRuleMaximumPoints": 299,
      "displayRuleMinimumRank": null,
      "displayRuleMinimumVictories": null,
      "displayRuleMaximumVictories": null
    },
    ...
    {
      "id": "bd7282b7-04c4-4c25-b672-1f538ef7b5f9",
      "position": 13,
      "displayRuleType": "minimum_rank_and_points",
      "displayRuleMinimumPoints": 4000,
      "displayRuleMaximumPoints": null,
      "displayRuleMinimumRank": 10,
      "displayRuleMinimumVictories": null,
      "displayRuleMaximumVictories": null
    }
  ]
}
```

If the requested `matchmakingType` does not exist, the response will contain an error.
