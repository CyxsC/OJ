<?php

namespace app\admin\controller\admin;

use app\BaseController;
use app\services\user\UserAdminServices;
use think\App;
use think\Request;

class Admin extends BaseController{
    public function __construct(App $app,UserAdminServices $services){
        parent::__construct($app);
        $this->services = $services;
    }

    public function sign(){
        $data = $this->request->postMore([
            ['username', ''],
            ['password', '']
        ]);

        return app('json')->success($this->services->sign($data));
    }

    public function signUp(){
        $data = $this->request->postMore([
            ['username', ''],
            ['password', '']
        ]);
    }

    public function list(){
        
    }
    
    public function add(){

    }

    public function edit(){
        
    }

    public function delet(){

    }
}