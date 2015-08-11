<?php namespace Sircamp\Response\Base;


class BaseResponse {

	public static $allowedType = array('info','success','error','warning');

	private $type = '';

	private $data = array();

	private $message = '';


	public function __construct($data,$message){

		$this->data = $data;
		$this->message = $message;
	}

	public function getData(){
		
		return $this->data;
	}


	public function setData($data){
		
		$this->data = $data;
	}

	public function getMessage(){

		return $this->message;
	}

	public function setMessage($message){

		$this->message = $message;
	}

	public function setType($type){

		$this->type = $type;
	}

	public function getType(){

		return $this->type;
	}


}