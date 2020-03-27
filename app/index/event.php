<?php
// 事件定义文件

return [
    'bind' => [
        'index' => 'app\index\event\User',
    ],

    'listen' => [
        'HttpRun' => [],
        'HttpEnd' => [],
        'LogLevel' => [],
        'LogWrite' => [],
    ],

    'subscribe' => [
        'app\index\subscribe\User'
    ],
];
