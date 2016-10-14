<?php
    require_once 'db.php';
    require 'twig.php';

    echo $twig->render('container.twig');
    echo $twig->render('register.twig');

    $uname = $_POST['login'];
    $pass = $_POST['pwd'];

    if (($uname !== "") AND ($pass !== "")){
        $db = new Db();
        $db->connect();
        $db->register($uname, $pass);
        $db->quit();
    }
?>