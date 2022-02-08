<?php
require('db.php');

class User extends Model
{

    public $login;
    public $password;
    


    function __construct(string $user_login, string $user_password)
    {
        $this->login = $user_login;
        $this->password = $user_password;
        parent::__construct();
    }


    //---------- inserer pour inscription---------
    public function loginCount()
    {
        $sqlinsert = "SELECT *FROM utilisateurs WHERE login=:login";
        $sign_up = $this->db->prepare($sqlinsert);
        $sign_up->execute(array(
            ":login" => $_POST['login'],
        ));
        $count = $sign_up->rowCount();
        return $count;
    }

    public function setUser()
    {
        $sqlinsert = "INSERT INTO utilisateurs(login,password) VALUES(:login,:password)";
        $sign_up = $this->db->prepare($sqlinsert);
        $sign_up->execute(array(
            ":login" => $this->login,
            ":password" => $this->password
        ));
        $ok = $sign_up->fetch(PDO::FETCH_ASSOC);
        return $ok;
    }
}
?>