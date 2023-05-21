<?php
require_once("utils/Validator.php");
/**
* 
*/
abstract class Controller
{
	var $request=null;
	var $validator=null;
	
	final public function excute()
	{
		if($this->validator->checkMailFormat($this->request->get('mailAddress')))
		{
			body();
		}
		else
		{
			//Error : Malformed Email Address
		}
	}
	
	abstract protected function body();
	
	protected function userExists()
	{
		//TODO
	}
	
	function __construct($request)
	{
		$this->request=&$request;
		$this->validator=&new Validator();
	}
}

?>