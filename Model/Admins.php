<?php
include_once "Model.php";
class Admins extends Model{
    private $admin_email;
    private $login;
    private $admin_name;
    private $admin_password;
    private $admin_id;
    protected $table="admins";
    protected $clePrimaire="admin_id";

    public function getAdmin_name(){
        return $this->admin_name;
    }
    public function setAdmin_name($admin_name){
        $this->admin_name=$admin_name;
    }

    public function getAdmin_id(){
        return $this->admin_id;
    }
    public function setAdmin_id($admin_id){
        $this->admin_id=$admin_id;
    }

    public function getAdmin_email(){
        return $this->admin_email;
    }
    public function setAdmin_email($name){
        $this->admin_email=$name;
    }

    public function getLogin(){
        return $this->login;
    }
    public function setLogin($name){
        $this->login=$name;
    }

    public function getAdmin_password(){
        return $this->admin_password;
    }
    public function setAdmin_password($name){
        $this->admin_password=$name;
    }

    public function __construct($admin_email=null,$login=null,$admin_name=null,$admin_password=null,$admin_id=null){
       $this->admin_email=$admin_email;
       $this->login=$login;
       $this->admin_name=$admin_name;
       $this->admin_password=$admin_password;
       $this->admin_id=$admin_id;

    }

    public function sign_in($login,$password){
        $db=self::Connection();
        $login=$db->quote($login);
        $password=$db->quote($password);
        $sql="SELECT * FROM admins WHERE login=$login AND admin_password=$password";
        try{
        $resultat = $db->query($sql);
        return $resultat;
        }
        catch(PDOException $exception){
            die($exception->getMessage());
        }
        }
}