<?php



$url = '';
if (isset($_GET['url'])) {
    $url = $_GET['url'];
}

if ($url == '') {
    require 'view/home.php';
} elseif (preg_match('#inscription-([0-9]+)#', $url, $params)) {
    $sign_up = $params[1];
    require 'sign_up.php';
}
elseif (preg_match('#connexion-([0-9]+)#', $url, $params)) {
    $sign_in = $params[1];
    require 'sign_in.php';
}
elseif (preg_match('#product-([0-9]+)#', $url, $params)) {
    $sign_in = $params[1];
    require 'product.php';
}elseif (preg_match('#connexion-([0-9]+)#', $url, $params)) {
    $sign_in = $params[1];
    require 'connexion.php';
}
else {
    require '404.php';
}