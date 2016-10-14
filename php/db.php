<?php
/**
 * Created by PhpStorm.
 * User: andraf
 * Date: 2016-10-14
 * Time: 15:10
 */
class Db{
    function connect(){
        try {
//            $conn = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
//            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'Connected';
        } catch
        (PDOException $e) {
            echo "Error: " . $e->getMessage();
        };
    }
    function register($user, $password){
        $conn = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $register = $conn->prepare("INSERT INTO users (uname, pass) 
    VALUES (:uname, :pass)");
        $register->bindParam(':uname', $user);
        $register->bindParam(':pass', $password);
        $register->execute();
    }
    function quit(){
        $conn = null;
    }
}