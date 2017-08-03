<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-3 10:00:13
 */

namespace App\Controllers;

use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * AdminController 后台主页管理
 */
class AdminController extends ControllerBase
{
    /**
     * 后台主页 /admin get
     * @param $request
     * @param $response
     * @return 后台主页
     *
     */
    public function index(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '普通用户列表',
        ];
        return $this->container->get('twig')->render($response, 'admin/pages/index.twig', $result);
    }
}