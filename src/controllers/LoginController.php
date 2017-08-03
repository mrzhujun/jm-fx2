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
     * 登录页面 /login get
     * @param $request
     * @param $response
     * @return 登录页面
     *
     */
    public function index(Request $request, Response $response, $args=[])
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
    public function login(Request $request, Response $response, $args=[])
    {
        
    }

    /**
     * 登出（注销） /logout post
     * @param $request
     * @param $response
     * @return 登录页面
     *
     */
    public function logout(Request $request, Response $response, $args=[])
    {
        
    }
}