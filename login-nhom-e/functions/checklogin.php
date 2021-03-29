<?php
include "../config/db.php";

function checkLogin($username, $password, $id)
{
  // users
  $users = self::$connection->select("SELECT * FROM `user` WHERE $username=`user`.'email' `user`.$username='username' AND $password=`user`.'password' AND $id=`user`.'id'");
  if(count($users) > 0) return true;
  return false;
}
