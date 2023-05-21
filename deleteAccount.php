<?php
require_once("vpop/UserDelete.php");
require_once("request/Request.class.php");
$request=&new Request();
$vpop=&new UserDelete($request);
$vpop->execute();
?>