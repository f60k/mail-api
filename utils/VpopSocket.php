<?php
/**
* 
*/
class VpopSocket
{
	var $vpop=null;
	
	function __construct($name, $pass)
	{
		
		$this->vpop=&new Net_Vpopmaild();

		try
		{
			$this->vpop->connect('localhost', '89', '30');
		}
		catch(Net_Vpopmaild_FatalException $e)
		{
			echo 'Error connecting to vpopmaild: ' . $e->getMessage();
			exit;
		}

		if (!$vpop->authenticate($name, $pass))
		{
			echo "Error: login failed";
			exit;
		}
	}
}

?>