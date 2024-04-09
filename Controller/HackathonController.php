<?php
include_once "Model/Hackathons.php";
switch($action){


case "createHackathon1":
    include_once "Views/Hackathons/create_hackathon1.php";
    break;


case "createHackathon2":
    if(empty($_POST["name_hackathon"]) or empty($_POST["date"]) or empty($_POST["place"]) or empty($_POST["max_num_participants"]) or empty($_POST["img"]) or empty($_POST["start_time"]) or empty($_POST["end_time"]) or empty($_POST["num_days"]))
    ?>
    <script>    
    die("Please fill out all fields !");
    </script>
    <?php
    /*lazem nrecuperi id user li ajouta hackaton o nhotha f champs id_user*/
    $name_hackathon=$_POST["name_hackathon"];
    $date=$_POST["date"];
    $place=$_POST["place"];
    $max_num_participants=(int)$_POST["max_num_participants"];
    $img=$_POST["img"];
    $start_time=$_POST["start_time"];
    $end_time=$_POST["end_time"];
    $num_days=(int)$_POST["num_days"];
    $h=new Hackathons();
    $resultat=$h->add(["name_hackathon"=>$name_hackathon,"date"=>$date,"place"=>$place,"max_num_participants"=>$max_num_participants,"img"=>$img,"start_time"=>$start_time,"end_time"=>$end_time,"num_days"=>$num_days]);
    include_once "Views/Hackathons/create_hackathon.php";
    break;


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
    include_once "../Views/Hackathons/my_hackathons.php";
    break;
    
    
case "updateMyhackathon1":
    if(empty($_GET["id_hackathon"])) die("Please provide the hackathon ID");
    $id_hackathon=(int)$_GET["id_hackathon"];
    $h=new Hackathons();
    $h=$h->getById($id_hackathon);
    if($h==false) die("Hackathon not found!");
    include_once "../Views/Hackathons/update_hackathon1.php";
    break;


case "updateMyhackathon2":
    if(empty($_POST["name_hackathon"]) or empty($_POST["date"]) or empty($_POST["place"]) or empty($_POST["max_num_participants"]) or empty($_POST["img"]) or empty($_POST["start_time"]) or empty($_POST["end_time"]) or empty($_POST["num_days"]))
    die("Please fill out all fields !");
    $name_hackathon=$_POST["name_hackathon"];
    $date=$_POST["date"];
    $place=$_POST["place"];
    $max_num_participants=(int)$_POST["max_num_participants"];
    $img=$_POST["img"];
    $start_time=$_POST["start_time"];
    $end_time=$_POST["end_time"];
    $num_days=(int)$_POST["num_days"];
    $h=new Hackathons();
    $resultat=$h->update_hackathon($name_hackathon,$date,$place,$max_num_participants,$img,$start_time,$end_time,$num_days);
    include_once "../Views/Hackathons/update_hackathon2.php";
    break;


case "deleteMyhackathon":
    if(empty($_GET["id_hackathon"])) die("Please provide the hackathon ID");
    $h=new Hackathons();
    $id=(int)$_GET["id_hackathon"];
    $resultat=$h->delete($id);  
    include_once "../Views/Hackathons/delete_hackathon.php";
    break;  
    
}
?>