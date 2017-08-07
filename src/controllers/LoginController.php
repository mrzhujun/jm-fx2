<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-3 09:31:19
 */

namespace App\Controllers;

use \App\Models\Member;
use \App\Models\Account;
use \App\Models\Admin;
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
        $params = $request->getParams();
        if (!empty($params['username']) && !empty($params['password'])) {
            $account = Account::where('username', $params['username'])->pluck('uid');
            if (!empty($account)) {
                $member = Member::where('id', $account[0])->get();
                if ($params['password'] == $member[0]->password) {
                    //$_SESSION['member_info'] = $member[0];
                    $ret = msg([], '登录成功', 0, '/member');
                } else {
                    $ret = msg([], '用户名或密码错误', 1);
                }
            } else {
                $ret = msg([], '用户名或密码错误', 1);
            }
        } else {
            $ret = msg([], '参数错误', 1);
        }
        return $response->withJson($ret);
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
        $params = $request->getParams();
        unset($_SESSION['member_info']);
        if (empty($_SESSION['member_info'])) {
            $ret = msg([], '注销成功', 0, '/login');
        } else {
            $ret = msg([], '注销失败', 1);
        }
        return $response->withJson($ret);
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