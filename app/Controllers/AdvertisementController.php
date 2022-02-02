<?php

namespace App\Controllers;

use App\Controllers\Service\AdvertisementService;

class AdvertisementController
{
    public function showStuff(int $id){
        $advertisement = new AdvertisementService();
        $advertisement->read($id);
    }
}