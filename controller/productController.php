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
    public static function displayProduct(){
        if(isset($_GET['url']) && $_GET['url'] == 'product'){
        $display = new Produit();
        $result=$display->getProd();
        echo ('<pre>');
        var_dump($result);
        echo('</pre>');
        foreach($result as $array){
            echo ($array['nom']);
            echo ($array['prix']);
            echo ($array['id_categorie']);
        }
        }
    }
    }

require('view/product.php');
?>