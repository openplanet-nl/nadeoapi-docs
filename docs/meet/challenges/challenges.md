---
name: Get challenges

url: https://meet.trackmania.nadeo.club
method: GET
route: /api/challenges?length={length}&offset={offset}

audience: NadeoClubServices

parameters:
  query:
    - name: length
      type: integer
      description: The number of challenges to retrieve
      required: false
      default: 10
      max: 100
    - name: offset
      type: integer
      description: The number of challenges to skip
      required: false
      default: 0
---

Gets a list of challenges.

---

**Remarks**:
- Note that challenges are different from competitions - challenges are separate leaderboard structures that can be part of a competition (for example in the form of a qualifying session).

---

**Example request**:
```plain
GET https://meet.trackmania.nadeo.club/api/challenges?length=3
```

**Example response**:
```json
[
    {
        "id": 2388,
        "uid": "07f3ff0b-fc51-47ed-8b98-0380a8824d99",
        "name": "COTD 2023-02-07 #3 - Challenge",
        "scoreDirection": "ASC",
        "startDate": 1675850460,
        "endDate": 1675851360,
        "status": "INIT",
        "resultsVisibility": "PUBLIC",
        "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
        "admins": [
            "0060a0c1-2e62-41e7-9db7-c86236af3ac4",
            "54e4dda4-522d-496f-8a8b-fe0d0b5a2a8f",
            "2116b392-d808-4264-923f-2bfcfa60a570",
            "6ce163d5-f240-4741-870b-f2adad843865",
            "a76653e1-998a-4c53-8a91-0a396e15bfb5"
        ],
        "nbServers": 0,
        "autoScale": false,
        "nbMaps": 1,
        "leaderboardId": 12307,
        "deletedOn": null,
        "leaderboardType": "SUM",
        "completeTimeout": 5
    },
    {
        "id": 2387,
        "uid": "73650840-53eb-4921-a193-70b26f0ac789",
        "name": "COTD 2023-02-07 #2 - Challenge",
        "scoreDirection": "ASC",
        "startDate": 1675821660,
        "endDate": 1675822560,
        "status": "INIT",
        "resultsVisibility": "PUBLIC",
        "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
        "admins": [
            "0060a0c1-2e62-41e7-9db7-c86236af3ac4",
            "54e4dda4-522d-496f-8a8b-fe0d0b5a2a8f",
            "2116b392-d808-4264-923f-2bfcfa60a570",
            "6ce163d5-f240-4741-870b-f2adad843865",
            "a76653e1-998a-4c53-8a91-0a396e15bfb5"
        ],
        "nbServers": 0,
        "autoScale": false,
        "nbMaps": 1,
        "leaderboardId": 12304,
        "deletedOn": null,
        "leaderboardType": "SUM",
        "completeTimeout": 5
    },
    {
        "id": 2386,
        "uid": "063f5cfc-ade1-456e-9db3-f5ba3d4c8d3a",
        "name": "COTD 2023-02-07 #1 - Challenge",
        "scoreDirection": "ASC",
        "startDate": 1675792860,
        "endDate": 1675793760,
        "status": "HAS_SERVERS",
        "resultsVisibility": "PUBLIC",
        "creator": "afe7e1c1-7086-48f7-bde9-a7e320647510",
        "admins": [
            "0060a0c1-2e62-41e7-9db7-c86236af3ac4",
            "54e4dda4-522d-496f-8a8b-fe0d0b5a2a8f",
            "2116b392-d808-4264-923f-2bfcfa60a570",
            "6ce163d5-f240-4741-870b-f2adad843865",
            "a76653e1-998a-4c53-8a91-0a396e15bfb5"
        ],
        "nbServers": 0,
        "autoScale": false,
        "nbMaps": 1,
        "leaderboardId": 12301,
        "deletedOn": null,
        "leaderboardType": "SUM",
        "completeTimeout": 5
    }
]
```
