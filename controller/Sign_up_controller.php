<?php

require('model/User.php');


class Sign_up_controller extends User
{
    public static function signUpAction()
    {

        if (isset($_POST['sign_up'])) {
        $passwordlength = strlen($_POST['password']);
        $a = new User($_POST['login'], $_POST['password']);
        $b = $a->loginCount();

        if ($b > 0) {
            $message = loginError();
            require('view/sign_up.php');
            return $message;
            
        } else {
            if ($passwordlength < 6) {
                $message = lengthError();
                return $message;
                
            } else { 
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $new_user =new User();
                $new_user->setUser();
            }
        }
    }
    echo$message;
    
}
}