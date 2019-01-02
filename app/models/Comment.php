<?php

namespace app\models;

use app\core\Model;

class Comment extends Model
{
    public function addComment($post)
    {

        $post=[
            'name'=>$post['userName'],
            'email'=>$post['email'],
            'message'=>$post['comment']
        ];
        $this->db->query('INSERT INTO comments (`name`,`email`,`message`) VALUES (:name, :email,:message)',$post);
    }
}