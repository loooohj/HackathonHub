<?php
/*database Connexion*/
function connexionDB(){
    try{
        $db = new PDO("mysql:host=localhost;dbname=hackathonhub", "root", "");
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    catch(PDOException $exception){
        die($exception->getMessage());
    }
}
?>