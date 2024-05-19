<?php
include_once "Model.php";
class Ahistories extends Model{
    private $HistoryID;
    private $AdminID;
    private $Activity;

    private $TimeStamp;
    private $TargetID;
    
    protected $table ="admin_history";
    protected $clePrimaire="AdminID";
    
    public function getAdminID(){
        return $this->AdminID;
    }
    public function setAdminID($AdminID){
        $this->AdminID=$AdminID;
    }

    public function getActivity(){
        return $this->Activity;
    }
    public function setActivity($admin_id){
        $this->Activity=$admin_id;
    }
    public function getTimeStamp(){
        return $this->TimeStamp;
    }
    public function setTimeStamp($admin_id){
        $this->TimeStamp=$admin_id;
    }

    
    public function __construct( $AdminID=null, $Activity=null,$TargetID=null){
       $this->AdminID=$AdminID;
       $this->Activity=$Activity;
       $this->TargetID=$TargetID;
    }

    public function add_history($ligne){
        $db=self::Connection();
        $sql="INSERT INTO {$this->table} (";
        foreach($ligne as $key=>$value) $sql.=$key.",";
        $sql=rtrim($sql,",").") VALUES(";
        foreach($ligne as $key=>$value) $sql.=":".$key.",";
        $sql=rtrim($sql,",").")";
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

    public function get_history($id){
    $db=self::Connection();
    $sql= "SELECT * FROM admin_history WHERE AdminID=$id";
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
    public function delete_history($id){
        $db=self::Connection();
        $sql="DELETE FROM admin_history WHERE AdminID=$id";
        try{
            $resultat=$db->exec($sql);
            return $resultat;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

}