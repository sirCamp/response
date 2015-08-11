<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Sircamp\Response\InfoResponse as InfoResponse;
use Sircamp\Response\WarningResponse as WarningResponse;
use Sircamp\Response\SuccessResponse as SuccessResponse;
use Sircamp\Response\ErrorResponse as ErrorResponse;

$info = new InfoResponse(array(),"info");
echo "\nClass InfoResponse:\n";
echo "message: ".($info->getMessage() == "info")."\n";
echo "type: ".($info->getType() == "info")."\n";
echo "data: ".($info->getData() == array())."\n";


$info = new WarningResponse(array(),"warning");
echo "\nClass WarningResponse:\n";
echo "message: ".($info->getMessage() == "warning")."\n";
echo "type: ".($info->getType() == "warning")."\n";
echo "data: ".($info->getData() == array())."\n";


$info = new SuccessResponse(array(),"success");
echo "\nClass SuccessResponse:\n";
echo "message: ".($info->getMessage() == "success")."\n";
echo "type: ".($info->getType() == "success")."\n";
echo "data: ".($info->getData() == array())."\n";

$info = new ErrorResponse(array(),"error");
echo "\nClass ErrorResponse:\n";
echo "message: ".($info->getMessage() == "error")."\n";
echo "type: ".($info->getType() == "error")."\n";
echo "data: ".($info->getData() == array())."\n";