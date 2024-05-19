<?php
include_once "Model/Ahistories.php";
include_once "Model/Admins.php";
switch($action){

case "readIdhistory":
 $id_admin=$_GET["id_admin"];
 $his=new Ahistories();
 $a=new Admins();
 $admin=$a->getById($id_admin);
 $ListeHistory=$his->get_history($id_admin);
include_once "Views/Admins/admin_history.php";
break;

case "deletehistory": 
  $id_admin=$_GET["id_admin"];
  $his=new Ahistories();
  $resultat=$his->delete_history($id_admin);
  include_once "Views/Admins/delete_history_admin.php"; 
  break;   
}

?> 