<?php 

if(isset($_GET['logout'])) {
  setcookie("username", '', time() - (86400 * 7) - 1, "/");
  setcookie("password", '', time() - (86400 * 7) - 1, "/");
  setcookie("id", '', time() - (86400 * 7) - 1, "/");
  header("location: login");
}

if(!isset($_COOKIE['username']) && !isset($_COOKIE['password']) && !isset($_COOKIE['id']) || empty($_COOKIE['username']) && empty($_COOKIE['password']) && empty($_COOKIE['id'])) {
  header("location: login");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lê Anh Vũ</title>
</head>
<body>
  <main>
    <h1>Home page</h1>
    <a href="?logout">LOGOUT</a>
  </main>
</body>
</html>