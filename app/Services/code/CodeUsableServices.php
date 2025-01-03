<?php
namespace App\services\code;

use app\services\BaseService;
use app\sql\code\CodeUsableSql;

class CodeUsableServices extends BaseService{

    public function __construct(CodeUsableSql $codeSql){
        parent::__construct();
        $this->sql = $codeSql;
    }

    /**
     * get List
     * 获取所以支持的语言
     * @param $data 搜索条件
     * @return array
     */
    public function getList(){
        $list = $this->sql->getList();
        return $list;
    }
}
