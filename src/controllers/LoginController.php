<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-3 09:31:19
 */

namespace App\Controllers;

use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * LoginController 登录管理
 */
class LoginController extends ControllerBase
{
    /**
     * 前台登录页面 /login get
     * @param $request
     * @param $response
     * @return 登录页面
     *
     */
    public function indexHome(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '登录页面',
        ];
        return $this->container->get('twig')->render($response, 'home/pages/index.twig', $result);
    }

    /**
     * 登录 /login post
     * @param $request
     * @param $response
     * @return 登录页面
     *
     */
    public function loginHome(Request $request, Response $response, $args=[])
    {
        // TODO
    }

    /**
     * 登出（注销） /logout post
     * @param $request
     * @param $response
     * @return 登录页面
     *
     */
    public function logoutHome(Request $request, Response $response, $args=[])
    {
        // TODO
    }

    //-------------------------------------------后台登录------------------------------------------

    /**
     * 后台登录页面 /login get
     * @param $request
     * @param $response
     * @return 后台登录页面
     *
     */
    public function indexAdmin(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '登录页面',
        ];
        return $this->container->get('twig')->render($response, 'admin/pages/index.twig', $result);
    }

    /**
     * 登录 /admin/login post
     * @param $request
     * @param $response
     * @return 登录页面
     *
     */
    public function loginAdmin(Request $request, Response $response, $args=[])
    {
        // TODO
    }

    /**
     * 登出（注销） /admin/logout post
     * @param $request
     * @param $response
     * @return 登录页面
     *
     */
    public function logoutAdmin(Request $request, Response $response, $args=[])
    {
        // TODO
    }
}