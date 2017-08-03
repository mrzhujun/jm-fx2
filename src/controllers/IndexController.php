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
     * 主页 / get
     * @param $request
     * @param $response
     * @return 主页
     *
     */
    public function index(Request $request, Response $response, $args=[])
    {
        $result = [
            'title' => '普通用户列表',
        ];
        return $this->container->get('twig')->render($response, 'home/pages/index.twig', $result);
    }

    /**
     * 会员登录主页 /member get
     * @param $request
     * @param $response
     * @return 会员登录主页
     *
     */
    public function member(Request $request, Response $response, $args=[])
    {
        if (empty($_SESSION['member_info'])) {
            return $response->withRedirect('/login')->withStatus(301);
        } else {
            $result = [
                'title' => '用户主页',
            ];
            return $this->container->get('twig')->render($response, 'home/pages/article.twig', $result);
        }
    }
}