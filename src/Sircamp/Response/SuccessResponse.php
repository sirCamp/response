<?php namespace Sircamp\Response;

use Sircamp\Response\Base\BaseResponse as BaseResponse;

class SuccessResponse extends BaseResponse {

	public $type = 'success';

	public function __construct($data,$message){
		parent::__construct($data,$message);
	}
}