<?php

/**
 * Created by PhpStorm.
 * User: andraf
 * Date: 2016-10-15
 * Time: 15:44
 */
class FormHandler
{
    public $username;
    public $password;

    function __construct($user, $pass)
    {
        $this->user = htmlspecialchars($user);
        $this->password = htmlspecialchars($pass);
    }

    function type(){
        return $this->username;
    }

    public function obtain(){

    }
}