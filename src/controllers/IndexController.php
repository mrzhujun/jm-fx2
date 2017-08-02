<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-2 14:05:24
 */

namespace App\Controllers;

use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * IndexController 前台主页管理
 */
class IndexController extends ControllerBase
{
    /**
     * 查看用户资料（列表） /admin/user get
     * @param $id 用户id
     * @param $.. 其他参数
     *
     */
    public function index(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '普通用户列表',
        ];
        return $this->container->get('twig')->render($response, 'home/pages/index.twig', $result);
    }

    public function test(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '普通用户列表',
        ];
        return $response->withJson(msg([], 'fsadfdsa', 1));
        return $this->container->get('twig')->render($response, 'home/pages/index.twig', $result);
    }
}