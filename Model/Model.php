<?php
include_once "../Configuration/Database.php";
class Model{
    protected $table;
    protected $clePrimaire;
    protected static $db=$null;
    public static function Connection(){
        if(self::$db==null){
        try{
            self::$db = new PDO("mysql:host=".Database::$HOST.";dbname=".Database::$DB,Database::$USER,Database::$PASSWORD);
            self::$db->query("SET NAMES 'utf8'");
        }
        catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
    return self::$db;
    }

    public function getall(){
        $db=self::Connection();
        $sql="SELECT * FROM ".$this->table;
        $liste=[];
        try{
       $resultat=$db->query($sql);
       $liste=$resultat->fetchAll(PDO::FETCH_CLASS,ucfirst($this->table));
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
        finally{
            $resultat->closeCursor();
        }
        return $liste;
    }

    public function getById($id){
        $db=self::Connection();
        $sql="SELECT * FROM {$this->table} WHERE {$this->clePrimaire}=$id";
        try{
            $resultat=$db->query($sql);
            if($resultat->rowCount()==1){ 
                $record=$resultat->fetchObject();
                return $record;
            }
            return false;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
        finally{
            $resultat->closeCursor();
        }
    }

    public function delete($id){
        $db=self::Connection();
        $sql="DELETE FROM {$this->table} WHERE {$this->clePrimaire}=$id";
        try{
            $resultat=$db->exec($sql);
            return $resultat;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function add($ligne){
        $db=self::Connection();
        $sql="INSERT INTO {$this->table} ("; /*:id_hackathon,:id_user,:name_hackathon,:date,:place,:max_num_participants,:img,:start_time,:end_time,:num_days)";*/
        foreach($ligne as $key=>$value) $sql.=$key.",";
        $sql=rtrim($sql,",").") VALUES(";
        foreach($ligne as $key=>$value) $sql.=":".$key.",";
        $sql=rtrim($sql,",").")";
        $requete=$db->prepare($sql);
        foreach($ligne as $key=>$value)         $requete->bindParam(":{$key}",$value);     
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

?>