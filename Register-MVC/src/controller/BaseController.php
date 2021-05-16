<?php

namespace APP\controller;

use APP\model;

class BaseController
{
    protected $connect;

    public function __construct(){
        $dbConnect = new model\DBConnect();
        $this->connect = $dbConnect->connect();
    }

    public function getAllAccount(){
        $sql = "SELECT * FROM customers";
        $query = $this->connect->query($sql);
        $account = $query->fetchAll();
        $users=[];
        foreach ($account as $item){
            $user = new User($item["name"], $item["usename"], $item["password"], $item["email"]);
            $user->id = $item["id"];
            $users[] = $user;
        }
        return $users;
    }

    public function checkAccount($username,$password)
    {
        $account = $this->getAllAccount();
        foreach ($account as $item) {
            if ($username == $item->usename) {
                if ($password == $item->password) {
                    return "Successfully";
                } else {
                    return "Wrong password!";
                }
            }
            return "This account has not been register!";
        }
    }


}