<?php
$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;
if(!empty($_GET["controller"]))
$controller=$_GET["controller"];
else
$controller="hackathon";
if(!empty($_GET["action"]))
$action=$_GET["action"];
else 
$action="read3Hackathons";
$file=$ROOT.$DS."Controller".$DS.ucfirst($controller)."Controller.php";
require_once $file;        

?>