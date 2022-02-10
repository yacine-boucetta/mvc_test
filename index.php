<?php
require('model/Model.php');
$url = '';

if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}

if ($url == '') {
    require 'view/home.php';
 } 
  elseif($url[0]=='sign_up' ){
      require 'view/sign_up.php';
  }
  elseif($url[0]=='sign_in' ){
    require 'view/sign_in.php';
}
elseif($url[0]=='product' ){
    require 'view/product.php';
}
elseif($url[0]=='admin' ){
    require 'view/admin.php';
}
else {
    require 'view/404.php';
}
