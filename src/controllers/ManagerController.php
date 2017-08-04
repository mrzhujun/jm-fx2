<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-3 10:01:59
 */

namespace App\Controllers;

use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * ManagerController 后台管理员管理
 */
class ManagerController extends ControllerBase
{
    /**
     * 管理员列表 /admin/manager get
     * @param $request
     * @param $response
     * @return 管理员列表
     *
     */
    public function managerList(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '普通用户列表',
        ];
        return $this->container->get('twig')->render($response, 'admin/pages/index.twig', $result);
    }

    /**
     * 添加管理员 /admin/manager post
     * @param $request
     * @param $response
     * @return $ret
     *
     */
    public function addManager(Request $request, Response $response, $args=[])
    {
        // TODO
    }

    /**
     * 修改管理员信息 /admin/manager put
     * @param $request
     * @param $response
     * @return $ret
     *
     */
    public function modifyManager(Request $request, Response $response, $args=[])
    {
        // TODO
    }

    /**
     * 删除管理员 /admin/manager delete
     * @param $request
     * @param $response
     * @return $ret
     *
     */
    public function deleteManager(Request $request, Response $response, $args=[])
    {
        // TODO
    }
}