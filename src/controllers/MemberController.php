<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-3 09:50:42
 */

namespace App\Controllers;

use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * MemberController 登录管理
 */
class MemberController extends ControllerBase
{
    /**
     * 前台会员主页 /login get
     * @param $request
     * @param $response
     * @return 前台会员主页
     *
     */
    public function index(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '会员主页',
        ];
        return $this->container->get('twig')->render($response, 'home/pages/index.twig', $result);
    }

    /**
     * 会员注册页面 /member/register get
     * @param $request
     * @param $response
     * @return 会员注册页面
     *
     */
    public function registerIndex(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '注册会员',
        ];
        return $this->container->get('twig')->render($response, 'home/pages/register.twig', $result);
    }

    /**
     * 会员注册 /member/register post
     * @param $request
     * @param $response
     * @return $ret
     *
     */
    public function register(Request $request, Response $response, $args=[])
    {
        // TODO
    }
}