<?php

$url = '';

if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}

var_dump($url);
if ($url == '') {
    echo "Page d'acceuil";
} elseif ($url[0] == 'article' and !empty($url[1])) {
    echo 'article numero' . $url[1];
}
