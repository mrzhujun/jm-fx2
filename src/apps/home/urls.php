<?php

return [
    // test
    '' => [
        'get' => [
            'handler' => "App\Controllers\IndexController:index",
            'name' => 'home_ping',
            'auth' => false
        ],
    ],
    'aaa[/]' => [
        'get' => [
            'handler' => "App\Controllers\IndexController:test",
            'name' => 'home_ping',
            'auth' => false
        ],
    ],
];