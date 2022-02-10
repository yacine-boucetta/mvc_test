<?php

require('model/User.php');
class Sign_in_controller extends User

{
    public static function signInAction()
    {
        $message = '';
        if (isset($_POST['signIn'])) {

            $checkUser = new Model;
            $a = $checkUser->checkUser(htmlspecialchars($_POST['login'], ENT_QUOTES, "ISO-8859-1"));
            $passwordVerify = htmlspecialchars($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            if ($a != false) {
                if (password_verify($passwordVerify, $a['password'])) {
                    echo 'coucou';
                }
            } else {
                $message = signError();
            }

        } require('view/signIn.php');
            return $message;
    }
}
