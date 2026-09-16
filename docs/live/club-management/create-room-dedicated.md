---
name: Create club room (dedicated server)

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/club/{clubId}/room/create-from-server

audience: NadeoLiveServices

parameters:
  path:
    - name: clubId
      type: integer
      description: The ID of the club where the room should be created
      required: true
  body:
    - name: name
      type: string
      description: The name of the new room
      max: 20 characters
      required: true
    - name: login
      type: string
      description: The dedicated server username/login
      required: true
    - name: folderId
      type: integer
      description: The ID of the folder where the room should be created
---

The request body is an object containing the server details:

```json
{
  "name": name,
  "login": serverLogin,
  "folderId": folderId
}
```

Creates a room in a club using a dedicated server.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- Compared to regular club rooms, the response object will have less information available - specifically, `maps` and `scriptSettings` will likely be empty or contain old info about the server.
- The same server login can be used multiple times - you will not receive an error response if the login is already in use.
- The list of available server logins can be retrieved using the [Get dedicated server accounts endpoint](/live/accounts/server). This endpoint also indicates which logins are in use.
- See the [glossary](/glossary#club-folders) for more information about folders.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/club/114118/room/create-from-server
```

```json
{
  "name": "Test Room",
  "login": "tmfast_8",
  "folderId": 0
}
```

**Example response**:

```json
{
	"creationTimestamp": 1789164080,
	"clubName": "TMFAST",
	"id": 1166614,
	"activityId": 1166614,
	"campaignId": null,
	"name": "Test Room",
	"clubId": 114118,
	"roomId": null,
	"password": false,
	"room": {
		"id": null,
		"scalable": false,
		"serverInfo": null,
		"scriptSettings": [],
		"playerCount": 0,
		"serverAccountId": "86b1f036-bb94-4561-8f30-be8d44c19ecc",
		"name": "",
		"shufflePlaylist": false,
		"region": null,
		"maps": [],
		"script": "TM_Rounds_Online",
		"maxPlayers": 32
	},
	"mediaUrlPngSmall": "",
	"mediaUrl": "",
	"latestEditorAccountId": "3c1505cd-8a53-4e4e-817c-d808c277e64c",
	"nadeo": false,
	"mediaUrlPngLarge": "",
	"mediaTheme": "",
	"popularityLevel": 0,
	"creatorAccountId": "3c1505cd-8a53-4e4e-817c-d808c277e64c",
	"playerServerLogin": "tmfast_8",
	"mediaUrlDds": "",
	"mediaUrlPngMedium": ""
}
```

If the club does not exist or the authenticated account is not a member of the club, the response will contain an error:

```json
[
  "clubMemberRole:error-notMember"
]
```

If the authenticated account does not have enough permissions in the club to create rooms, the response will contain an error:

```json
[
  "clubMemberRole:error-notContentCreator"
]
```

If the `login` is invalid, the response will contain an error:

```json
[
	"serverLogin:error-inArray"
]
```
