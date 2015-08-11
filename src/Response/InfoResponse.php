<?php namespace Sircamp\Response;

use Sircamp\Response\Base\BaseResponse as BaseResponse;

class InfoResponse extends BaseResponse {

	private $type = 'info';

	public function __construct($data,$message){
		parent::__construct($data,$message);
	}
}