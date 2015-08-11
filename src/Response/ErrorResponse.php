<?php namespace Sircamp\Response;

use Sircamp\Response\Base\BaseResponse as BaseResponse;

class ErrorResponse extends BaseResponse {

	private $type = 'error';

	public function __construct($data,$message){
		parent::__construct($data,$message);
	}
}