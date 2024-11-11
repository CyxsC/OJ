<?php
namespace app\model\code;

use think\Model;

class Code extends Model{

    protected $name = "code";

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