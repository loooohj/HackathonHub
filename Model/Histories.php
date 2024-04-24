<?php
include_once "Model.php";
class Histories extends Model{
    private $id_user;
    private $activity;

    private $date;

    protected $table ="user_history";
    
    public function getId_user(){
        return $this->id_user;
    }
    public function setId_user($id_user){
        $this->id_user=$id_user;
    }

    public function getActivity(){
        return $this->activity;
    }
    public function setActivity($admin_id){
        $this->activity=$admin_id;
    }
    public function getDate(){
        return $this->date;
    }
    public function setDate($admin_id){
        $this->date=$admin_id;
    }

    
    public function __construct( $id_user=null, $activity=null ){
       $this->id_user=$id_user;
       $this->activity=$activity;
    }

    public function add_history($ligne){
        $db=self::Connection();
        $sql="INSERT INTO {$this->table} (";
        foreach($ligne as $key=>$value) $sql.=$key.",";
        $sql.="date ) VALUES(";
        foreach($ligne as $key=>$value) $sql.=":".$key.",";
        $sql.="NOW())";
        $requete=$db->prepare($sql);
        foreach($ligne as $key=>$value)         $requete->bindValue($key,$value);     
        var_dump($requete);
        try{
            $resultat=$requete->execute();
            if($resultat) return $db->LastInsertId();
            return false;
        }
        catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

}