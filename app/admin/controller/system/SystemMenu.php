<?php

namespace app\admin\controller\system;

use app\BaseController;
use think\App;
use app\services\system\SystemMenuServices;

/**
 * 菜单控制器
 * Class SystemMenu
 * @package app\admin\controller\system
 */
class SystemMenu extends BaseController
{

    public function __construct(App $app, SystemMenuServices $services){
        parent::__construct($app);
        $this->services = $services;
    }

    /**
     * 获取菜单列表
     */
    public function list(){
        return app('json')->success($this->services->getMenuTree());
    }

    /**
     * 删除菜单
     */
    public function delete(){
        $id = $this->request->post('id');
        
        return app('json')->success($this->services->delete($id));
    }

    /**
     * 保存或修改
     */
    public function save()
    {
        // dump($this->request);
        $data = $this->request->postMore([
            ['id', '0'],
            ['name', ''],
            ['pid', '0'],
            ['path', ''],
            ['icon', ''],
        ]);

        //创建时间戳
        $data['create_time'] = time();

        return app('json')->success($this->services->saveMenu($data));
    }
}