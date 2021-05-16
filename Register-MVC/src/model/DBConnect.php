<?php

namespace APP\model;

class DBConnect
{

    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=restaurant";
        $this->user = "root";
        $this->password = "root";

    }

    public function connect(){
        try {
            return new \PDO($this->dsn, $this->user, $this->password);
        } catch (\PDOException $exception){
            echo "We are working on it!";
        }
    }
}