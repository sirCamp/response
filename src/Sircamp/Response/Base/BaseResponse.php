<?php namespace Sircamp\Response\Base;

use Respect\Validation\Validator as Validator;
use \InvalidArgumentException as InvalidArgumentException;

class BaseResponse {

	public static $allowedType = array('info','success','error','warning');

	public static $customAllowedType = array();

	public $type = '';

	private $data = array();

	private $message = '';


	public function __construct($data,$message){

		if(Validator::arr()->validate($data) && Validator::string()->validate($message)){
			$this->data = $data;
			$this->message = $message;
		}
		else{

			throw new InvalidArgumentException("make sure you have passed an array or ArrayObject istances for $data parameter and a String for $message parameter ", 1);	
		}

	}

	public function getData(){
		
		return $this->data;
	}


	public function setData($data){
		
		if(Validator::arr()->validate($data)){
			$this->data = $data;
		}
		else{

			throw new InvalidArgumentException("make sure you have passed an array or ArrayObject istances for $data parameter", 1);	
		}
		
	}

	public function getMessage(){

		return $this->message;
	}

	public function setMessage($message){

		if(Validator::string()->validate($message)){
			$this->message = $message;
		}
		else{

			throw new InvalidArgumentException("make sure you have passed a String for $message parameter ", 1);	
		}
		
	}

	public function setType($type){

		if(in_array($type,self::$allowedType) || in_array($type ,self::$customAllowedType)){
			$this->type = $type;
		}
		else{
			
			$string = implode(",",  array_merge(self::$allowedType,self::$customAllowedType));
			throw new InvalidArgumentException("make sure you have passed a type that is present in this possibilities", 1);
		}
	}

	public function getType(){

		return $this->type;
	}

	public static function addAllowedType($type){
		if(Validator::string()->validate($type)){
			array_push(self::$customAllowedType, $type);
		}
		else{
			throw new InvalidArgumentException("make sure you have passed a string instance");
		}

	}

	
}