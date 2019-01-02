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
        $this->model->addComment($_POST);
    }
}
