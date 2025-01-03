<?php
namespace App\services\code;

use dayDream\BuildCode;
use app\services\BaseService;
use app\sql\code\CodeSql;

class CodeServices extends BaseService{

    public function __construct(CodeSql $codeSql){
        parent::__construct();
        $this->sql = $codeSql;
    }

    /**
     * get title
     * 获取题库
     * @param array $data 搜索条件
     * @return array
     */
    public function getTitle($data){
        $list = $this->sql->getTitle();
        return compact('list');
        // (new \dayDream\Build($data['type']));
    }

    /**
     * id to get title
     * 用id获取单个题目
     * @param $id id
     * @return array
     */
    public function getTitleId($id){
        $list = $this->sql->getTitleId($id);
        return compact('list');
    }

    /**
     * test
     * 判题
     * @param array $data
     * @return int
     */
    public function checkCode($data){
        new BuildCode($data['type'], $data['name'], $data['code']);
        return 1;
    }
}
