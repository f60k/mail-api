<?php
require_once("Mail/RFC822.php");
/**
* Detect malformed format
*/
class Validator
{
	

	const MIN_PWD = 4;
	const MAX_PWD = 12;
	
	public function checkMailFormat($value='')
	{
		return Mail_RFC822::isValidInetAddress( $value ) ? true: false;
	}

	public function checkPasswd($value='')
	{
		$len = mb_strlen($value);
		
		if ($len<Validator::MIN_PWD) {
			return false;
		}
		if ($len>Validator::MAX_PWD) {
			return false;
		}
		return true;
	}
	
	public function isEmpty($value='')
	{
		return mb_strlen($value)==0;
	}
	
	private function _checkEisuji($value='')
	{
		if (preg_match("/^[a-zA-Z0-9]+$/", $value)) {
			return true;
		}
		return false;
	}
	
	function __construct(argument)
	{
		
	}
}
?>