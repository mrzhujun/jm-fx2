<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-4 13:58:37
 */

namespace App\Controllers;

use \Slim\Http\Request;
use \Slim\Http\Response;

/**
 * ThirdPartyController 第三方登录
 */
class ThirdPartyController extends ControllerBase
{
    /**
     * 微博授权登录 /login/weibo get
     * @param $request
     * @param $response
     * @return $ret
     *
     */
    public function weiboAuthor(Request $request, Response $response, $args=[])
    {
        // TODO
    }

    /**
     * 微信授权登录 /login/wechat get
     * @param $request
     * @param $response
     * @return $ret
     *
     */
    public function wechatAuthor(Request $request, Response $response, $args=[])
    {
        // TODO
    }

    /**
     * qq授权登录 /login/qq get
     * @param $request
     * @param $response
     * @return $ret
     *
     */
    public function qqAuthor(Request $request, Response $response, $args=[])
    {
        // TODO
    }
}