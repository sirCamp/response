# Sircamp Response
This package allows you to have a "Boostrap-like" rest response object using an Alert like: Info, Warning, Error, Success.

With this package you only return the right response object to your views or your REST response, you can set the correct type of Boostrap alert without any *IF* statement.
Also, on each response object that you create, you can set a message a data payload with all your data.

## INSTALLATION

In your root project's directory type:

```php
composer require sircamp/response
```

According to your composer.json, you obtain the right version (stable or dev)

## USAGE

In each file where you are using one of the Sircamp\Response objects you must add the right namespace.
```php
use Sircamp\Response\InfoResponse as InfoResponse;
use Sircamp\Response\WarningResponse as WarningResponse;
use Sircamp\Response\SuccessResponse as SuccessResponse;
use Sircamp\Response\DangerResponse as DangerResponse;
```

### new Response
To create new Response object ( InfoResponse for example ) you need two parameters.

A String message, that could be empty, and an array named data.

The data array could contain everthing you want, object, string and much more.

Pay attention that each type of object has automatically set the **type** string parameter:

+ In case of **InfoResponse** the **type** attribute is setted to **info**
+ In case of **WarningResponse** the **type** attribute is setted to **warning**
+ In case of **SuccessResponse** the **type** attribute is setted to **success**
+ In case of **DangerResponse** the **type** attribute is setted to **danger**


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

### getType

This method returns the type of object's istance

```php

$infoResponse->getType();
```

### setType

This method sets the type of the object

```php

$infoResponse->setType($type);
```

### getMessage

This method returns the message attribute of of the object

```php

$infoResponse->getMessage();
```

### setMessage

This method sets the message attribute of of the object

```php
$message = "I want to say hello world";
$infoResponse->setMessage($message);
```

### getData

This method returns the data attribute of of the object

```php

$infoResponse->getData();
```

### setData

This method sets the data attribute of of the object.
As seed the $data parameters is an associative array that contains a mixin of variable

```php
$data = [
    'object' => new Object('example'),
    'number' => 1,
    'string' => "hello world"
    //etc
];
$infoResponse->setData($data);
```


### addAllowedType

This method is a static method that allows you to add a castum response type.
If you add a custom type, you can create a new extended custom class ( with your desidered type ) at runtime.

**To create an anonymous runtime class you must have PHP 7**

```php
$type = "custom";
BaseResponse::addAllowedType($type);
```
