<?php
namespace app\api\controller\code;

use app\BaseController;
use think\App;
use app\Request;
use app\services\code\CodeServices;
use app\services\code\CodeUsableServices;

class Code extends BaseController
{

    /**
     *  $Service build
     */
    public $IndexServices;

    public function __construct(App $app, CodeServices $services)
    {
        parent::__construct($app);
        $this->services = $services;
    }

    /**
     * 获取题库表
     * @return mixed
     */
    public function getTitle()
    {
        $data = $this->request->getMore([
            ['page', ''],
            ['limit', '']
        ]);
        return app('json')->success($this->services->getTitle($data));
    }

    /**
     * 获取单个题目
     */
    public function getTitleId(Request $request)
    {
        // $id = (int)$request->id();
        // echo $id;
        // return;
        return app('json')->success($this->services->getTitleId($id));
    }

    /**
     * 判题
     * @return mixed
     */
    public function CheckCode(CodeUsableServices $codeUsableServices){
        $data = $this->request->postMore([
            ['id', null],
            ['name', ''],
            ['type', ''],
            ['code', '']
        ]);

        if(!isset($data['id']) || empty($data['name'])){
            return app('json')->fail(10010);
        }

        if(!in_array($data['type'],$codeUsableServices->getList(), true)){
            return app('json')->fail(10011);
        }

        return app('json')->success($this->services->checkCode($data));
    }
}
