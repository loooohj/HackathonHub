<?php
include_once "Model/Histories.php";
include_once "Model/Ahistories.php";
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
  $id_admin=(int)$_GET["id_admin"];
  $h=new Ahistories();
  $his=new Histories();
  $u=new Users();
  $user=$u->getById($id_user);
  $resultat=$his->delete_history($id_user);
  $h->add_history(["AdminID"=>$id_admin,"Activity"=>"Deleted ".$user->name."'s history","TargetID"=>$user->id]);
  include_once "Views/Admins/delete_history.php"; 
  break;      
}
?> 