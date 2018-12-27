<?php

namespace app\controllers;

use app\core\Controller;

class LoginController extends Controller
{
    public function authorizeAction()
    {
        $this->view->render();
        $this->model->emailVerification($_POST);

    }
}