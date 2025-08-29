---
name: Get waiting time

url: https://live-services.trackmania.nadeo.live
method: GET
route: /api/token/map-review/{reviewType}/waiting-time

audience: NadeoLiveServices
parameters:
  path:
    - name: reviewType
      type: string
      description: The type of review server
      required: true
---

Retrieves information on how long a player must wait before their map is the current one if they were to submit it to a map review server.

---

**Remarks**:

- Examples of supported review types are `"totd"` and `"weekly-shorts"`.

---

**Example request**:

```plain
GET https://live-services.trackmania.nadeo.live/api/token/map-review/totd/waiting-time
```

**Example response**:

```json
{
  "seconds": 540
}
```

The `"seconds"` field in the response should be a multiple of 180 seconds (3 minutes).

If a map review type does not exist, the response will contain a 403 error:

```plain
Only official MapReview
```
