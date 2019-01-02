<?php

namespace app\models;

use app\core\Model;

class Feedback extends Model
{
    public function getComments()
    {
        $result = $this->db->row('SELECT * FROM comments');
        return $result;
    }
}