<?php
class Request{

	var $params = array();
	
	function Request() {
		if( is_array($_REQUEST) ){
			foreach($_REQUEST as $name=>$value){
				$this->add($name, $value);
			}
		}
	}

	function add($name, $data){
		$this->params[$name]=$data;
	}

	function get($name){
		return $this->params[$name];
	}
}
?>