<?php
if(!empty($_GET["controller"]))
$controller=$_GET["controller"];
else
$controller="home";
if(!empty($_GET["action"]))
$action=$_GET["action"];
else
$action="page";
$file=__DIR__.DIRECTORY_SEPARATOR."Controller".DIRECTORY_SEPARATOR.ucfirst($controller)."Controller.php";
include_once $file;
        
?>