<?php

namespace App\Models;

class Home extends BaseModel
{
    public function getNotifications()
    {
        $sql = "SELECT * FROM thongbaolop ORDER BY id DESC LIMIT 5";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
