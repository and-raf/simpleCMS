<?php
/**
 * Created by PhpStorm.
 * User: andraf
 * Date: 2016-10-14
 * Time: 15:10
 */
class Db{
    public function connect(){
        try {
            $conn = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'Connected';
        } catch
        (PDOException $e) {
            echo "Error: " . $e->getMessage();
        };
    }
    function register($user, $password){
        $register = $conn->prepare("INSERT INTO users (uname, pass) VALUES ($user, $password)");
        $register->execute();
    }
    public function quit(){
        $conn = null;
    }
}
