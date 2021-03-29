<?php
include "../config/db.php";

function checkLogin($username, $password, $id)
{
  // users
  $users = self::$connection->select("SELECT * FROM `user` WHERE $username='username' AND $password='password' AND $id='id'");
  if(count($users) > 0) return true;
  return false;
}
