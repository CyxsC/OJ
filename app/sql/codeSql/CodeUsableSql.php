<?php

namespace App\Sql\CodeSql;

use app\sql\Sql;
use app\model\code\CodeUsable;

class CodeUsableSql extends Sql
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function setModel(){
        return CodeUsable::class;
    }

    public function getList(){
        return $this->model->column('name');
    }
}