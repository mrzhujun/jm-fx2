<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-3 09:50:42
 */

namespace App\Controllers;

use \App\Models\Member;
use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * MemberController 会员管理
 */
class MemberController extends ControllerBase
{
    /**
     * 前台会员主页 /member get
     * @param $request
     * @param $response
     * @return 前台会员主页
     *
     */
    public function index(Request $request, Response $response, $args=[])
    {
        if (empty($_SESSION['member_info'])) {
            return $response->withRedirect('/login')->withStatus(301);
        } else {
            $result = [
                'title' => '会员主页',
            ];
            return $this->container->get('twig')->render($response, 'home/pages/index.twig', $result);
        }
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
        return $this->container->get('twig')->render($response, 'home/pages/article.twig', $result);
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
        $params = $request->getParams();
        var_dump($params);exit;
        if (!empty($params)) {
            $member = new Member;
            $member->name = $params['name'];
            $member->mobile = $params['mobile'];
            $member->password = $params['password'];

            if ($member->save()) {
                $ret = msg([], '新建成功', 0, '/login');
            } else {
                $ret = msg([], '新建失败', 1);
            }
        } else {
            $ret = msg([], '参数错误', 1);
        }
        return $response->withJson($ret);
    }
}