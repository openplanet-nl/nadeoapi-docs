---
name: Create club ranking

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/ranking/create

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the ranking should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new ranking
      max: 20 characters
      required: true
    - name: name
      type: string
      description: The use case of the ranking (see remarks below)
      required: true
    - name: campaignId
      type: integer
      description: The campaignId of a campaign from the club (see remarks below)
    - name: folderId
      type: integer
      description: The ID of the folder where the ranking should be created
---

The request body is an object containing the ranking details:

```json
{
  "name": name,
  "useCase": useCase,
  "campaignId": campaignId,
  "folderId": folderId
}
```

Creates a ranking in a club.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `useCase` parameter supports three cases: Current Quarterly Campaign (`"ranking-official"`), Daily Track / TOTD (`"ranking-daily"`), and Club Campaign (`"ranking-club"`).
- When creating a Club Campaign ranking, it is required to set the `campaignId` parameter to the campaignId of a campaign from the club.
- If the club campaign is not a campaign from the club, or it does not exist, the ranking will be created, but an error will be displayed in-game when accessing the ranking.
- See the [glossary](/glossary#club-folders) for more information about folders.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/103034/ranking/create
```

```json
{
  "name": "Winter ranks",
  "useCase": "ranking-club",
  "campaignId": 127610,
  "folderId": 0
}
```

**Example response**:

```json
{
  "creationTimestamp": 1771993468,
  "clubName": "Fort's club",
  "id": 1007578,
  "campaignId": 127610,
  "name": "Winter ranks",
  "clubId": 103034,
  "latestEditorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "creatorAccountId": "69f31664-4252-48e0-a433-024c49caee8c",
  "useCase": "ranking-club"
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to create rankings, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```

If the `useCase` parameter is invalid, the response will contain an error:

```json
[
  "useCase:error-inArray"
]
```
