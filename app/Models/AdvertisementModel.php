<?php

namespace App\Models;

class AdvertisementModel
{
    private int $advertisement_id;
    private int $user_id;
    private string $title;

    public function getAdvertisementId(): int
    {
        return $this->advertisement_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAdvertisementId(int $id) :void{
        $this->advertisement_id = $id;
    }

    public function setUserId(int $user_id){
        $this->user_id = $user_id;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }
}
