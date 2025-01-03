<?php

namespace App\Sql\code;

use app\sql\Sql;
use app\model\code\Code;

class CodeSql extends Sql
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function setModel(){
        return Code::class;
    }

    public function getTitle($page = 1, $limit = 10, $where = null, $order = null)
    {
        return $this->sql->page($page, $limit)->where($where)->order($order)->select();
    }

    public function getTitleId($id = null){
        return $this->sql->where('id', 1)->select();
    }
}