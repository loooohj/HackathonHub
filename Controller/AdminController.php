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
    case "deleteAdmin":
        $a=new Admins();
        $id=(int)$_GET["id_admin"];
        $resultat=$a->delete($id);  
        include_once "Views/Admins/delete_admin.php";
        break;   

    case "addAdmin1":
        include_once "Views/Admins/add_admin1.php";
        break;
    case "addAdmin2":
            if (empty($_POST["name"]) or empty($_POST["login"]) or empty($_POST["email"]) or empty($_POST["password"]) or empty($_POST["admin_type"])){?>
            <script>
            alert("Please fill out all fields !");
            </script>        
            <?php
            }
    
            $name=$_POST["name"]; 
            $login=$_POST["login"]; 
            $email=$_POST["email"]; 
            $password=$_POST["password"];
            $a=new Admins();
            $resultat=$a->add(["admin_name"=>$name,"login"=>$login,"admin_email"=>$email,"admin_password"=>$password]);
            include_once "Views/Admins/add_admin2.php";
            break;
            
         
         
        }
         


    



?>