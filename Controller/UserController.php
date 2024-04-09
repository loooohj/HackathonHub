<?php
include_once "Model/Users.php";
switch($action){
   
   case "sign_in":
   $email=$_POST["email"];
   $password=$_POST["password"];
   $u=new Users();
   $resultat=$u->sign_in($email,$password);
   include_once "Views/Users/sign_in.php";
   break;

   case "sign_up":
    if (empty($_POST["first_name"]) or empty($_POST["name"]) or empty($_POST["email"]) or empty($_POST["tel"]) or empty($_POST["password"]) or empty($_POST["confirm_password"])){?>
    <script>
    alert("Please fill out all fields !");
    </script>        
    <?php
    }
    else{    
    $first_name=$_POST["first_name"]; 
    $name=$_POST["name"]; 
    $email=$_POST["email"]; 
    $tel=$_POST["tel"]; 
    $password=$_POST["password"];
    $u=new Users();
    $res=$u->getByEmail($email);
    if($res==false){  
        ?>
        <script>
        alert("Email address already exists");
        </script>
    <?php
    die();
    }
    else{
    $resultat=$u->add(["first_name"=>$first_name,"name"=>$name,"email_address"=>$email,"telephone_number"=>$tel,"password"=>$password]);
    include_once "Views/Users/sign_up.php";
    break;
    
 }
    ?>
<?php   
}
}
?>