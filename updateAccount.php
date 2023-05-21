<?php
require_once("vpop/UserUpdate.php");
require_once("request/Request.class.php");
$request=&new Request();
$vpop=&new UserUpdate($request);
$vpop->execute();
?>