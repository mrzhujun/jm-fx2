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