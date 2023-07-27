---
name: Get zones

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /zones/

audience: NadeoServices

---

Gets all available zones.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/zones/
```

**Example response**:
```json
[
  {
    "icon": "file://Media/Flags/Aachen.jpg",
    "name": "Aachen",
    "parentId": "30200d6a-7e13-11e8-8060-e284abfd2bc4",
    "timestamp": "2022-11-14T11:19:00+00:00",
    "zoneId": "30200df4-7e13-11e8-8060-e284abfd2bc4"
  },
  ...
  {
    "icon": "file://Media/Flags/UKR.dds",
    "name": "Ukraine",
    "parentId": "301e2106-7e13-11e8-8060-e284abfd2bc4",
    "timestamp": "2022-11-14T11:19:00+00:00",
    "zoneId": "3022a07d-7e13-11e8-8060-e284abfd2bc4"
  },
  ...
]
```
