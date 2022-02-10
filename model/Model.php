<?php
session_start();


class Model{
public $db;



function __construct(){

    $this->db=new PDO('mysql:host=localhost;dbname=mcv;charset=utf8','root','root');

}

}
