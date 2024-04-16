<?php
include_once "Model/Hackathons.php";
switch($action){


case "createHackathon1":
    include_once "Views/Hackathons/create_hackathon1.php";
    break;


case "createHackathon2":
    if(empty($_POST["name_hackathon"]) or empty($_POST["date"]) or empty($_POST["place"]) or empty($_POST["max_num_teams"]) or empty($_POST["price"]) or empty($_POST["min_num_members"]) or empty($_POST["img"]) or empty($_POST["max_num_members"]) or empty($_POST["start_time"]) or empty($_POST["end_time"]) or empty($_POST["num_days"]) or empty($_POST["descriptive_text"])){
    ?>
    <script>    
    alert("Please fill out all fields !");
    </script>
    <?php
    ?>
    <?php
}   
else{
    $name_hackathon=$_POST["name_hackathon"];
    $date=$_POST["date"];
    $place=$_POST["place"];
    $max_num_teams=(int)$_POST["max_num_teams"];
    $img=$_POST["img"];
    $start_time=$_POST["start_time"];
    $end_time=$_POST["end_time"];
    $num_days=(int)$_POST["num_days"];
    $id=(int)$_POST["id"];
    $price=(int)$_POST["price"];
    $max_num_members=(int)$_POST["max_num_members"];
    $min_num_members=(int)$_POST["min_num_members"];
    $descriptive_text=$_POST["descriptive_text"];
    $h=new Hackathons();
    $resultat=$h->add(["id_user"=>$id,"name_hackathon"=>$name_hackathon,"date"=>$date,"place"=>$place,"max_num_teams"=>$max_num_teams,"img"=>$img,"start_time"=>$start_time,"end_time"=>$end_time,"num_days"=>$num_days,"price"=>$price,"max_num_members"=>$max_num_members,"min_num_members"=>$min_num_members,"descriptive_text"=>$descriptive_text]);
    include_once "Views/Hackathons/create_hackathon.php";
    break;
     }


case "readHackathons":
    $h=new Hackathons();
    $ListeHackathons=$h->getall();
    include_once "Views/Hackathons/hackathons.php";
    break;

    case "read3Hackathons":
    $h=new Hackathons();
    $ListeHackathons=$h->get_3hackathons();
    include_once "Views/Hackathons/home_page.php";
    break;


case "readMyhackathons":
    session_start();
    $id_user=$_SESSION["id"];
    $h=new Hackathons();
    $ListeHackathons=$h->get_myhackathons($id_user);
    include_once "Views/Hackathons/my_hackathons.php";
    break;
case "readHackathonByid":
    $id_hackathon=(int)$_GET["id_hackathon"];
    $h=new Hackathons();
    $h=$h->getById($id_hackathon); 
    include_once "Views/Hackathons/details_hackathon.php";  
    break;

case "updateMyhackathon1":
    $id_hackathon=(int)$_GET["id_hackathon"];
    $h=new Hackathons();
    $h=$h->getById($id_hackathon);
    include_once "Views/Hackathons/update_hackathon1.php";
    break;


case "updateMyhackathon2":
    if(empty($_POST["name_hackathon"]) or empty($_POST["date"]) or empty($_POST["place"]) or empty($_POST["max_num_teams"])  or empty($_POST["price"]) or empty($_POST["min_num_members"]) or empty($_POST["img"]) or empty($_POST["max_num_members"]) or empty($_POST["start_time"]) or empty($_POST["end_time"]) or empty($_POST["num_days"]) or empty($_POST["descriptive_text"]))
    die("Please fill out all fields !");
    $name_hackathon=$_POST["name_hackathon"];
    $date=$_POST["date"];
    $place=$_POST["place"];
    $max_num_teams=(int)$_POST["max_num_teams"];
    $img=$_POST["img"];
    $start_time=$_POST["start_time"];
    $end_time=$_POST["end_time"];
    $num_days=(int)$_POST["num_days"];
    $price=(int)$_POST["price"];
    $max_num_members=(int)$_POST["max_num_members"];
    $min_num_members=(int)$_POST["min_num_members"];
    $descriptive_text=$_POST["descriptive_text"];
    $id_hackathon=$_GET["id_hackathon"];
    $h=new Hackathons();
    $resultat=$h->update(["name_hackathon"=>$name_hackathon,"date"=>$date,"place"=>$place,"max_num_teams"=>$max_num_teams,"img"=>$img,"start_time"=>$start_time,"end_time"=>$end_time,"num_days"=>$num_days,"price"=>$price,"max_num_members"=>$max_num_members,"min_num_members"=>$min_num_members,"descriptive_text"=>$descriptive_text],$id_hackathon);
    include_once "Views/Hackathons/update_hackathon2.php";
    break;


case "deleteMyhackathon":
    $h=new Hackathons();
    $id=(int)$_GET["id_hackathon"];
    $resultat=$h->delete($id);  
    include_once "Views/Hackathons/delete_hackathon.php";
    break;  
    
}
?>