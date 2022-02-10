<?php
session_start();


class Model{
public $db;



function __construct(){

    $this->db=new PDO('mysql:host=localhost;dbname=mcv;charset=utf8','root','root');


}

public function checkUser($login){
    $sqlinsert = "SELECT * FROM utilisateurs WHERE login=:login ";
    $signIn=$this->db->prepare($sqlinsert);
    $signIn->execute(array(
        ':login'=>$login
    ));
    $checkUser=$signIn->fetch(PDO::FETCH_ASSOC);
    return $checkUser;

}




}
