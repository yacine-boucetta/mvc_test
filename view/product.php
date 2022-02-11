<?php
var_dump($_GET)
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
    <ul><li><a href='./product'>product</a></li>
    <li><a href= './sign_up'>sign_up</a></li>
    <li><a href= './sign_in'>sign_in</a></li>
    <li><a href= './product'>product</a></li>
    <li><a href= './admin'>admin</a></li>
    <li><a href= './sign_up'></a></li>
    </ul>

    <form class="sign" method="post">
    <div class="item">
                    <label for="name">Nom<span>*</span></label>
                    <input id="name" type="text" name="name" required />
                </div>

                <div class="item">
                    <label for="prix">Prix<span>*</span></label>
                    <input id="prix" name="prix" required />
                </div>

                <div class="item">
                    <label for="idCat">Id Cat<span>*</span></label>
                    <input id="idCat" name="idCat" required />
                </div>

                <div class="btn-block">
                    <button name='addProd' type="submit">sign up</button>
                </div>

        </div>
        </form>
        </div>
        </form>
</body>
</html>