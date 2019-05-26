# PHP-HTTP-RESPONSE
A simple library to facilitate http response

## Installation
```
 composer require tommmarti/php-http-response
```
## use
```
use tommarti\httpResponse\HttpCode;
use tommarti\httpResponse\Response;

$payload = array(
    "id" => 1,
    "name" => "Kate"
);

$response = new Response();
$response->make(true, HttpCode::S_200, $payload, "json");
```

## http response format
### Json
```
{
    "success": true,
    "payload": {}
}
```
#### with error
```
{
    "success": false,
    "payload": {},
    "error": {
        "code": 404,
        "message": "Not Found"
    }
}
```
### Yaml
```
success: true
payload:
    id: 1
    name: 'Tom'

```
#### with error
```
success: false
payload:
    id: 1
    name: 'Tom'
error:
    code: 404
    message: 'Not Found'
```
