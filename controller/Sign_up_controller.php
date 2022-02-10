<?php

require('model/User.php');


class Sign_up_controller extends User
{
    public function signUpAction()
    {
        $passwordlength = strlen($_POST['password']);
        $a = new User($_POST['login'], $_POST['password']);
        $b = $a->loginCount();

        if ($b > 0) {
            $message = loginError();
            
        } else {
            if ($passwordlength < 6) {
                $message = lengthError();
                
            } else { 
                $this->password = password_hash($this->password, PASSWORD_BCRYPT);
                $new_user =new User($_POST['login'], $_POST['password']);
                $new_user_sign_up = $new_user->setUser();
            }
        }
    }
}
