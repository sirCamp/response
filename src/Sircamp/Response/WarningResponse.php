<?php namespace Sircamp\Response;

use Sircamp\Response\Base\BaseResponse as BaseResponse;

class WarningResponse extends BaseResponse {

	public $type = 'warning';

	public function __construct($data,$message){
		parent::__construct($data,$message);
	}
}