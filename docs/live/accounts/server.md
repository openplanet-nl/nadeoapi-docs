---
name: Get dedicated server accounts

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/server/player-server/account

audience: NadeoLiveServices

---

Gets the currently authenticated user's dedicated server accounts.

---

**Remarks**:
- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).

---

**Example request**:
```plain
GET https://live-services.trackmania.nadeo.live/api/token/server/player-server/account
```

**Example response**:
```json
{
  "playerServerAccount": [
    {
      "accountId": "5a4346c0-9761-4af5-af9b-52749cd5fdcd",
      "login": "test1",
      "alreadyUsed": false,
      "clubRoomId": null,
      "clubRoomName": null
    },
    {
      "accountId": "f116e20b-7b86-44f3-b57b-f0e7750d4a82",
      "login": "test2",
      "alreadyUsed": false,
      "clubRoomId": null,
      "clubRoomName": null
    },
    {
      "accountId": "76d6eeaf-422f-439e-8a19-96e5828b570b",
      "login": "test3",
      "alreadyUsed": false,
      "clubRoomId": null,
      "clubRoomName": null
    }
  ],
  "itemCount": 3
}
```
