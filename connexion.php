<?php
/*database Connetion*/
function connexionDB(){
    try{
        $db = new PDO("mysql:host=localhost;port=3308;dbname=hackhub", "root", "");
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
    catch(PDOException $exception){
        die($exception->getMessage());
    }
}
?>