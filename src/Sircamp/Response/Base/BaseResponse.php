<?php namespace Sircamp\Response\Base;

use Respect\Validation\Validator as Validator;
use \InvalidArgumentException as InvalidArgumentException;
use \JsonSerializable as JsonSerializable;

class BaseResponse implements JsonSerializable{
	
	/**
	* The value allowed type of response
	* 
	* @static 
	* @var mix 
	*/

	public static $allowedType = array('info','success','error','warning');
	
	/**
	* The value of custom allowed type of Response
	*
	* @static
	* @var string
	*/
	public static $customAllowedType = array();
	
	/**
	* The value of type of Response
	* 
	* @var string
	*/
	public $type = '';
	
	/**
	* The value of message Response
	* 
	* @var mixed
	*/
	private $data = array();

	/**
	* The value of message Response
	* 
	* @var string
	*/
	private $message = '';

	/**
	 * This is the constructor of Superclass, it aspects two parameters, $data (the contenct of response) and messaeg, the message of repsonse
	 * 
	 * @param mixed $data, the value of data and string $message, the value of message
	 * @return 
	 */
	public function __construct($data,$message){

		if(Validator::arr()->validate($data) && Validator::string()->validate($message)){
			$this->data = $data;
			$this->message = $message;
		}
		else{

			throw new InvalidArgumentException("make sure you have passed an array or ArrayObject istances for $data parameter and a String for $message parameter ", 1);	
		}

	}

	/**
	 * Gets the value of data.
	 *
	 * @return mixed
	 */
	public function getData(){
		
		return $this->data;
	}

	/**
	 * Set the data content of Response, now the $data variable can be a array or a 
	 * ArrayObject instaces, in the future I provide to allow to set a StandardClass obj
	 * 
	 * @param mixed $data, the value of data
	 * @return 
	 */
	public function setData($data){
		
		if(Validator::arr()->validate($data)){
			$this->data = $data;
		}
		else{

			throw new InvalidArgumentException("make sure you have passed an array or ArrayObject istances for $data parameter", 1);	
		}
		
	}

	/**
	 * Gets the value of message.
	 *
	 * @return string
	 */
	public function getMessage(){

		return $this->message;
	}

	/**
	 * Set the message of Response
	 * the message must be a string 
	 *
	 * @param string $message, the value of message
	 * @return 
	 */
	public function setMessage($message){

		if(Validator::string()->validate($message)){
			$this->message = $message;
		}
		else{

			throw new InvalidArgumentException("make sure you have passed a String for $message parameter ", 1);	
		}
		
	}

	/**
	 * Set the type of Response at runtime
	 * the type must be in $allowedType or in $customAllowedType
	 *
	 * @param string $type, the value of new type
	 * @return 
	 */
	public function setType($type){

		if(in_array($type,self::$allowedType) || in_array($type ,self::$customAllowedType)){
			$this->type = $type;
		}
		else{
			
			$string = implode(",",  array_merge(self::$allowedType,self::$customAllowedType));
			throw new InvalidArgumentException("make sure you have passed a type that is present in this possibilities", 1);
		}
	}

	/**
	 * Gets the value of type.
	 *
	 * @return string
	 */
	public function getType(){

		return $this->type;
	}


	/**
	 * Add a custom allowed type on runtime.
	 * Adding another type to extend with another class on runtime
	 *
	 * @param string $type, the value of new type
	 * @return 
	 */
	public static function addAllowedType($type){
		if(Validator::string()->validate($type)){
			array_push(self::$customAllowedType, $type);
		}
		else{
			throw new InvalidArgumentException("make sure you have passed a string instance");
		}

	}

	/**
	 * This is a method eredith from JsonSerialize
	 * This method need to convert object to json
	 *
	 * @param 
	 * @return 
	 */
	public function jsonSerialize(){
	    return [
	        
	        'response' => [
	            'type' => $this->type,
	            'message' => $this->message,
	            'data'=>$this->data
	        ]
	    ];
	}

	
}