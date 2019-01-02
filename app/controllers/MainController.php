<?php

namespace app\controllers;


use app\core\Controller;

class MainController extends Controller
{
    public function weatherAction()
    {
        $site = file_get_contents('http://www.gismeteo.ua/city/daily/5093/');
        preg_match_all("#<tbody[^>]+?id\s*?=\s*?[\"\']tbwdaily1(.+?)[\"\'][^>]*?>(.+?)</tbody>#su", $site, $res);

        preg_match_all("#<td[^>]+?class\s*?=\s*?[\"\']cltext[\"\'][^>]*?>(.+?)</td>#su", serialize($res), $precipitation);

        preg_match_all("#<span[^>]+?class\s*?=\s*?[\"\']value m_temp c[\"\'][^>]*?>(.+?)</span>#su", serialize($res), $temp);

        $weather = [];
        $feeling = [];

        for ($i = 0; $i <= count(array_slice($temp[0], 0 ,7)); $i++) {
            if ($i%2 == 0){
                $weather[] = $temp[0][$i];
            } else {
                $feeling[] = $temp[0][$i];
            }
        }

        $all_data = [];
        $day_time = ['Утро', 'День', 'Вечер', 'Ночь'];
        for ($i = 0; $i <= 3; $i++){
            $arr = [];

            $arr[] = $precipitation[0][$i];
            $arr[] = $weather[$i];
            $arr[] = $feeling[$i];
            $arr[] = $day_time[$i];

            $all_data[] = $arr;
        }

        $vars = [
            'weather'=> $all_data
        ];

        $this->view->render($vars);


    }
}