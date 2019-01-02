<?php

namespace app\controllers;

use app\core\Controller;

class FeedbackController extends Controller
{
    public function indexAction()
    {

        $result = $this->model->getComments();
        $vars=[
            'comments'=>$result
        ];
        $this->view->render($vars);
    }
}