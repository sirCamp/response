<?php namespace Sircamp\Response;

use Sircamp\Response\Base\BaseResponse as BaseResponse;

class ErrorResponse extends BaseResponse {

	/**
	* The value of type of Response
	* 
	* @var string
	*/
	public $type = 'error';

	/**
	 * This is the constructor of class, it aspects two parameters, $data (the contenct of response) and messaeg, the message of repsonse
	 * 
	 * @param mixed $data, the value of data and string $message, the value of message
	 * @return 
	 */
	public function __construct($data,$message){
		parent::__construct($data,$message);
	}
}