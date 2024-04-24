<?php
include_once "Model/Participations.php";
include_once "Model/Hackathons.php";
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

    case "readMyparticipations":
            session_start();
            $id_user=$_SESSION["id"];
            $p=new Participations();
            $ListeParticipations=$p->get_myparticipations($id_user);
            $h=new Hackathons();
            foreach($ListeParticipations as $Participation ){
                $hack=$h->getById($Participation->id_hackathon);
                if($hack!=false)
                $Participation->id_hackathon=$hack->name_hackathon;
            }
            include_once "Views/Participations/my_particiations.php";
            break;

    case "updateMyparticipation1":
            $id_participation=(int)$_GET["id_participation"];
            $p=new Participations();
            $p=$p->getById($id_participation);
            include_once "Views/Participations/update_participation1.php";
            break;

    case "updateMyparticipation2":
        if (empty($_POST["team_name"]) or empty($_POST["members"])){?>
            <script>
            alert("Please fill out all fields !");
            </script>        
            <?php
            }
            else{
            $team_name=$_POST["team_name"];
            $num_team_members=$_POST["members"];
            $id_participation=$_GET["id_participation"];
            $p=new Participations();
            $resultat=$p->update(["team_name"=>$team_name,"num_team_members"=>$num_team_members],$id_participation);
            include_once "Views/Participations/update_participation2.php";
            }
            break;
    case "deleteMyparticipation":
        $p=new Participations();
        $id=(int)$_GET["id_participation"];
        $resultat=$p->delete($id);  
        include_once "Views/Participations/delete_hackathon.php";
        break;  
               
                                
}
?>    
