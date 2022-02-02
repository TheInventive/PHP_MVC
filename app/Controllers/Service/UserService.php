<?php
namespace App\Controllers\Service;

use App\config\Connection;
use App\Models\UserModel;
require_once '../config/Connection.php';
class UserService
{
    public function create(array $data) : bool
    {
        $conn = Connection::createConnection();
        $res = $query = "insert into test.users (name) values " . implode(',', $data);
        $conn->query($query);
        $conn->close();
        return $res;
    }

    public function read(int $id): UserModel
    {

        $conn = Connection::createConnection();
        $query = "select * from test.users where user_id = $id";
        $result = $conn->query($query);
        $ret = new UserModel();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ret->setUserId($row["user_id"]);
            $ret->setUserName($row["name"]);
        }
        $conn->close();
        return $ret;
    }

    public function readAll(): array
    {
        $conn = Connection::createConnection();
        $query = "select * from users";
        $result = $conn->query($query);
        $res = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ret = new UserModel();
                $ret->setUserId($row["user_id"]);
                $ret->setUserName($row["name"]);
                array_push($res,$ret);
            }
        }
        $conn->close();
        return $res;
    }

    public function update(int $id, string $data) : void
    {
        $conn = Connection::createConnection();
        $query = "UPDATE test.users SET name='$data' WHERE user_id=$id";
        $conn->query($query);
        $conn->close();
    }

    public function delete(int $id)
    {
        $conn = Connection::createConnection();
        $query = "delete from test.users WHERE user_id=$id";
        $conn->query($query);
        $conn->close();
    }
}