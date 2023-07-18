---
name: Get competition match results

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/matches/{compMatchId}/results?length={length}&offset={offset}

audience: NadeoClubServices

parameters:
  path:
    - name: compMatchId
      type: string
      description: A valid competition match ID
      required: true
  query:
    - name: length
      type: integer
      description: The number of results to retrieve
      required: false
      default: 10
      max: 255
    - name: offset
      type: integer
      description: The number of results to skip
      required: false
      default: 0
---

Gets results for a given competition match ID.

---

**Remarks**:
- This endpoint only supports competition match IDs, which are different from regular match IDs (as found in [the match endpoints](/meet/matches)). They are numerical and have to be retrieved from a competition's rounds (see [here](/meet/competition-matches/matches-for-round)).
- If the match does not use teams, the `teams` field will be an empty array, and the `teamPosition` field for each player will be `null`.
- For proper team mappings and team names, refer to [the competition teams endpoint](/meet/competitions/teams).

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/matches/6899/results
```

**Example response**:
```json
{
    "matchLiveId": "LID-MTCH-zplknskyw35qrqy",
    "roundPosition": 0,
    "results": [
        {
            "participant": "e8b72453-7716-441e-9e72-14817d2e563a",
            "rank": 1,
            "score": 62,
            "zone": "World|Europe|France|Pays-de-la-Loire|Vendée",
            "team": null
        },
        {
            "participant": "8f08302a-f670-463b-9f71-fbfacffb8bd1",
            "rank": 2,
            "score": 61,
            "zone": "World|Europe|Germany|Saarland|Saarbrücken",
            "team": null
        },
        {
            "participant": "b09527f2-b61d-4d9a-8cdc-73484590f81f",
            "rank": 3,
            "score": 60,
            "zone": "World|Africa|Uganda",
            "team": null
        },
        {
            "participant": "af30b7a1-fc37-485f-94bf-f00e39805d8c",
            "rank": 4,
            "score": 59,
            "zone": "World|Europe|Croatia",
            "team": null
        },
        {
            "participant": "9da54743-020c-4e87-82b9-1dad80f8162d",
            "rank": 5,
            "score": 58,
            "zone": "World|Europe|France|Bretagne|Finistère",
            "team": null
        },
        {
            "participant": "05477e79-25fd-48c2-84c7-e1621aa46517",
            "rank": 6,
            "score": 57,
            "zone": "World|Europe|Germany|Sachsen|Dresden",
            "team": null
        },
        {
            "participant": "961d1145-8c7b-48c3-9191-0d1d91e44a4a",
            "rank": 7,
            "score": 56,
            "zone": "World|Europe|Germany|Niedersachsen|Oldenburg",
            "team": null
        },
        {
            "participant": "d0a811b4-5611-4948-8865-03c9d252bcf4",
            "rank": 8,
            "score": 55,
            "zone": "World|Europe|France|Île-de-France|Paris",
            "team": null
        },
        {
            "participant": "1336b019-0d7d-43f7-b227-ff336f8b7140",
            "rank": 9,
            "score": 54,
            "zone": "World|Europe|Portugal|Norte",
            "team": null
        },
        {
            "participant": "4d85c941-0242-4f9f-a6d4-ee7772d95e82",
            "rank": 10,
            "score": 53,
            "zone": "World|Europe|Switzerland|Bern",
            "team": null
        }
    ],
    "scoreUnit": "point",
    "teams": []
}
```

If a `compMatchId` is invalid (or the match information is not available), the response will contain a `404` response code.
