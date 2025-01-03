<?php

namespace app\sql\system;

use app\sql\Sql;
use app\model\system\SystemMenu;

class SystemMenuSql extends Sql
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function setModel(){
        return SystemMenu::class;
    }

    /**
     * 获取菜单列表
     * @param array $data
     * @param string $field
     * @return mixed
     */
    public function getList($data = [], $field = '*'){
        return $this->sql->where($data)->field($field)->select();
    }
}