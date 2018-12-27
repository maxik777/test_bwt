<?php

namespace app\models;

use app\core\Model;

class Login extends Model
{
    public function emailVerification($post)

    {

        $post = ['email'=>$post['email']];
        $result = $this->db->row('SELECT `email` FROM users WHERE `email` = :email',$post);
        if ($result)
        {
            setcookie("email", $post['email']);
            header('Location: http://bwt-test/main');
        }else
            echo 'email не существует!';


    }

}