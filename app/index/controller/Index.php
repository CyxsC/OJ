<?php
namespace app\index\controller;

use app\BaseController;
use think\App;
use app\Services\Index\IndexServices;

class Index extends BaseController
{

    /**
     *  $Service build
     */
    public $IndexServices;

    public function __construct(App $app, IndexServices $services)
    {
        parent::__construct($app);
        $this->services = $services;
    }

    public function index()
    {
        $data = $this->request->getMore([
            ['type', 'php']
        ]);
        return $this->services->index($data);
    }
}
