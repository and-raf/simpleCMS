<?php
    require_once 'db.php';
    require 'twig.php';

    echo $twig->render('container.twig');
    echo $twig->render('register.twig');

    $uname = isset($_POST['login']);
    $pass = isset($_POST['pwd']);

    $help = $_POST['login'];
    if ($help){
//        Db::connect();
        Db::register($uname, $pass);
        Db::quit();
    }
?>