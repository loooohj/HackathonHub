<?php
include_once "connexion.php";
$db=connexionDB();
session_start();
$login=$db->quote($_SESSION["login"]);
$sql="SELECT * FROM admins WHERE login=$login";
try{
    $resultat=$db->query($sql);
    $admin=$resultat->fetch();
    $_SESSION["admin_name"]=$admin["admin_name"];
}
catch(PDOException $exception){
    die($exception->getMessage());
}
?>