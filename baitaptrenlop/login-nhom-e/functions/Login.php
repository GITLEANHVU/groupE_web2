<?php
class Login extends DB
{

  public function checkLogin($username, $password, &$id)
  {
    // users
    $sql =
      "SELECT * FROM `user`
    WHERE '$username'=`user`.`email` OR '$username'=`user`.`username` AND '$password'=`user`.`password`";
    $users = parent::select($sql);

    if (count($users) > 0){
      $id = $users[0]['ID'];
      return true;
    }
    return false;
  }

  public function saveCookieLogin($username, $password, $id)
  {
    // set cookie 7days
    setcookie("username", $username, time() + (86400 * 7), "/");
    setcookie("password", password_hash($password, PASSWORD_DEFAULT), time() + (86400 * 7), "/");
    setcookie("id", $id, time() + (86400 * 7), "/");
  }
}
