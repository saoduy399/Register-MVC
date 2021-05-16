<?php


namespace APP\controller;

use APP\model;


class User
{
    public $name;
    public $usename;
    public $password;
    public $email;

    public function __construct($name, $usename, $password, $email)
    {
        $this->name = $name;
        $this->usename = $usename;
        $this->password = $password;
        $this->email = $email;

    }
}

