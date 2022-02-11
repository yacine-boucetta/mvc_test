<?php
require('model/Model.php');
require('model/Error.php');
$url = '';

if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}

if ($url == '') {
    require 'view/home.php';
 } 
  elseif($url[0]=='sign_up' ){
      require 'controller/Sign_up_controller.php';
      $k= new Sign_up_controller();
      $k->signUpAction();
      
  }
  elseif($url[0]=='sign_in' ){
    require 'view/sign_in.php';
}
elseif($url[0]=='product' ){
    require 'controller/Product_controller.php';
    $mabite = new Product();
    $mabite->insertProduct();
}
elseif($url[0]=='admin' ){
    require 'view/admin.php';
}
else {
    require 'view/404.php';
}
