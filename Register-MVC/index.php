<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=login">Login</a>
<!--<a href="src/view/login-register/login.php">Login</a>-->

<h1>Hello</h1>
</body>
</html>

<?php

include __DIR__ . "/vendor/autoload.php";

use APP\controller\BaseController;

$controller = new BaseController();

$page = null;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_REQUEST["username"];
            $password = $_REQUEST["password"];

            $controller->checkAccount($username, $password);

        }
        include_once "src/view/login-register/login.php";
        break;
}
