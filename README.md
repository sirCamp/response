# Sircamp Response
This package allows you to have a "Boostrap" similar rest response object using Info, Warning, Error, Success type.

With this package you only return the right response object to your views or your REST response, you can set the correct type of Boostrap alert without any *IF* statement.
Also, in each response object that you create, you can set a message an data payload with all your data.

## ISTALLATION

From you root project's directory type:

```php
composer require sircamp/response
```

An you obtain,in  according to your composer.json the right version (stable or dev)

## USAGE

In the each file where you use one of the Sircamp\Response objects you must add the right namespace.
```php
use Sircamp\Response\InfoResponse as InfoResponse;
use Sircamp\Response\WarningResponse as WarningResponse;
use Sircamp\Response\SuccessResponse as SuccessResponse;
use Sircamp\Response\ErrorResponse as ErrorResponse;
```

### new Response
To create new REsponse object ( InfoResponse for example ) you need to have 2 parameters.

A String messaage, that could be empty, and a array named data.

The data array could contain everthing you want, object, string and much more.

Pay attention that each type of object has automatically set the **type** string parameter:

+ In case of **InfoResponse** the **type** attribute is setted to **info**
+ In case of **WarningResponse** the **type** attribute is setted to **warning**
+ In case of **SuccessResponse** the **type** attribute is setted to **success**
+ In case of **ErrorResponse** the **type** attribute is setted to **error**


```php

$data = [
    'object' => new Object('example'),
    'number' => 1,
    'string' => "hello world"
    //etc
];

$message = "I want to say hello world";

$infoResponse = new InfoResponse($data,$message);
```
