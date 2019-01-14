<?php

namespace app\core;



abstract class Controller
{
    public $route;
    public $view;



    public function __construct($route)
    {
        $path = 'app\models\\'.ucfirst($route['controller']);
        $this->route = $route;
        $this->view = new View($route);
        try {
            $this->model = new $path;
        }catch (Error $e) {

        }

    }

}
