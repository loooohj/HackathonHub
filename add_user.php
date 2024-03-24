<?php
/*Add a new user */
include_once "connexion.php";
$db=connexionDB();
$name=$db->quote($_POST["name"]);
$first_name=$db->quote($_POST["first_name"]);
$email=$db->quote($_POST["email"]);
$tel=$_POST["tel"];
$confirm_password=$db->quote($_POST["confirm_password"]);
$password=$db->quote($_POST["password"]);
$sql="INSERT INTO users(name,first_name,email_address,telephone_number,password) VALUES($name,$first_name,$email,$tel,$password)";
try{
    $resultat=$db->exec($sql);
    if($resultat) header('location:hackathons.php');
}
catch(PDOException $exception){
    die($exception->getMessage());
}
?>