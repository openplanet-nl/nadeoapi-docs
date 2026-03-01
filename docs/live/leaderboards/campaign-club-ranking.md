---
name: Get your season/campaign club ranking

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/leaderboard/group/{groupUid}/club/{clubId}

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
---

Gets the authenticated account's rank in a club for the given group/season/campaign.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `groupUid` `"Personal_Best"` cannot be used for this endpoint because it requires a group that refers to a campaign or season.
- Unlike some other leaderboard-related endpoints that use a `groupUid` parameter, this one also supports groups/seasons that are already closed.
- The `position` field is the rank of the player within the club, instead of their rank in the season/campaign itself.
- An invalid `clubId` will result in a response with the `position` field set to `1`.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/leaderboard/group/dccdf820-6a24-4ab1-9078-58fea41282db/club/9
```

**Example response**:

```json
{
  "clubId": 9,
  "position": 15,
  "groupUid": "dccdf820-6a24-4ab1-9078-58fea41282db",
  "sp": "24772"
}
```

If the `groupUid` is invalid or the authenticated account has not played the campaign/season, the response will be an empty object:

```json
{}
```
