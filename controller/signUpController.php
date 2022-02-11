<?php

require('model/User.php');


class SignUpController extends User
{
    public static function signUpAction()
    {
        $message='';
        if (isset($_POST['sign_up'])) {

        $passwordlength = strlen($_POST['password']);
        $a = new User(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['password']));
        $b = $a->loginCount();
        
        if ($b > 0) {
            $message = loginError();
            
        } else {
            if ($passwordlength < 6) {
                $message = lengthError();
                
            } else { 
                $password =htmlspecialchars(password_hash($_POST['password'],PASSWORD_BCRYPT));
                $new_user =new User();
                $new_user->setUser(htmlspecialchars($_POST['login'], ENT_QUOTES, "ISO-8859-1"),$password);
            }
        }
    }
    require('view/signUp.php');

    
}
}