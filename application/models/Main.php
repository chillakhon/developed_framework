<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getNews($sql)
    {
        return $this->db->row($sql);
    }
}