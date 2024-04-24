<?php
include_once "Model.php";
class Hackathons extends Model{
    private $id_hackathon;
    private $id_user;
    private $name_hackathon;
    private $date;
    private $place;
    private $max_num_teams;
    private $img;
    private $start_time;
    private $end_time;
    private $num_days;
    private $price;
    private $min_num_members;
    private $max_num_members;
    private $descriptive_text;  
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

    public function getMax_num_teams(){
        return $this->max_num_teams;
    }
    public function setMax_num_teams($max_num_teams){
        $this->max_num_teams=$max_num_teams;
    }
    public function getDescriptive_text(){
        return $this->descriptive_text;
    }
    public function setDescriptive_text($descriptive_text){
        $this->descriptive_text=$descriptive_text;
    }
    public function getMin_num_members(){
        return $this->min_num_members;
    }
    public function setMin_num_members($min_num_members){
        $this->min_num_members=$min_num_members;
    }
    public function getMax_num_members(){
        return $this->max_num_members;
    }
    public function setMax_num_members($max_num_members){
        $this->max_num_members=$max_num_members;
    }
    
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price=$price;
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

    public function __construct($id_hackathon=null,$id_user=null,$name_hackathon=null,$date=null,$place=null,$max_num_teams=null,$img=null,$start_time=null,$end_time=null,$num_days=null,$price=null,$max_num_members=null,$min_num_members=null,$descriptive_text=null){
     $this->id_hackathon=$id_hackathon;
     $this->id_user=$id_user;
     $this->name_hackathon=$name_hackathon;
     $this->date=$date;
     $this->place=$place;
     $this->max_num_teams=$max_num_teams;
     $this->img=$img;
     $this->start_time=$start_time;
     $this->end_time=$end_time;
     $this->num_days=$num_days;
     $this->max_num_members=$max_num_members; 
     $this->min_num_members=$min_num_members; 
     $this->price=$price;
     $this->descriptive_text=$descriptive_text;
    }
    public function get_3hackathons(){
    $db=self::Connection();
    $sql= "SELECT * FROM hackathons LIMIT 3";
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

public function get_myhackathons($id){
    $db=self::Connection();
    $sql= "SELECT * FROM hackathons WHERE id_user=$id";
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
?>