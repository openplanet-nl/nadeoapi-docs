---
name: Remove favorite map

url: https://live-services.trackmania.nadeo.live
method: POST
route: /api/token/map/favorite/{mapUid}/remove

audience: NadeoLiveServices
parameters:
  path:
    - name: mapUid
      type: string
      description: The UID of the map
      required: true
---

Removes a map from your authenticated account's favorites.

---

**Remarks**:

- This endpoint does not accept requests by dedicated server accounts. See [the Authentication guide](/auth) for more information.

---

**Example request**:

```plain
POST https://live-services.trackmania.nadeo.live/api/token/map/favorite/EgUgXeBV8vpEth2hZgSzLhlHRs8/remove
```

**Example response**:

Both successful and unsuccessful responses (including requests for maps that are not part of your favorites) have no content and return a `204` response code.

If the map does not exist, the response will contain an error (status 500):

```json
{
  "error":"InternalServerError",
  "message":"Nadeo Live Services Internal Log",
  "traceId":"Root=1-69d40bd6-34cab79440814f711e17f38a"
}
```
