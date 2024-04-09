<?php
include_once "Model.php";
class Hackathons extends Model{
    private $id_hackathon;
    private $id_user;
    private $name_hackathon;
    private $date;
    private $place;
    private $max_num_participants;
    private $img;
    private $start_time;
    private $end_time;
    private $num_days;
    protected $table="hackathons";
    protected $clePrimaire="id_hackathon";

    public function getIdhackathon(){
        return $this->id_hackathon;
    }
    public function setIdhackathon($id_hackathon){
        $this->id_hackathon=$id_hackathon;
    }

    public function getIduser(){
        return $this->id_user;
    }
    public function setIduser($id_user){
        $this->id_user=$id_user;
    }

    public function getNamehackathon(){
        return $this->name_hackathon;
    }
    public function setNamehackathon($name_hackathon){
        $this->name_hackathon=$name_hackathon;
    }

    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date=$date;
    }

    public function getPlace(){
        return $this->place;
    }
    public function setPlace($place){
        $this->place=$place;
    }

    public function getMax_num_participants(){
        return $this->max_num_participants;
    }
    public function setMax_num_participants($max_num_participants){
        $this->max_num_participants=$max_num_participants;
    }

    public function getImg(){
        return $this->img;
    }
    public function setImg($img){
        $this->img=$img;
    }
    
    public function getStartime(){
        return $this->start_time;
    }
    public function setStartime($start_time){
        $this->start_time=$start_time;
    }
   
    public function getEndtime(){
        return $this->end_time;
    }
    public function setEndtime($end_time){
        $this->end_time=$end_time;
    }
    
    public function getNumdays(){
        return $this->num_days;
    }
    public function setNumdays($num_days){
        $this->num_days=$num_days;
    }

    public function __construct($id_hackathon=null,$id_user=null,$name_hackathon=null,$date=null,$place=null,$max_num_participants=null,$img=null,$start_time=null,$end_time=null,$num_days=null){
     $this->id_hackathon=$id_hackathon;
     $this->id_user=$id_user;
     $this->name_hackathon=$name_hackathon;
     $this->date=$date;
     $this->place=$place;
     $this->max_num_participants=$max_num_participants;
     $this->img=$img;
     $this->start_time=$start_time;
     $this->end_time=$end_time;
     $this->num_days=$num_days; 
    }
    
public function update_hackathon($name_hackathon,$date,$place,$max_num_participants,$img,$start_time,$end_time,$num_days){
    $db=self::Connection();
    $sql="UPDATE hackathons SET name_hackathon=:name_hackathon, date=:date, place=:place, max_num_participants=:max_num_participants, img=:img, start_time=:start_time, end_time=:end_time, num_days=:num_days";
    $requete=$db->prepare($sql);    
    $requete->bindParam(":name_hackathon",$name_hackathon);    
    $requete->bindParam(":date",$date);    
    $requete->bindParam(":place",$place);    
    $requete->bindParam(":max_num_participants",$max_num_participants);    
    $requete->bindParam(":img",$img);    
    $requete->bindParam(":start_time",$start_time);    
    $requete->bindParam(":end_time ",$end_time );    
    $requete->bindParam(":num_days",$num_days);
    try{
        $resultat=$requete->execute();
        return $resultat;
    }catch(PDOException $exception){
        die($exception->getMessage());
    }
    finally{
        $db=null;
    }
}

public function get_3hackathons(){
    $db=self::Connection();
    $sql= "SELECT * FROM hackathons LIMIT 1";
    $Liste=[];
    try{
        $resultat=$db->query($sql);
        $Liste=$resultat->fetchAll(PDO::FETCH_CLASS,ucfirst($this->table));
    }catch(PDOException $exception){
        die($exception->getMessage());
    }
    finally{
        $resultat->closeCursor();
    }
    return $Liste;
}


 }
?>