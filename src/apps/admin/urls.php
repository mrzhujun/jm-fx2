<?php
return [
    // 后台主页
    '[/]' => [
        'get' => [
            'handler' => "App\Controllers\AdminController:index",
            'name'    => 'admin_get_index',
            'auth'    => true,
            'op_class' => '后台主页',
            'op_name' => '后台主页',
        ],
    ],

    // 后台登录
    '/login[/]' => [
        'get' => [
            'handler' => "App\Controllers\LoginController:indexAdmin",
            'name'    => 'home_get_login',
            'auth'    => true,
            'op_class' => '后台登录',
            'op_name' => '登录页面',
        ],
        'post' => [
            'handler' => "App\Controllers\LoginController:loginAdmin",
            'name'    => 'home_post_login',
            'auth'    => true,
            'op_class' => '后台登录',
            'op_name' => '登录',
        ],
    ],
    '/logout[/]' => [
        'post' => [
            'handler' => "App\Controllers\LoginController:logoutAdmin",
            'name'    => 'home_post_logout',
            'auth'    => true,
            'op_class' => '后台登录',
            'op_name' => '注销',
        ],
    ],

    // 管理员
    '/manager[/]' => [
        'get' => [
            'handler' => "App\Controllers\ManagerController:managerList",
            'name'    => 'admin_get_manager',
            'auth'    => true,
            'op_class' => '管理员',
            'op_name' => '管理员列表',
        ],
        'post' => [
            'handler' => "App\Controllers\ManagerController:addManager",
            'name'    => 'admin_post_manager',
            'auth'    => true,
            'op_class' => '管理员',
            'op_name' => '添加管理员',
        ],
        'put' => [
            'handler' => "App\Controllers\ManagerController:modifyManager",
            'name'    => 'admin_put_manager',
            'auth'    => true,
            'op_class' => '管理员',
            'op_name' => '修改管理员信息',
        ],
        'delete' => [
            'handler' => "App\Controllers\ManagerController:deleteManager",
            'name'    => 'admin_delete_manager',
            'auth'    => true,
            'op_class' => '管理员',
            'op_name' => '删除管理员',
        ],
    ],
];