<?php
require_once('model/Model.php');
require_once('model/Error.php');

spl_autoload_register(function($class){
    $paths = array(
        join(DIRECTORY_SEPARATOR, [__DIR__]),
        join(DIRECTORY_SEPARATOR, [__DIR__, 'controller']),
        join(DIRECTORY_SEPARATOR, [__DIR__, '..', 'src'])
    );  
    foreach($paths as $path){
        $file = join(DIRECTORY_SEPARATOR, [$path, $class.'.php']) ;
        if(file_exists($file))
            return require_once $file;
    }
}); 

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
} else {
    require 'view/404.php';
}
