<?php

require('model/User.php');


class Sign_up_controller extends User
{
    public static function signUpAction()
    {
        if (isset($_POST['sign_up'])) {

        $message='';
        $passwordlength = strlen($_POST['password']);
        
        $a = new User($_POST['login'], $_POST['password']);
        $b = $a->loginCount();
        
        if ($b > 0) {
            $message = loginError();
            
        } else {
            if ($passwordlength < 6) {
                $message = lengthError();
                
            } else { 
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $new_user =new User();
                $new_user->setUser($_POST['login'],$password);
                echo 'coucou';
            }
        }
    }

    require('view/sign_up.php');
    return $message;
    
}
}