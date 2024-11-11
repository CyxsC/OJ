<?php

namespace app\controller;

use app\model\Link as LinkModel;
use app\BaseController;
use think\Request;

class Link extends BaseController
{
    private $LinkModel;

    public function initialize(){
        $this->LinkModel = new LinkModel();
        // 调用父类的初始化方法
        parent::initialize();
    }

    public function index(){
        return "welcome";
    }

    public function list(){
        return $this->LinkModel->getLinkList();
    }

    public function input(){
        $where = $this->request->param("key");
        return $this->LinkModel->getLinkInput($where);
    }
}
