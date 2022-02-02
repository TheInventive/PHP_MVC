<?php
namespace App\Controllers;

use App\Controllers\Service\UserService;
use Symfony\Component\Routing\RouteCollection;

class UserController
{
    public function showUsers(RouteCollection $routes){
        $userService = new UserService();
        $users = $userService->readAll();
        require_once APP_ROOT . '/views/user.php';
    }
}