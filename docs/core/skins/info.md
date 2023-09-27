---
name: Get skin info

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /skins/{skinId}

audience: NadeoServices

parameters:
  path:
    - name: skinId
      type: string
      description: The requested skin's ID
      required: true
---

Gets the skin information for the requested skin ID.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/skins/dca3a74a-acf5-4780-8842-15ba80c3b673
```

**Example response**:
```json
{
  "creatorId": "3468343f-bc7f-4ddd-938f-0f118d13cdc9",
  "checksum": "50768A804AB4382B90A744C401B50A6C245B5CA5C707F6C7DE9ADA295A70D35F",
  "filename": "ProffCarbon.zip",
  "fileOptimizedUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/4dc83a53-033f-468a-a789-1e9893d0b612",
  "fileUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/b2324d14-ceaf-4e26-8865-0fe4e61f5249",
  "skinDisplayName": "ProffCarbon",
  "skinId": "dca3a74a-acf5-4780-8842-15ba80c3b673",
  "skinName": "Skins\\Models\\CarSport\\ProffCarbon.zip",
  "skinType": "Models/CarSport",
  "thumbnailUrl": "https://prod.trackmania.core.nadeo.online/storageObjects/e68723fa-9929-42b0-9ace-8fdf14f66a36.tga",
  "timestamp": "2020-11-29T21:00:10+00:00"
}
```

If the `skinId` is invalid, the response will contain an error message (along with status code `400`):

```json
{
  "code": "C-AA-00-03",
  "correlation_id": "4680da87c7ec7568901dfa1dbbc424e8",
  "message": "There was a validation error.",
  "info": {
    "skinId": "Invalid uuid."
  }
}
```
