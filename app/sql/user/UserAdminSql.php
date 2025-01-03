<?php

namespace app\sql\user;

use app\sql\Sql;
use app\model\user\User;

class UserAdminSql extends Sql
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function setModel(){
        return User::class;
    }
}