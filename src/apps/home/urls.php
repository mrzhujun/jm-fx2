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

    // 第三方授权登录
    // 微博授权
    '/login/weibo[/]' => [
        'get' => [
            'handler' => "App\Controllers\ThirdPartyController:weiboAuthor",
            'name'    => 'home_get_login_weibo',
            'auth'    => true,
            'op_class' => '第三方登录',
            'op_name' => '微博授权',
        ],
    ],
    // 微信授权
    '/login/wechat[/]' => [
        'get' => [
            'handler' => "App\Controllers\ThirdPartyController:wechatAuthor",
            'name'    => 'home_get_login_wechat',
            'auth'    => true,
            'op_class' => '第三方登录',
            'op_name' => '微信授权',
        ],
    ],
    // QQ授权
    '/login/qq[/]' => [
        'get' => [
            'handler' => "App\Controllers\ThirdPartyController:qqAuthor",
            'name'    => 'home_get_login_qq',
            'auth'    => true,
            'op_class' => '第三方登录',
            'op_name' => 'QQ授权',
        ],
    ],
];