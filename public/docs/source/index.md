---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info


Hello! Invoiced is an API for USEDESK

Our API was designed to handle all of the billing needs for your business or application while making the integration process as painless as possible. Through the API we can help you seamlessly manage invoicing, payments, subscription billing, metered billing, estimates, pricing, and much more.

We designed the Invoiced API around REST principles.

Here’s a few pages that might be helpful in addition to this API reference.

Sign up for Invoiced
Developer Documentation
Invoiced Sandbox
API Endpoint

All API calls must be made to https://api.invoiced.com.

We also have a sandbox environment for testing available at https://api.sandbox.invoiced.com.

JSON-only

All responses will be in JSON. Input data passed through the request body can be form-encoded or JSON-encoded. If using a JSON body, please specify the Content-Type header as application/json.

In the API dates are represented as UNIX timestamps. Each entity like customers or invoices has a unique integer ID.









Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Account

Account resource representation.
<!-- START_707dbd43ec089aecbe185920a0e3e419 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki`

`HEAD api/wiki`


<!-- END_707dbd43ec089aecbe185920a0e3e419 -->

<!-- START_a0710284fc0467fb3e6478006aaf8893 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}`

`HEAD api/wiki/{account_id}`


<!-- END_a0710284fc0467fb3e6478006aaf8893 -->

<!-- START_7752840c31432aeba2ddebbc095a15f3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/create" \
-H "Accept: application/json" \
    -d "title"="similique" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/create",
    "method": "POST",
    "data": {
        "title": "similique"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/create`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 

<!-- END_7752840c31432aeba2ddebbc095a15f3 -->

<!-- START_12f0133de6b6341e9eb4aa29ba8bbda8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/wiki/{account_id}" \
-H "Accept: application/json" \
    -d "title"="explicabo" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}",
    "method": "PUT",
    "data": {
        "title": "explicabo"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/wiki/{account_id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 

<!-- END_12f0133de6b6341e9eb4aa29ba8bbda8 -->

<!-- START_fec67a564020adf5c569ec60dc60bd66 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/wiki/{account_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/wiki/{account_id}`


<!-- END_fec67a564020adf5c569ec60dc60bd66 -->

#Ai

Ai resource representation.
<!-- START_4111e68e6ac8b1bae8a615f6d89025a6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/ai" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ai",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/ai`

`HEAD api/ai`


<!-- END_4111e68e6ac8b1bae8a615f6d89025a6 -->

<!-- START_9eafdb6fa3d0b7b6f7b800c060302df6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/ai" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ai",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/ai`


<!-- END_9eafdb6fa3d0b7b6f7b800c060302df6 -->

#Articles

Articles resource representation.
<!-- START_76dfc4798a9fe0169c8109fad5d715c6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/article" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/article`

`HEAD api/wiki/{account_id}/article`


<!-- END_76dfc4798a9fe0169c8109fad5d715c6 -->

<!-- START_209f07465c5ce23e537f0f9cfe85a964 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/article/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/article/{id}`

`HEAD api/wiki/{account_id}/article/{id}`


<!-- END_209f07465c5ce23e537f0f9cfe85a964 -->

<!-- START_0c07f2f336eca62f1de9a6573d388a4b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/article/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article/create",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/article/create`


<!-- END_0c07f2f336eca62f1de9a6573d388a4b -->

<!-- START_93fa4ac895bfa5608514933446bdb5ec -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/wiki/{account_id}/article/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/wiki/{account_id}/article/{id}`


<!-- END_93fa4ac895bfa5608514933446bdb5ec -->

<!-- START_01b506a4bf346da4d11cdeaade2ab1bd -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/wiki/{account_id}/article/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/wiki/{account_id}/article/{id}`


<!-- END_01b506a4bf346da4d11cdeaade2ab1bd -->

<!-- START_df7a8e2235c742db2f77ea42b07f619e -->
## sort

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/article/copy/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article/copy/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/article/copy/{id}`

`HEAD api/wiki/{account_id}/article/copy/{id}`


<!-- END_df7a8e2235c742db2f77ea42b07f619e -->

<!-- START_373ed51f6b62c1cb4d18fabfd4a60f0f -->
## sort

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/article/delete-multiple" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article/delete-multiple",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/article/delete-multiple`


<!-- END_373ed51f6b62c1cb4d18fabfd4a60f0f -->

<!-- START_2ad60dbfaa1e1e90d0dcfc319bf937b9 -->
## sort

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/article/copy-multiple" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/article/copy-multiple",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/article/copy-multiple`


<!-- END_2ad60dbfaa1e1e90d0dcfc319bf937b9 -->

#BlackWhiteList

страница настроек https://devsecure.usedesk.ru/settings/black-white-list
<!-- START_3135fcd071d2d125fbb4dda59aea2327 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/company/black-white-list" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/black-white-list",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/black-white-list`

`HEAD api/company/black-white-list`


<!-- END_3135fcd071d2d125fbb4dda59aea2327 -->

<!-- START_64f5c40edb0de267c371dda851a715ba -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/company/black-white-list/save" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/black-white-list/save",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/company/black-white-list/save`


<!-- END_64f5c40edb0de267c371dda851a715ba -->

#Block

Block resource representation.
<!-- START_419298dd0a6978666a65a11f21877948 -->
## List of blocks.

> Example request:

```bash
curl -X GET "http://localhost/api/blocks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/blocks`

`HEAD api/blocks`


<!-- END_419298dd0a6978666a65a11f21877948 -->

<!-- START_7e604503a2e14396bd8aaeaa5a393f66 -->
## Display the specified block.

> Example request:

```bash
curl -X GET "http://localhost/api/blocks/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/blocks/{id}`

`HEAD api/blocks/{id}`


<!-- END_7e604503a2e14396bd8aaeaa5a393f66 -->

<!-- START_73b20299496412f49845c08d6ed8b1c1 -->
## Store a new block.

> Example request:

```bash
curl -X POST "http://localhost/api/blocks/store" \
-H "Accept: application/json" \
    -d "name"="ex" \
    -d "title"="ex" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks/store",
    "method": "POST",
    "data": {
        "name": "ex",
        "title": "ex"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/blocks/store`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    title | string |  required  | 

<!-- END_73b20299496412f49845c08d6ed8b1c1 -->

<!-- START_e2fde73851067f0ea22d038aa1fd5262 -->
## Update the specified block.

> Example request:

```bash
curl -X PUT "http://localhost/api/blocks/{id}" \
-H "Accept: application/json" \
    -d "name"="et" \
    -d "title"="et" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks/{id}",
    "method": "PUT",
    "data": {
        "name": "et",
        "title": "et"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/blocks/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    title | string |  required  | 

<!-- END_e2fde73851067f0ea22d038aa1fd5262 -->

<!-- START_28f9f5a35d4acf803882f04d916d6597 -->
## sort blocks

> Example request:

```bash
curl -X PUT "http://localhost/api/blocks/sort" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks/sort",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/blocks/sort`


<!-- END_28f9f5a35d4acf803882f04d916d6597 -->

<!-- START_8e40c969f985a0fba63daf018813c1c9 -->
## Remove the specified block.

> Example request:

```bash
curl -X DELETE "http://localhost/api/blocks/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/blocks/{id}`


<!-- END_8e40c969f985a0fba63daf018813c1c9 -->

#Category

Category resource representation.
<!-- START_297993921c08d748889a4f5aabb2ad3a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/category" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/category`

`HEAD api/wiki/{account_id}/category`


<!-- END_297993921c08d748889a4f5aabb2ad3a -->

<!-- START_b2b28c5627ceea50b2eb65661f754535 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/category/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/category/{id}`

`HEAD api/wiki/{account_id}/category/{id}`


<!-- END_b2b28c5627ceea50b2eb65661f754535 -->

<!-- START_8076cf27d49e2c3a5371e4b1473402cd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/category/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category/create",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/category/create`


<!-- END_8076cf27d49e2c3a5371e4b1473402cd -->

<!-- START_a32d05a321028e479f13189c2155a635 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/wiki/{account_id}/category/update/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category/update/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/wiki/{account_id}/category/update/{id}`


<!-- END_a32d05a321028e479f13189c2155a635 -->

<!-- START_a3585eeb70e04ac4af45c1ef64446a09 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/wiki/{account_id}/category/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/wiki/{account_id}/category/{id}`


<!-- END_a3585eeb70e04ac4af45c1ef64446a09 -->

<!-- START_06d62701d6967049fd1e6ad0638ebf48 -->
## sort

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/category/copy/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category/copy/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/category/copy/{id}`

`HEAD api/wiki/{account_id}/category/copy/{id}`


<!-- END_06d62701d6967049fd1e6ad0638ebf48 -->

<!-- START_e9b801cb5d1f9930f5918d0fc07ba9af -->
## sort

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/category/delete-multiple" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category/delete-multiple",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/category/delete-multiple`


<!-- END_e9b801cb5d1f9930f5918d0fc07ba9af -->

<!-- START_c3c43a2bd99eb97e99640c27abe02e09 -->
## sort

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/category/copy-multiple" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/category/copy-multiple",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/category/copy-multiple`


<!-- END_c3c43a2bd99eb97e99640c27abe02e09 -->

#Client

Client resource representation.
<!-- START_383cd5bef7c005fcd0dc550c3cf92097 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/clients" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clients",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/clients`

`HEAD api/clients`


<!-- END_383cd5bef7c005fcd0dc550c3cf92097 -->

<!-- START_b59004c352682adb6e962fbf8fa75a89 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/clients/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clients/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/clients/{id}`

`HEAD api/clients/{id}`


<!-- END_b59004c352682adb6e962fbf8fa75a89 -->

<!-- START_50ec42ac74ca192413248cb898997aa1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/clients/store" \
-H "Accept: application/json" \
    -d "name"="animi" \
    -d "avatar"="animi" \
    -d "spammer"="1" \
    -d "vip"="1" \
    -d "client_company_id"="animi" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clients/store",
    "method": "POST",
    "data": {
        "name": "animi",
        "avatar": "animi",
        "spammer": true,
        "vip": true,
        "client_company_id": "animi"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/clients/store`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    avatar | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    spammer | boolean |  optional  | 
    vip | boolean |  optional  | 
    client_company_id | string |  optional  | Valid client_company id

<!-- END_50ec42ac74ca192413248cb898997aa1 -->

<!-- START_796ebd737f86810f05ca321a6e4c971e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/clients/{id}" \
-H "Accept: application/json" \
    -d "name"="aspernatur" \
    -d "avatar"="aspernatur" \
    -d "spammer"="1" \
    -d "vip"="1" \
    -d "client_company_id"="aspernatur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clients/{id}",
    "method": "PUT",
    "data": {
        "name": "aspernatur",
        "avatar": "aspernatur",
        "spammer": true,
        "vip": true,
        "client_company_id": "aspernatur"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/clients/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    avatar | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    spammer | boolean |  optional  | 
    vip | boolean |  optional  | 
    client_company_id | string |  optional  | Valid client_company id

<!-- END_796ebd737f86810f05ca321a6e4c971e -->

<!-- START_643932242390522b05177f0fe35a719e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/clients/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clients/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/clients/{id}`


<!-- END_643932242390522b05177f0fe35a719e -->

#Collection

Collection resource representation.
<!-- START_92053c51ceff2ebe4d6fbc23ab710fa4 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/collection" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/collection`

`HEAD api/wiki/{account_id}/collection`


<!-- END_92053c51ceff2ebe4d6fbc23ab710fa4 -->

<!-- START_7ba5ab5a21c2d5152a17e5303833f49b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/collection/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/collection/{id}`

`HEAD api/wiki/{account_id}/collection/{id}`


<!-- END_7ba5ab5a21c2d5152a17e5303833f49b -->

<!-- START_a18eda2ba09f98a23d178f02a643386b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/collection/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection/create",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/collection/create`


<!-- END_a18eda2ba09f98a23d178f02a643386b -->

<!-- START_021a8be3adaf70fb12620d515899ac2e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/wiki/{account_id}/collection/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/wiki/{account_id}/collection/{id}`


<!-- END_021a8be3adaf70fb12620d515899ac2e -->

<!-- START_9c36153715e8360ebda816ee8d09eb0c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/wiki/{account_id}/collection/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/wiki/{account_id}/collection/{id}`


<!-- END_9c36153715e8360ebda816ee8d09eb0c -->

<!-- START_f5949d9016ad2659c950ce4760669c5a -->
## sort

> Example request:

```bash
curl -X GET "http://localhost/api/wiki/{account_id}/collection/copy/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection/copy/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/wiki/{account_id}/collection/copy/{id}`

`HEAD api/wiki/{account_id}/collection/copy/{id}`


<!-- END_f5949d9016ad2659c950ce4760669c5a -->

<!-- START_400c828f8f307fac4c7beb47d630e021 -->
## sort

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/collection/delete-multiple" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection/delete-multiple",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/collection/delete-multiple`


<!-- END_400c828f8f307fac4c7beb47d630e021 -->

<!-- START_2388c0b4e033589427031991d44329a6 -->
## sort

> Example request:

```bash
curl -X POST "http://localhost/api/wiki/{account_id}/collection/copy-multiple" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/wiki/{account_id}/collection/copy-multiple",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/wiki/{account_id}/collection/copy-multiple`


<!-- END_2388c0b4e033589427031991d44329a6 -->

#Company

Company resource representation.
<!-- START_f7c2e21a81c18b5ee2bcaac75a99b84c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/company" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company`

`HEAD api/company`


<!-- END_f7c2e21a81c18b5ee2bcaac75a99b84c -->

<!-- START_364773547eb1ea38d698dababcaa1a80 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/company/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/{id}`

`HEAD api/company/{id}`


<!-- END_364773547eb1ea38d698dababcaa1a80 -->

<!-- START_dd9a6faff7c03c5bcd3157f519e82641 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/company/logotype" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/logotype",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/company/logotype`


<!-- END_dd9a6faff7c03c5bcd3157f519e82641 -->

<!-- START_24f66bad01e306d4bc2c182eed86e5c9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/demo-data" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/demo-data",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/demo-data`


<!-- END_24f66bad01e306d4bc2c182eed86e5c9 -->

<!-- START_a3ea6c7fa2feeb3581a17c4fb271aa28 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/company/{setting}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/{setting}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/{setting}`

`HEAD api/company/{setting}`


<!-- END_a3ea6c7fa2feeb3581a17c4fb271aa28 -->

<!-- START_003b64cac96a979e0c798ca20a4e8508 -->
## sort blocks

> Example request:

```bash
curl -X GET "http://localhost/api/company/{setting}/toggle" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/{setting}/toggle",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/{setting}/toggle`

`HEAD api/company/{setting}/toggle`


<!-- END_003b64cac96a979e0c798ca20a4e8508 -->

#Company Contact

Company Contact resource representation.
<!-- START_a9c732a00276e8d1353fc635b1053ac8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/company/{id}/contacts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/{id}/contacts",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/{id}/contacts`

`HEAD api/company/{id}/contacts`


<!-- END_a9c732a00276e8d1353fc635b1053ac8 -->

<!-- START_cad6e479da2e80c0f39712f0e3028f74 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/company/{id}/contacts" \
-H "Accept: application/json" \
    -d "name"="amet" \
    -d "logotype"="amet" \
    -d "signature_enabled"="1" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/{id}/contacts",
    "method": "POST",
    "data": {
        "name": "amet",
        "logotype": "amet",
        "signature_enabled": true
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/company/{id}/contacts`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    logotype | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    signature_enabled | boolean |  optional  | 

<!-- END_cad6e479da2e80c0f39712f0e3028f74 -->

<!-- START_bc53f536f757bf3485befb061de391ea -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/company/{id}/contacts" \
-H "Accept: application/json" \
    -d "name"="debitis" \
    -d "logotype"="debitis" \
    -d "signature_enabled"="1" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/{id}/contacts",
    "method": "PUT",
    "data": {
        "name": "debitis",
        "logotype": "debitis",
        "signature_enabled": true
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/company/{id}/contacts`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    logotype | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    signature_enabled | boolean |  optional  | 

<!-- END_bc53f536f757bf3485befb061de391ea -->

#Custom Blocks

Custom Blocks resource representation.
<!-- START_2635b2b2893ee5db048a2a62e8d09324 -->
## Store a RetailCrm Block

> Example request:

```bash
curl -X POST "http://localhost/api/blocks/yandex/store" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks/yandex/store",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/blocks/yandex/store`


<!-- END_2635b2b2893ee5db048a2a62e8d09324 -->

<!-- START_d37a61d138bd71b33c9fcca628e45a2f -->
## Store a Yandex Block

> Example request:

```bash
curl -X POST "http://localhost/api/blocks/retail_crm/store" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blocks/retail_crm/store",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/blocks/retail_crm/store`


<!-- END_d37a61d138bd71b33c9fcca628e45a2f -->

#Intergation

Intergation resource representation.
<!-- START_b860bd1a5a389f77216d15651947a6e7 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/settings/integration" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/settings/integration",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/settings/integration`

`HEAD api/settings/integration`


<!-- END_b860bd1a5a389f77216d15651947a6e7 -->

<!-- START_6fdbbac41a929496179ba3e3397df059 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/settings/integration/change-status" \
-H "Accept: application/json" \
    -d "name"="asperiores" \
    -d "keyword"="asperiores" \
    -d "short_description"="asperiores" \
    -d "type"="paid" \
    -d "month_price"="975953443" \
    -d "year_price"="975953443" \
    -d "default_status"="1" \
    -d "status"="1" \
    -d "icon"="asperiores" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/settings/integration/change-status",
    "method": "POST",
    "data": {
        "name": "asperiores",
        "keyword": "asperiores",
        "short_description": "asperiores",
        "type": "paid",
        "month_price": 975953443,
        "year_price": 975953443,
        "default_status": true,
        "status": true,
        "icon": "asperiores"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/settings/integration/change-status`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    keyword | string |  required  | 
    short_description | string |  required  | Maximum: `500`
    type | string |  required  | `free` or `paid`
    month_price | integer |  optional  | 
    year_price | integer |  optional  | 
    default_status | boolean |  optional  | 
    status | boolean |  optional  | 
    icon | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)

<!-- END_6fdbbac41a929496179ba3e3397df059 -->

#SLA

SLA resource representation.
<!-- START_1555cffaed849ac4a7d0c713fbdf84aa -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/sla" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sla",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/sla`

`HEAD api/sla`


<!-- END_1555cffaed849ac4a7d0c713fbdf84aa -->

<!-- START_4245c479f3eda3a0c0d84ca33a27fd73 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/sla/save" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sla/save",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/sla/save`


<!-- END_4245c479f3eda3a0c0d84ca33a27fd73 -->

#Ticket

Ticket resource representation.
<!-- START_2154a5ac92f60009569a56b1f35cce44 -->
## List of tickets.

> Example request:

```bash
curl -X GET "http://localhost/api/tickets" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tickets",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/tickets`

`HEAD api/tickets`


<!-- END_2154a5ac92f60009569a56b1f35cce44 -->

<!-- START_5741b6578ed728415686649f311b8b71 -->
## Display the specified ticket.

> Example request:

```bash
curl -X GET "http://localhost/api/tickets/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tickets/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/tickets/{id}`

`HEAD api/tickets/{id}`


<!-- END_5741b6578ed728415686649f311b8b71 -->

<!-- START_5d1b839e77f9439e5e379600fd1c5667 -->
## Store a new ticket.

> Example request:

```bash
curl -X POST "http://localhost/api/tickets/create" \
-H "Accept: application/json" \
    -d "email_channel_id"="et" \
    -d "subject"="et" \
    -d "message"="et" \
    -d "phone_channel_phone"="et" \
    -d "phone_type"="other" \
    -d "cc"="et" \
    -d "bcc"="et" \
    -d "client_id"="et" \
    -d "email_channel_email"="chickle@example.org" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tickets/create",
    "method": "POST",
    "data": {
        "email_channel_id": "et",
        "subject": "et",
        "message": "et",
        "phone_channel_phone": "et",
        "phone_type": "other",
        "cc": "et",
        "bcc": "et",
        "client_id": "et",
        "email_channel_email": "chickle@example.org"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/tickets/create`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email_channel_id | string |  required  | Valid company_email_channel id
    subject | string |  required  | 
    message | string |  required  | 
    phone_channel_phone | string |  optional  | 
    phone_type | string |  optional  | `home`, `mobile`, `stationary`, `fax` or `other`
    cc | string |  optional  | 
    bcc | string |  optional  | 
    client_id | string |  required  | Valid client id
    email_channel_email | email |  required  | 

<!-- END_5d1b839e77f9439e5e379600fd1c5667 -->

<!-- START_611f120869555c2a6ef97f1b404f7f74 -->
## Update the specified ticket.

> Example request:

```bash
curl -X POST "http://localhost/api/tickets/{id}" \
-H "Accept: application/json" \
    -d "email_channel_id"="aut" \
    -d "subject"="aut" \
    -d "message"="aut" \
    -d "phone_channel_phone"="aut" \
    -d "phone_type"="other" \
    -d "cc"="aut" \
    -d "bcc"="aut" \
    -d "client_id"="aut" \
    -d "email_channel_email"="swindler@example.org" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tickets/{id}",
    "method": "POST",
    "data": {
        "email_channel_id": "aut",
        "subject": "aut",
        "message": "aut",
        "phone_channel_phone": "aut",
        "phone_type": "other",
        "cc": "aut",
        "bcc": "aut",
        "client_id": "aut",
        "email_channel_email": "swindler@example.org"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/tickets/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email_channel_id | string |  required  | Valid company_email_channel id
    subject | string |  required  | 
    message | string |  required  | 
    phone_channel_phone | string |  optional  | 
    phone_type | string |  optional  | `home`, `mobile`, `stationary`, `fax` or `other`
    cc | string |  optional  | 
    bcc | string |  optional  | 
    client_id | string |  required  | Valid client id
    email_channel_email | email |  required  | 

<!-- END_611f120869555c2a6ef97f1b404f7f74 -->

<!-- START_838cdc5b8cad95edb341c122db0d38be -->
## post Merge

> Example request:

```bash
curl -X POST "http://localhost/api/tickets/merge" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tickets/merge",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/tickets/merge`


<!-- END_838cdc5b8cad95edb341c122db0d38be -->

#TicketField

TicketField resource representation.
<!-- START_e4dacac629a347e4f9f2679bc5f60ea0 -->
## List of TicketFields.

> Example request:

```bash
curl -X GET "http://localhost/api/ticket-fields" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ticket-fields",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/ticket-fields`

`HEAD api/ticket-fields`


<!-- END_e4dacac629a347e4f9f2679bc5f60ea0 -->

<!-- START_15077a43484dd2ba629cf97433962e1f -->
## Display the specified TicketField.

> Example request:

```bash
curl -X GET "http://localhost/api/ticket-fields/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ticket-fields/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/ticket-fields/{id}`

`HEAD api/ticket-fields/{id}`


<!-- END_15077a43484dd2ba629cf97433962e1f -->

<!-- START_f44e001b90d91a084495fed4e8e73451 -->
## Store a new TicketField.

> Example request:

```bash
curl -X POST "http://localhost/api/ticket-fields/tickets/{type}" \
-H "Accept: application/json" \
    -d "name"="quia" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ticket-fields/tickets/{type}",
    "method": "POST",
    "data": {
        "name": "quia"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/ticket-fields/tickets/{type}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_f44e001b90d91a084495fed4e8e73451 -->

<!-- START_fa9d25e641dc0b935b3e63784ff424e2 -->
## Update the specified TicketField.

> Example request:

```bash
curl -X PUT "http://localhost/api/ticket-fields/tickets" \
-H "Accept: application/json" \
    -d "name"="nostrum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ticket-fields/tickets",
    "method": "PUT",
    "data": {
        "name": "nostrum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/ticket-fields/tickets`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_fa9d25e641dc0b935b3e63784ff424e2 -->

<!-- START_39dd1b2825ca645ae9ea1a2312f60104 -->
## Remove the specified TicketField.

> Example request:

```bash
curl -X DELETE "http://localhost/api/ticket-fields/tickets/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ticket-fields/tickets/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/ticket-fields/tickets/{id}`


<!-- END_39dd1b2825ca645ae9ea1a2312f60104 -->

<!-- START_f910f434bd763088907fceeab3fdb2ef -->
## sort blocks

> Example request:

```bash
curl -X POST "http://localhost/api/ticket-fields/tickets/enable" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ticket-fields/tickets/enable",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/ticket-fields/tickets/enable`


<!-- END_f910f434bd763088907fceeab3fdb2ef -->

#User

User resource representation.
<!-- START_977646f542a4f1b4bc29811257e72cb3 -->
## List of Users.

> Example request:

```bash
curl -X GET "http://localhost/api/company/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/users`

`HEAD api/company/users`


<!-- END_977646f542a4f1b4bc29811257e72cb3 -->

<!-- START_1da238684f5d13087015eb17b19dc4bd -->
## Display the specified User.

> Example request:

```bash
curl -X GET "http://localhost/api/company/users/{role?}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/users/{role?}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/users/{role?}`

`HEAD api/company/users/{role?}`


<!-- END_1da238684f5d13087015eb17b19dc4bd -->

<!-- START_7cc654034664d3e96c06ed019401455a -->
## Store a new User.

> Example request:

```bash
curl -X POST "http://localhost/api/company/users/{role?}" \
-H "Accept: application/json" \
    -d "email"="eulalia.schmitt@example.com" \
    -d "name"="iure" \
    -d "phone"="iure" \
    -d "role"="support" \
    -d "password"="iure" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/users/{role?}",
    "method": "POST",
    "data": {
        "email": "eulalia.schmitt@example.com",
        "name": "iure",
        "phone": "iure",
        "role": "support",
        "password": "iure"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/company/users/{role?}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 
    name | string |  required  | 
    phone | string |  optional  | 
    role | string |  optional  | `admin`, `employee`, `support`, `current`, `next` or `list`
    password | string |  required  | 

<!-- END_7cc654034664d3e96c06ed019401455a -->

<!-- START_d076a035176802e89e91d0bdf0c71233 -->
## Update the specified User.

> Example request:

```bash
curl -X PUT "http://localhost/api/company/users/{role?}" \
-H "Accept: application/json" \
    -d "email"="roberts.antwon@example.org" \
    -d "name"="ab" \
    -d "phone"="ab" \
    -d "role"="admin" \
    -d "password"="ab" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/users/{role?}",
    "method": "PUT",
    "data": {
        "email": "roberts.antwon@example.org",
        "name": "ab",
        "phone": "ab",
        "role": "admin",
        "password": "ab"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/company/users/{role?}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 
    name | string |  required  | 
    phone | string |  optional  | 
    role | string |  optional  | `admin`, `employee`, `support`, `current`, `next` or `list`
    password | string |  required  | 

<!-- END_d076a035176802e89e91d0bdf0c71233 -->

<!-- START_aa89aed8ba0e80be13a3658d7a765ea2 -->
## Remove the specified User.

> Example request:

```bash
curl -X DELETE "http://localhost/api/company/users//{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/users//{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/company/users//{id}`


<!-- END_aa89aed8ba0e80be13a3658d7a765ea2 -->

#UserGroup

UserGroup resource representation.
<!-- START_f81ffef4b58d68e9cbbaaa303877e9b4 -->
## List of UserGroups.

> Example request:

```bash
curl -X GET "http://localhost/api/company/user-groups" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/user-groups",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/user-groups`

`HEAD api/company/user-groups`


<!-- END_f81ffef4b58d68e9cbbaaa303877e9b4 -->

<!-- START_afd3e5f57bb831cec6e3c0679ee2df31 -->
## Display the specified UserGroup.

> Example request:

```bash
curl -X GET "http://localhost/api/company/user-groups/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/user-groups/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/user-groups/{id}`

`HEAD api/company/user-groups/{id}`


<!-- END_afd3e5f57bb831cec6e3c0679ee2df31 -->

<!-- START_0596eb501c1a7b49f06a121e0130dee1 -->
## Store a new UserGroup.

> Example request:

```bash
curl -X POST "http://localhost/api/company/user-groups/create" \
-H "Accept: application/json" \
    -d "name"="est" \
    -d "channels"="est" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/user-groups/create",
    "method": "POST",
    "data": {
        "name": "est",
        "channels": "est"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/company/user-groups/create`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    channels | array |  required  | Minimum: `1`

<!-- END_0596eb501c1a7b49f06a121e0130dee1 -->

<!-- START_2213d328121f57a45d46523233cac62f -->
## Update the specified UserGroup.

> Example request:

```bash
curl -X PUT "http://localhost/api/company/user-groups/{id}" \
-H "Accept: application/json" \
    -d "name"="dicta" \
    -d "channels"="dicta" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/user-groups/{id}",
    "method": "PUT",
    "data": {
        "name": "dicta",
        "channels": "dicta"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/company/user-groups/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    channels | array |  required  | Minimum: `1`

<!-- END_2213d328121f57a45d46523233cac62f -->

<!-- START_e75cdcd69dd2505ba37165e45efafcb0 -->
## Remove the specified UserGroup.

> Example request:

```bash
curl -X DELETE "http://localhost/api/company/user-groups/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/user-groups/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/company/user-groups/{id}`


<!-- END_e75cdcd69dd2505ba37165e45efafcb0 -->

#Working Days

Working Days resource representation.
<!-- START_63c29df81607f4362260dc0e5c937c4a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/company/working-days" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/working-days",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/company/working-days`

`HEAD api/company/working-days`


<!-- END_63c29df81607f4362260dc0e5c937c4a -->

<!-- START_4066ad1d8c5aecc4ac5cc9d968b4ea3d -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/company/save-working-days" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/company/save-working-days",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/company/save-working-days`


<!-- END_4066ad1d8c5aecc4ac5cc9d968b4ea3d -->

