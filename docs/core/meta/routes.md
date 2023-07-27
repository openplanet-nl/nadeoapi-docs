---
name: Get API routes

url: https://prod.trackmania.core.nadeo.online
method: GET
route: /api/routes?usage={usage}

audience: NadeoServices

parameters:
  query:
    - name: usage
      type: string
      description: The type of relevant usage (see below for accepted values)
      required: true

---

Gets all available routes on the Core API.

---

**Remarks**:
- There are two allowed values for the `usage` parameter: `Client` and `Server`.

---

**Example request**:
```plain
GET https://prod.trackmania.core.nadeo.online/api/routes?usage=Client
```

**Example response**:
```json
{
  "nadeoservices_storage_object_content_url_redirect": {
    "method": "GET",
    "path": "/storageObjects/{storageObjectId}"
  },
  "nadeoservices_driver_bot_list_add": {
    "method": "POST",
    "path": "/bots/drivers/"
  },
  ...
  "nadeoservices_account_zone_set": {
    "method": "PUT",
    "path": "/accounts/{accountId}/zone"
  },
  "nadeoservices_zone_list_get": {
    "method": "GET",
    "path": "/zones/"
  }
}
```
