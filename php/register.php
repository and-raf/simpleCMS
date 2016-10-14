<?php
    require_once 'db.php';
    require 'twig.php';

    echo $twig->render('container.twig');
    echo $twig->render('register.twig');

    if (!empty($_POST)) {
        $uname = htmlspecialchars($_POST['login']);
        $pass = htmlspecialchars($_POST['pwd']);
    }else{
        $uname = null;
        $pass = null;
    };

    //TODO: Rewrite
//    if ((strlen($uname) <= 5) OR (strlen($pass) <= 5)){
//        ?>
<!--        <script>-->
<!--            alert("Username and password have to be logner than 5 characters");-->
<!--        </script>-->
<!--        --><?php
//    };

    $success = 0;
    if (($uname !== null) AND $pass !== null){
        $db = new Db();
        $db->connect();
        $db->register($uname, $pass);
        $db->quit();
        $success = 1;
        $_POST = 0;
    };
    if ($success){
        ?>
        <script>
            alert("User registered properly");
        </script>
        <?php
    }
?>