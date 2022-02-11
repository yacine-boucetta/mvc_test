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
    require 'controller/homeController.php';
    $k= new HomeController();
    $k->homeDirection();
} elseif ($url[0] == 'sign_up') {
    require 'controller/signUpController.php';
    $k = new Sign_up_controller();
    $k->signUpAction();
} elseif ($url[0] == 'sign_in') {
    require 'controller/signInController.php';
    $k = new Sign_in_controller();
    $k->signInAction();
} elseif ($url[0] == 'product') {
    require 'controller/productController.php';
    $k = new Product();
    $k->insertProduct();
    $k->displayProduct();

} elseif ($url[0] == 'admin') {
    require 'view/admin.php';
} else {
    require 'view/404.php';
}
