<?php

namespace App\Models;

class Auth extends BaseModel
{
    protected $table = "c4_user";

    public function login($username, $password)
    {
        $sql = "SELECT * FROM $this->table WHERE username = ? AND password = ?";
        $this->setQuery($sql);
        return $this->loadRow([$username, $password]);
    }
}
