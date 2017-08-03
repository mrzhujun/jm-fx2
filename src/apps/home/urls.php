<?php

return [
    // 前台主页
    '' => [
        'get' => [
            'handler' => "App\Controllers\IndexController:index",
            'name'    => 'home_get_index',
            'auth'    => true,
            'op_class' => '主页',
            'op_name' => '主页',
        ],
    ],
    
    // 会员
    '/member[/]' => [
        'get' => [
            'handler' => "App\Controllers\IndexController:member",
            'name'    => 'home_get_member',
            'auth'    => true,
            'op_class' => '会员',
            'op_name' => '会员主页',
        ],
    ],
    '/member/register[/]' => [
        'get' => [
            'handler' => "App\Controllers\IndexController:registerIndex",
            'name'    => 'home_get_member_register',
            'auth'    => true,
            'op_class' => '会员',
            'op_name' => '会员注册页面',
        ],
        'post' => [
            'handler' => "App\Controllers\IndexController:register",
            'name'    => 'home_post_member_register',
            'auth'    => true,
            'op_class' => '会员',
            'op_name' => '注册会员',
        ],
    ],

    // 前台登录
    '/login[/]' => [
        'get' => [
            'handler' => "App\Controllers\LoginController:index",
            'name'    => 'home_get_login',
            'auth'    => true,
            'op_class' => '前台登录',
            'op_name' => '登录页面',
        ],
        'post' => [
            'handler' => "App\Controllers\LoginController:login",
            'name'    => 'home_post_login',
            'auth'    => true,
            'op_class' => '前台登录',
            'op_name' => '登录',
        ],
    ],
    '/logout[/]' => [
        'post' => [
            'handler' => "App\Controllers\LoginController:logout",
            'name'    => 'home_post_logout',
            'auth'    => true,
            'op_class' => '前台登录',
            'op_name' => '注销',
        ],
    ],
];