<?php

namespace app\models;

use app\core\Model;

class Register extends Model
{
    public function registerUsers($post)
    {
        $this->validateForm();

        if (!$post['birthDate']) {
            $post['birthDate'] = null;
        }
        if (!$post['Gener']) {
            $post['Gener'] = null;
        }
        $post = [
            'firstname' => $post['firstName'],
            'secondname' => $post['secondName'],
            'email' => $post['email'],
            'birthday' => $post['birthDate'],
            'gender' => $post['Gener']
        ];

            $result = $this->db->query('INSERT INTO users (`firstname`, `secondname`, `email`, 
`birthday`, `gender`) VALUES  (:firstname, :secondname, :email, :birthday, :gender)', $post);
            if ($result){
                setcookie("email", $post['email'],null,"/");
                header('Location: http://bwt-test/main');
            }

}

    public function validateForm()
    {
        if (iconv_strlen($_POST['firstName']) < 3) {
            echo('Имя должно быть не менее 3х символов!');
        } elseif (is_numeric($_POST['firstName'])) {
            echo('Имя должно содержать только буквы');
        }

        if (iconv_strlen($_POST['secondName']) < 3) {
            echo('Фамилия должна быть не менее 3х символов!');
        } elseif (is_numeric($_POST['secondName'])) {
            echo('Фамилия должна содержать только буквы!');
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo('Email введен неверно!');
        }

    }
}