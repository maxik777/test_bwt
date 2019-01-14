<?php

use app\core\Router;

spl_autoload_register(function($class)  //Автозагрузчик классов.
{
$path=str_replace('\\','/', $class.'.php');
if (is_file($path)){
    require $path;
}


});
session_start();
if(!isset($_COOKIE['email']) and $_SERVER['REQUEST_URI']!='/register' and $_SERVER['REQUEST_URI'] != '/login') {
    header("Location: http://bwt-test/register");
}

$router = new Router;

$router->run();

