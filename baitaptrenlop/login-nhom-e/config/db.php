<?php
class DB{
    public static $connection;

    public function __construct()
    {
        if (!self::$connection) {
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
            self::$connection->set_charset(DB_CHARSET); 
        }
        return self::$connection;
    }

    public function select($sqlInput)
    {
        $items = array();
        $query = self::$connection->prepare("$sqlInput");
        $query->execute();
        $items = $query->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}