<?php
require_once("vpop/UserAdd.php");
require_once("request/Request.class.php");
$request=&new Request();
$vpop=&new UserAdd($request);
$vpop->execute();
?>