<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

require_once __DIR__ . '/../src/Response/InfoResponse.php';

$info = new InfoResponse(array(),"ok");
echo $info->message;
