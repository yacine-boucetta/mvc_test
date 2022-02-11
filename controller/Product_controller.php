<?php

require ('model/product.php');

class Product extends Produit {

    public static function insertProduct(){
        
        if(isset($_POST['addProd'])){

            $insert = new Produit();
            $insert->insertProd($_POST['name'], $_POST['prix'],$_POST['idCat']);
            echo 'coucou';
            
        }
    }

}
require('view/product.php');
?>