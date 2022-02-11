<?php

class Produit extends Model{

    public $id;
    public $nom;
    public $prix;
    public $id_categorie;

    function __construct(){
        parent::__construct($this->db);
    }


    public function insertProd($nom, $prix, $id_categorie){

        $insertProd = $this->db->prepare("INSERT INTO product (nom, prix, id_categorie) VALUES (:nom, :prix, :id_categorie)");
        $insertProd->bindValue(':nom',$nom, PDO::PARAM_STR);
        $insertProd->bindValue(':prix',$prix, PDO::PARAM_STR);
        $insertProd->bindValue(':id_categorie',$id_categorie, PDO::PARAM_INT);
        $insertProd->execute();

    }

}

?>