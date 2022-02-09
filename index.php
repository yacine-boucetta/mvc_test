<?php



$url = '';
if (isset($_GET['url'])) {
    $url = $_GET['url'];
}

if ($url == '') {
    require 'view/home.php';
} elseif (preg_match('#sign_up-([0-9]+)#', $url, $params)) {
    $sign_up = $params[1];
    require './view/sign_up.php';
}

elseif (preg_match('#product-([0-9]+)#', $url, $params)) {
    $sign_in = $params[1];
    require 'view/product.php';
}elseif (preg_match('#sign_in-([0-9]+)#', $url, $params)) {
    $sign_in = $params[1];
    require 'view/sign_in.php';
}
else {
    require 'view/404.php';
}