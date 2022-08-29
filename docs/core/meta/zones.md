---
name: Get zones

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /zones

audience: NadeoServices

---

Gets all available zones.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/zones
```

**Example response**:
```json
[
  {
    "icon": "file://Media/Flags/Aachen.jpg",
    "name": "Aachen",
    "parentId": "30200d6a-7e13-11e8-8060-e284abfd2bc4",
    "timestamp": "2022-08-29T14:19:00+00:00",
    "zoneId": "30200df4-7e13-11e8-8060-e284abfd2bc4"
  },
  ...
  {
    "icon": "file://Media/Flags/Chukotka.dds",
    "name": "Чукотский автономный округ",
    "parentId": "302243c3-7e13-11e8-8060-e284abfd2bc4",
    "timestamp": "2022-08-29T14:19:00+00:00",
    "zoneId": "43a3ea45-9b75-446a-a59f-8b69b1f93e22"
  }
]
```
