<?php
namespace App\Models;

class UserModel
{
    private int $user_id;
    private string $name;

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getUserName(): string
    {
        return $this->name;
    }

    public function setUserId(int $user_id) :void{
        $this->user_id = $user_id;
    }

    public function setUserName(string $name) : void {
        $this->name = $name;
    }
}
