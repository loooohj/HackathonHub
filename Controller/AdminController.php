<?php
include_once "Model/Admins.php";
include_once "Model/Users.php";
include_once "Model/Hackathons.php";
switch($action){
    case "sign_in":
        $login=$_POST["login"];
        $password=$_POST["password"];
        $a=new Admins();
        $resultat=$a->sign_in($login,$password);
        $resultat=$a->update_last_login($login);
        session_start();
        $_SESSION["login"]=$login;
        include_once "Views/Admins/sign_in.php";
        break;

    case "log_in": 
        include_once "Views/Admins/log_in.php";
        break;

    case "readUsers":
        $u=new Users();
        $ListeUsers=$u->getall();
        include_once "Views/Admins/users.php";
        break;    

    case "readHackathons":
        $h=new Hackathons();
        $ListeHackathons=$h->getall();
        $u=new Users();
        foreach($ListeHackathons as $Hackathon){
            $user=$u->getById($Hackathon->id_user);
            if($user!=false)
            $Hackathon->id_user=$user->name;
        }
        include_once "Views/Admins/hackathons.php";
        break;  
    case "readAdmins":
        $a=new Admins();
        $ListeAdmins=$a->getall();      
        include_once "Views/Admins/admins.php";
        break;  
    }
?>