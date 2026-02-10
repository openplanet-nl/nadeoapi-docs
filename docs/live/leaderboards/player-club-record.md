---
name: Get player map record in a club

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/map/{mapUid}/club/{clubId}

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
    - name: clubId
      type: string
      description: The ID of the club
      required: true
---

Gets the currently authenticated user's map record and leaderboard position in reference to a club.

---

**Remarks**:

- The `groupUid` `"Personal_Best"` can be used to get the global leaderboard.
- The returned `position` may incorrectly be shown as `1` (implying the user has world record even when they don't). On subsequent requests, this value is corrected to the actual position of the player in the club.
- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/Personal_Best/map/Kn63nCh9bkaRHcZZsrtf_KcLMH2/club/9
```

**Example response**:

```json
{
  "groupUid": "Personal_Best",
  "mapUid": "Kn63nCh9bkaRHcZZsrtf_KcLMH2",
  "score": 19976,
  "clubId": 9,
  "position": 80
}
```

If the `groupUid` is invalid or the map does not exist, the response will be an empty object:

```json
{}
```

If the currently authenticated user is not a member of the requested club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If a dedicated server account is used, the response will contain an error:

```json
[
  "club_Join:error-notAllowed"
]
```
