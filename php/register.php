<?php
    require_once 'db.php';
    require 'twig.php';

    echo $twig->render('container.twig');
    echo $twig->render('navbar.twig.php');
    echo $twig->render('register.twig');

    if (!empty($_POST)) {
        $uname = htmlspecialchars($_POST['login']);
        $pass = md5(htmlspecialchars($_POST['pwd']));
    }else{
        $uname = null;
        $pass = null;
    };

    echo $_SERVER['DOCUMENT_ROOT'];
    $success = 0;
    if (($uname !== null) AND $pass !== null){
        $db = new Db();
        $db->connect();
        $exist = $db->collision($uname);
        if ($exist){
            echo 'User ' . $uname . ' already exist';
        }else{
            $db->register($uname, $pass);
            $success = 1;
        }
        $db->quit();
        $_POST = null;
    };
    if ($success){
        echo 'user registered';
    }
?>