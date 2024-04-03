<?php
/*Add a new user */
include_once "connexion.php";
include_once "Model/Users.php";
if(empty($_POST["name"]) or empty($_POST["first_name"]) or empty($_POST["email"]) or empty($_POST["tel"]) or empty($_POST["confirm_password"]) or empty($_POST["password"])){
    die("Please fill out all fields !");
} 
$name=$_POST["name"];
$first_name=$_POST["first_name"];
$email=$_POST["email"];
$tel=(int)$_POST["tel"];
$confirm_password=$_POST["confirm_password"];
$password=$_POST["password"];
$u=new Users();
$resultat=$u->add_user($name,$first_name,$email,$tel,$password);
if($resultat){
    session_start();
    $_SESSION["email"]=$_POST["email"];
    header('location:hackathons.php');
}    
?>