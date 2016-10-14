<?php
    require_once 'db.php';
    require 'twig.php';

    echo $twig->render('container.twig');
    echo $twig->render('register.twig');

    $uname = $_POST['login'];
    $pass = $_POST['pwd'];

    $help = (isset($_POST['login'])AND isset($_POST['pwd']));
    if ($help){
        $connected = Db::connect();
        Db::register($uname, $pass);
        echo $uname;
        echo $pass;
        Db::quit();
    }
?>