<?php

namespace App\Controllers\Service;
require_once '../config/Connection.php';
use App\config\Connection;
use App\Models\AdvertisementModel;
use App\Models\UserModel;

class AdvertisementService
{
    public function create(array $data): string
    {
        $conn = Connection::createConnection();
        $res = $query = "insert into test.advertisements (user_id, title) values " . implode(',', $data);
        $conn->query($query);
        $conn->close();
        return $res;
    }

    public function read(int $id): AdvertisementModel
    {
        $conn = Connection::createConnection();
        $query = "select * from test.advertisements where advertisement_id = $id";
        $result = $conn->query($query);
        $ret = new AdvertisementModel();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
                $ret->setUserId($row["user_id"]);
                $ret->setTitle($row["title"]);
                $ret->setAdvertisementId($row["advertisement_id"]);
        }
        $conn->close();
        return $ret;
    }

    public function readAll() : array
    {
        $conn = Connection::createConnection();
        $query = "select a.title, b.name from advertisements a, users b where a.user_id = b.user_id";
        $result = $conn->query($query);
        $res = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $ret = new AdvertisementModel();
                $ret->setTitle($row["title"]);
                $user = new UserModel();
                $user->setUserName($row["name"]);
                $ret->setUser($user);
                array_push($res,$ret);
            }
        }
        $conn->close();
        return $res;
    }

    public function update(int $id, string $data)
    {
        $conn = Connection::createConnection();
        $query = "UPDATE test.advertisements SET user_id='$data[0]',title='$data[1]'  WHERE advertisement_id=$id";
        $conn->query($query);
        $conn->close();
    }

    public function delete(int $id)
    {
        $conn = Connection::createConnection();
        $query = "delete from test.advertisements WHERE advertisement_id=$id";
        $conn->query($query);
        $conn->close();
    }
}