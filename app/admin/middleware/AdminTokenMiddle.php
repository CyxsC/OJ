<?php

namespace app\admin\middleware;

use think\Request;
use think\Response;

/**
 * 跨域请求支持
 */
class AdminTokenMiddle
{

    /**
     * token解析
     * @access public
     * @param Request $request
     * @param Closure $next
     * @param array   $header
     * @return Response
     */
    public function handle(Request $request, \Closure $next)
    {

        return $next($request);
    }
}
