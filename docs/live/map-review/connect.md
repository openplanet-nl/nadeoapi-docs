---
name: Get join information

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/map-review/{reviewType}/connect

audience: NadeoLiveServices
parameters:
  path:
    - name: reviewType
      type: string
      description: The type of review server
      required: true
---

Retrieves information to connect to a map review server.

---

**Remarks**:

- This endpoint is only accessible with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- Examples of supported review types are `"totd"` and `"weekly-shorts"`.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/map-review/totd/connect
```

**Example response**:

```json
{
  "joinLink": "#qjoin=uieEf_XTR7K562_qImsVaw",
  "noMap": false,
  "starting": false,
  "submissionWaitTimer": 0
}
```

If a dedicated server account is used, the response will contain an error:

```json
{
  "error": "NLS::Player::MissingRule",
  "message": "169e24a9-ccdd-49af-9c50-de01b189cf17 does not have rule map_AccessServerReview",
  "traceId": "Root=1-68b0ce22-50e44c4054602b8e0aabf5d2"
}
```
