<?php

return[
    'register'=>[
        'controller'=>'register',
        'action'=>'index'
    ],

    'register/reg'=>[
        'controller'=>'register',
        'action'=>'register'
    ],

    'login'=>[
        'controller'=>'login',
        'action'=>'index'
    ],

    'login/auth'=>[
        'controller'=>'login',
        'action'=>'authorize'
    ],

    'main'=>[
        'controller'=>'main',
        'action'=>'weather'
    ],

    'comment'=>[
        'controller'=>'comment',
        'action'=>'index'
    ],

    'comment/add'=>[
        'controller'=>'comment',
        'action'=>'addComment'
    ],

    'feedback'=>[
        'controller'=>'feedback',
        'action'=>'index'
    ]
];