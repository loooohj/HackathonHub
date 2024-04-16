<?php
include_once "Model.php";
$model=new Model();
class Users extends Model{
    private $id;
    private $name;
    private $first_name;
    private $email_address;
    private $telephone_number;
    private $password;
    protected $table="users";
    protected $clePrimaire="id";
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

    public function getFrist_name(){
        return $this->first_name;
    }
    public function setFirst_Name($name){
        $this->first_name=$name;
    }

    public function getEmail_address(){
        return $this->email_address;
    }
    public function setEmail_address($name){
        $this->email_address=$name;
    }

    public function getTelephone_number(){
        return $this->telephone_number;
    }
    public function setTelephone_number($name){
        $this->telephone_number=$name;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($name){
        $this->password=$name;
    }
    public function __construct($id=null,$name=null,$first_name=null,$email_addess=null,$telephone_number=null,$password=null){
        $this->id=$id;
        $this->name=$name;
        $this->first_name=$first_name;
        $this->email_address=$email_addess;
        $this->telephone_number=$telephone_number;
        $this->password=$password;
    }
    /*public function update_user($name,$first_name,$email_addess,$telephone_number,$password){
    $db=connexionDB();
    $sql="UPDATE users SET name=:name,first_name=:first_name,email_addess=:email_addess,telephone_number=:telephone_number,password=:password";
    $requete=$db->prepare($sql);
    $requete->bindParam(":name",$name);
    $requete->bindParam(":first_name",$first_name);
    $requete->bindParam(":email",$email);
    $requete->bindParam(":tel",$tel);
    $requete->bindParam(":password",$password);
    try{
        $resultat=$requete->execute();
        return $resultat;
    }catch(PDOException $exception){
        die($exception->getMessage());
    }
    finally{
        $db=null;
    }
    }*/
    
    
    public function sign_in($email,$password){
    $db=self::Connection();
    $email=$db->quote($email);
    $password=$db->quote($password);
    $sql="SELECT * FROM users WHERE email_address=$email AND password=$password";
    try{
    $resultat = $db->query($sql);
    return $resultat;
    }
    catch(PDOException $exception){
        die($exception->getMessage());
    }
    }

    public function getByEmail($email){
        $db=self::Connection();
        $email=$db->quote($email);
        $sql="SELECT * FROM users WHERE email_address=$email";
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
}
?>