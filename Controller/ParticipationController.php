<?php
include_once "Model/Participations.php";
switch($action){
    case "participate":
        $id= $_GET["id_hackathon"];
        $max=$_GET["max"];
        $min=$_GET["min"];
        $image=$_GET["image"];
        session_start();
        $id_user=$_SESSION["id"];
        $p=new Participations();
        $res=$p->getByhack_user($id,$id_user);
        if($res==false){  
            ?>
            <script>
            alert("you are already participated");
            </script>
        <?php
        die();
        }
        else{
        include_once "Views/Participations/participate1.php";
        break;
        }
        
    case "participate2":
        if (empty($_POST["team_name"]) or empty($_POST["members"])){?>
            <script>
            alert("Please fill out all fields !");
            </script>        
            <?php
            }
            else{    
            $team_name=$_POST["team_name"]; 
            $num_team_members=$_POST["members"];
            $id_user=$_POST["id_user"];
            $id=$_POST["id"];
            $p=new Participations();
            $resultat=$p->add(["team_name"=>$team_name,"num_team_members"=>$num_team_members,"id_user"=>$id_user,"id_hackathon"=>$id]);
            include_once "Views/Participations/participate.php";
            break;
            }
    case "readParticipants":
            $id= $_GET["id_hackathon"];
            $p=new Participations();
            $ListeParticipants=$p->getParticipantsByid($id);
            include_once "Views/Participations/participants.php";
             break;        
}
?>    
