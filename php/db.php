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

            echo 'Connected';
        } catch
        (PDOException $e) {
            echo "Error: " . $e->getMessage();
        };
    }
    function register($user, $password){
        $register = $this->conn->prepare("INSERT INTO users (uname, pass) VALUES (:username, :password)");
        $register->execute(array(
            "username" => $password,
            "password" => $user));
    }
    function collision($user){
        //TODO: check if user exist in db
        $check = $this->$conn("SELECT users FROM users");
        var_dump($check);
    }
    public function quit(){
        $conn = null;
    }
}
