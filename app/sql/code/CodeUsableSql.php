<?php

namespace App\Sql\code;

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
        return $this->sql->column('name');
    }
}