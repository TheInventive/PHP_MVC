<?php
namespace App\config;

require_once 'config.php';
use mysqli;

class Connection{
    public static function createConnection(): mysqli
    {
        $conn =  new mysqli(DB_HOST,DB_USER, DB_PASS);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}