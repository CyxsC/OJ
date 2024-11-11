<?php
namespace app\model\code;

use think\Model;

class CodeUsable extends Model{

    protected $name = "code_usable";

    protected $pk = "id";

    protected $autoWriteTimestamp = true;
    
    // 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }
}