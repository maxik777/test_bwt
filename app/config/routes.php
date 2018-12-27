<?php

return[
    'register'=>[
        'controller'=>'register',
        'action'=>'index'
    ],
    'register/insert' => [
        'controller' => 'register',
        'action' => 'registerUsers'
    ],

    'login'=>[
        'controller'=>'login',
        'action'=>'authorize'
    ]
];