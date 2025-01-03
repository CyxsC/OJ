<?php

namespace app\admin\controller\system;

use app\BaseController;
use app\service\system\SystemServices;
use think\App;

class System extends BaseController
{
    public function __construct(App $app, SystemServices $systemService){
        parent::__construct($app);
        $this->services = $systemService;
    }

    /**
     * 保存系统设置
     * @return \think\response\Json
     */
    public function save()
    {
        $system = input('post.');
        $systemService = new SystemService();
        $res = $systemService->save($system);
        return json($res);
    }
}