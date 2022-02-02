<?php
namespace App\Controllers;

use App\Controllers\Service\UserService;

class UserController
{
    public function showStuff(int $id){
        $advertisement = new UserService();
        $advertisement->read($id);

        require_once APP_ROOT . '/views/user.php';
    }
}