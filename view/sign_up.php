<?php

require('controller/Sign_up_controller.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <main class="container">
        <a href='./'>home</a>
        <div class="testbox">
            <form class="sign" method="post">




                <h2>Inscription</h2>
                <?php
                if (isset($_POST['sign_up'])) {
                    $new_sign_up = new Sign_up_controller($_POST['login'], $_POST['password']);
                    $message = $new_sign_up->signUpAction();
                }
                ?>


                <div class="item">
                    <label for="name">Login<span>*</span></label>
                    <input id="name" type="text" name="login" required />
                </div>

                <div class="item">
                    <label for="password">Password:6 caractère minimum<span>*</span></label>
                    <input id="password" type="password" name="password" required />
                </div>



                <div class="btn-block">
                    <button name='sign_up' type="submit">sign up</button>
                </div>

        </div>
        </form>
        </div>
    </main>