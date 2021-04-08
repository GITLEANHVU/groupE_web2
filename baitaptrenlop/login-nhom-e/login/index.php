<?php
include "../config/config.php";
include "../config/db.php";
include "../functions/Login.php";

$login_func = new Login();
$username = "";
$password = "";
$id = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if ($login_func->checkLogin($username, $password, $id)) {
    $login_func->saveCookieLogin($username, $password, $id);
    sleep(1);
    header("location: ".BASE_URL."index.php");
}

?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="../public/loginpage.css">
</head>

<body>
    <div class="container">
        <form class="form" id="login" method="POST">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input name="username" type="text" class="form__input" autofocus required placeholder="Username or email">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input name="password" type="password" class="form__input" autofocus required placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
        </form>
    </div>

    <!-- <script public="./public/main.js"></script> -->
</body>