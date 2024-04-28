<?php
include_once "Model/Histories.php";
include_once "Model/Users.php";
switch($action){

case "readIdhistory":
 $id_user=$_GET["id_user"];
 $his=new Histories();
 $u=new Users();
 $user=$u->getById($id_user);
 $ListeHistory=$his->get_history($id_user);
include_once "Views/Admins/history.php";
break;

case "deletehistory":
  $id_user=$_GET["id_user"];
  $his=new Histories();
  $id=(int)$_GET["id_hackathon"];
  $id_user=(int)$_GET["id_user"];
  $ha=$h->getById($id);
  $his=new Histories();
  $resultat=$his->delete($id_user);
  $his->add_history(["id_user"=>$id_user,"activity"=>"Deleted ".$ha->name_hackathon." hackathon"]);
  include_once "Views/Admins/delete_history.php"; 
  break;         
}
  ?> 