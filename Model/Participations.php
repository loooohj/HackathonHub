<?php
include_once "Model.php";
$model=new Model();
class Participations extends Model{
    private $id_participation;
    private $id_user;
    private $id_hackathon;
    private $team_name;
    private $num_team_members;
    protected $table="participations";
    protected $clePrimaire="id_participation";
    public function getId_participation(){
        return $this->id_participation;
    }
    public function setId_participation($id_participation){
        $this->id_participation=$id_participation;
    }

    public function getId_user(){
        return $this->id_user;
    }
    public function setId_user($id_user){
        $this->id_user=$id_user;
    }

    public function getId_hackathon(){
        return $this->id_hackathon;
    }
    public function setId_hackathon($id_hackathon){
        $this->id_hackathon=$id_hackathon;
    }

    public function getTeam_name(){
        return $this->team_name;
    }
    public function setTeam_name($team_name){
        $this->team_name=$team_name;
    }

    public function getNum_team_members(){
        return $this->num_team_members;
    }
    public function setNum_team_members($name){
        $this->num_team_members=$name;
    }

    public function __construct($id_participation=null,$id_user=null,$id_hackathon=null,$team_name=null,$num_team_members=null){
        $this->id_participation=$id_participation;
        $this->id_hackathon=$id_hackathon;
        $this->id_user=$id_user;
        $this->team_name=$team_name;
        $this->num_team_members=$num_team_members;
    }

    public function getByhack_user($id_hackathon,$id_user){
        $db=self::Connection();
        $sql="SELECT * FROM participations  WHERE id_user=$id_user AND id_hackathon=$id_hackathon";
        try{
            $resultat=$db->query($sql);
            if($resultat->rowCount()==1){ 
                return false;
            }    
            return true;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
        finally{
            $resultat->closeCursor();
        }
    }

    public function getParticipantsByid($id){
        $db=self::Connection();
        $sql="SELECT * FROM participations  WHERE id_hackathon=$id";
        $liste=[];
        try{
            $resultat=$db->query($sql);
            $liste=$resultat->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
        finally{
            $resultat->closeCursor();
        }
        return $liste;
    }

    public function get_myparticipations($id){
        $db=self::Connection();
        $sql= "SELECT * FROM participations WHERE id_user=$id";
        $Liste=[];
        try{
            $resultat=$db->query($sql);
            $Liste=$resultat->fetchAll(PDO::FETCH_OBJ);
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
        finally{
            $resultat->closeCursor();
        }
        return $Liste;
    }
}