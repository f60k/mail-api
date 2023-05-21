<?php
require_once("vpop/UserGet.php");
require_once("request/Request.class.php");
$request=&new Request();
$vpop=&new UserGet($request);
$vpop->execute();
?>