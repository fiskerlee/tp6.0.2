<?php
// 事件定义文件

return [
    'bind' => [

    ],

    'listen' => [
        'AppInit' => ['app\index\listener\User'],
        'HttpRun' => [],
        'HttpEnd' => [],
        'LogLevel' => [],
        'LogWrite' => [],
    ],

    'subscribe' => [

    ],
];
