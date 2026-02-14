---
name: Get favorite maps by UIDs

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /maps/favorites/by-map-uids?mapUidList={mapUidList}

audience: NadeoServices

parameters:
  query:
    - name: mapUidList
      type: string
      description: A comma-separated list of map UIDs
      required: true
---

Gets maps in your authenticated account's favorite tracks via their UIDs.

---

**Remarks**:

- This endpoint is only useful with tokens authenticated through Ubisoft user accounts (as opposed to dedicated server accounts).
- The `timestamp` field is when the map was added to your favorite tracks.

---

**Example request**:

```plain
GET https://prod.trackmania.core.nadeo.online/maps/favorites/by-map-uids?mapUidList=WGWbB_OQnMk3RfD1b3laxonXJQh,KRelvYHRjEQoqnkJ_Th8FLKzTsg
```

**Example response**:

```json
{
  "mapFavoriteList": [
    {
      "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
      "mapUid": "KRelvYHRjEQoqnkJ_Th8FLKzTsg",
      "timestamp": "2026-02-13T18:12:03+00:00"
    },
    {
      "accountId": "69f31664-4252-48e0-a433-024c49caee8c",
      "mapUid": "WGWbB_OQnMk3RfD1b3laxonXJQh",
      "timestamp": "2026-02-13T21:24:28+00:00"
    }
  ],
  "count": 2
}
```

If a map can't be found or isn't part of your favorites, it will be omitted from the response.

An invalid `mapUid` results in a `400` response code with an error object in the response body.
