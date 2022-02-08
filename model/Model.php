<?
// require_once('User.php');
// require ('db.php');

class Model{

public $db;

    function __construct()
    {
        $this->db=new PDO('mysql:host=localhost;dbname=mcv;charset=utf8','root','root');
[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

    }

    
    }

?>