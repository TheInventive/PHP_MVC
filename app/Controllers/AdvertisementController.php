<?php

namespace App\Controllers;

use App\Controllers\Service\AdvertisementService;
use Symfony\Component\Routing\RouteCollection;

class AdvertisementController
{
    public function showAdvertisements(RouteCollection $routes){
        $advertisement = new AdvertisementService();
        $ads = $advertisement->readAll();
        require_once APP_ROOT . '/views/advertisements.php';
    }
}