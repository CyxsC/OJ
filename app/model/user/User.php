<?php
namespace app\model\user;

use think\Model;

class User extends Model{

    protected $name = "User";

    protected $pk = "id";

    protected $autoWriteTimestamp = true;
    
    // 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }

    protected function id(){
        return "id";
    }
}