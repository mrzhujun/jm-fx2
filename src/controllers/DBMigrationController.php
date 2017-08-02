<?php

namespace App\Controllers;

use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * DBMigrationController 数据库迁移
 * @author Masterton <zhengcloud@foxmail.com>
 * @version 1.0.0
 * @time 2017-6-7 20:53:42
 *
 */
class DBMigrationController extends ControllerBase
{
    // 根据表名获取对象
    protected function get_object($table_name, $db)
    {
        $obj = null;
        switch ($table_name) {
            // 后台管理用户表
            case 'jm_fx2_admin':
                $obj = new \App\Migrations\Admin($table_name, $db->schema());
                break;
            // 后台管理角色表
            case 'jm_fx2_role':
                $obj = new \App\Migrations\Role($table_name, $db->schema());
                break;
            // 后台管理权限（路由）表
            case 'jm_fx2_route':
                $obj = new \App\Migrations\Route($table_name, $db->schema());
                break;
            // 会员用户表
            case 'jm_fx2_member':
                $obj = new \App\Migrations\Member($table_name, $db->schema());
            // 会员用户信息表
            case 'jm_fx2_member_info':
                $obj = new \App\Migrations\MemberInfo($table_name, $db->schema());
                break;
            # add <table name> with extra `case` here
            default:
                if (empty($table_name)) {
                    $obj = 'parameter [table] not provided';
                } else {
                    $obj = sprintf('table [%s] not supportted', $table_name);
                }
                break;
        }

        return $obj;
    }

    // 创建表
    public function up(Request $request, Response $response, $args = [])
    {
        $table_name = array_get($args, 'table');
        $db = $this->container->get('db');
        $obj = $this->get_object($table_name, $db);
        if ($obj instanceof \App\Migrations\Base) {
            if (!$obj->exists()) {
                $obj->up();
                $response->getBody()->write(sprintf('create table [%s] ok', $table_name));
            } else {
                $response->getBody()->write(sprintf('table [%s] existed', $table_name));
            }
        } else {
            $response->getBody()->write($obj);
        }

        return $response;
    }

    // 销毁表
    public function down(Request $request, Response $response, $args = [])
    {
        $table_name = array_get($args, 'table');
        $db = $this->container->get('db');
        $obj = $this->get_object($table_name, $db);
        if ($obj instanceof \App\Migrations\Base) {
            if ($obj->exists()) {
                $obj->down();
                $response->getBody()->write(sprintf('drop table [%s] ok', $table_name));
            } else {
                $response->getBody()->write(sprintf('table [%s] not exists', $table_name));
            }
        } else {
            $response->getBody()->write($obj);
        }

        return $response;
    }
}