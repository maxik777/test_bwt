<?php

namespace app\controllers;

use app\core\Controller;

class CommentController extends Controller
{
    public function indexAction()
    {
        $this->view->render();
    }

    public function addCommentAction()
    {
        $response = $_POST["g-recaptcha-response"];
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => '6Le5QIYUAAAAACLx7DxfA7CKhqH5wCg6gp7vjODW',
            'response' => $response
        );
        $options = array(
            'http' => array (
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        $captcha_success=json_decode($verify);
        if ($captcha_success->success==false) {
            header('Location: http://bwt-test/comment');
        } else if ($captcha_success->success==true) {
            $this->model->addComment($_POST);
            header('Location: http://bwt-test/feedback');
        }

    }
}
