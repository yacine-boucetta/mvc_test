<?php
require_once('model/Model.php');
require_once('model/Error.php');

spl_autoload_register(function ($className) {
    $className = str_replace("\\", "/", $className);

    require("controller/$className.php");
});

$url = '';

if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}

if ($url == '') {
    HomeController::homeDirection();
} elseif ($url[0] == 'sign_up') {
    SignUpController::signUpAction();
} elseif ($url[0] == 'sign_in') {
    SignInController::signInAction();
} elseif ($url[0] == 'product') {
    require 'view/product.php';
} elseif ($url[0] == 'admin') {
    require 'view/admin.php';
} else {
    require 'view/404.php';
}
