<?php
require_once("vpop/Controller.php")
require_once("utils/Validator.php");
/**
* 
*/
class UserAdd extends Controller
{
	var $pass=null;
	var $username=null;
	var $domain=null;
	var $fwd1=null;
	var $fwd2=null;
	var $fwd3=null;
	
	protected function body()
	{
		if(!userExists($this->request->get('mailAddress'))
		{
			if(!$this->validator->isEmpty($this->request->get('password')))
			{
				if($this->validator->checkPasswd($this->request->get('password')))
				{
					$this->pass=$this->request->get('password');
				}
				else
				{
					//Error : password length
				}
			}
			
			
		}
		else
		{
			//Error : User already exists
		}
	}
	

	function __construct($request)
	{
		parent::Controller($request);
	}
}

?>