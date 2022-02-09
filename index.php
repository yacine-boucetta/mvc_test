<?php



$url = '';
if (isset($_GET['url'])) {
    $url = $_GET['url'];
}

if ($url == '') {
    require 'view/home.php';
} if (preg_match('#sign_up#', $url, $params)) {
    
    require 'view/sign_up.php';
}
if (preg_match('#sign_in#', $url, $params)) {
    
    var_dump($url);
    require 'view/sign_in.php';
}
if (preg_match('#product-([0-9]+)#', $url, $params)) {
    $sign_in = $params[1];
    require 'view/product.php';}
// }if (preg_match('#connexion-([0-9]+)#', $url, $params)) {
//     $sign_in = $params[1];
//     require 'view/sign_up.php';
// }
else {
    require 'view/404.php';
}