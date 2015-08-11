<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Sircamp\Response\InfoResponse as InfoResponse;

$info = new InfoResponse(array(),"ok");
echo $info->message;
