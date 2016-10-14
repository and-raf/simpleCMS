<?php
    require_once 'db.php';
    require 'twig.php';

    echo $twig->render('container.twig');
    echo $twig->render('register.twig');

    $uname = $_POST['login'];
    $pass = $_POST['pwd'];

    //TODO: validation, better post handling
    if (($_POST['login'] !== "") AND ($_POST['pwd'] !== "")){
        $db = new Db();
        $db->connect();
        $db->register($uname, $pass);
        $db->quit();
        echo "chuj";
    }
?>