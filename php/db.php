<?php
/**
 * Created by PhpStorm.
 * User: andraf
 * Date: 2016-10-14
 * Time: 15:10
 */
class Db{
    public $conn;
    public function connect(){
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo 'Connected<br/>';
        } catch
        (PDOException $e) {
            echo "Error: " . $e->getMessage();
        };
    }
    function register($user, $password){
        $register = $this->conn->prepare("INSERT INTO users (uname, pass) VALUES (:username, :password)");
        $register->execute(array(
            "username" => $user,
            "password" => $password));
    }
    function collision($user){
        //TODO: check if user exist in db
        $values = $this->conn->query('SELECT uname from users');
        $values->execute();
        $row = $values->fetch();
        if (in_array($user, $row)){
            echo 'User already exist<br/>';
        }

    }
    public function quit(){
        $conn = null;
    }
}
