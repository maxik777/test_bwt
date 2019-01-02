<?php

namespace app\controllers;

use app\core\Controller;

class RegisterController extends Controller
{
    public function indexAction()
    {
        $this->view->render();
    }

    public function registerAction()
    {
        $result = $this->model->registerUsers($_POST);

    }

}