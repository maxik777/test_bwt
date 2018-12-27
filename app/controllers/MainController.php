<?php

namespace app\controllers;


use app\core\Controller;

class MainController extends Controller
{
    public function weatherAction()
    {
        $this->view->render();
        $this->model->weatherParse();
    }
}