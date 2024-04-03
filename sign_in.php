<?php
include_once "connexion.php";
$db=connexionDB();
$email=$db->quote($_POST["email"]);
$sql="SELECT * FROM users WHERE email_address=$email";
try{
    $stmt = $db->query($sql);
    if($stmt->rowCount()==1){ 
        session_start();
        $_SESSION["email"]=$_POST["email"];
        header('location:hackathons.php');
        
    }
}
catch(PDOException $exception){
    die($exception->getMessage());
}
?>