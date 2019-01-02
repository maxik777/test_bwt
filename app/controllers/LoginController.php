<?php

namespace app\controllers;

use app\core\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        $this->view->render();
    }

    public function authorizeAction()
    {
        $result = $this->model->emailVerification($_POST);
    }
}