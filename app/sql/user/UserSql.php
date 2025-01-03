a<?php

namespace App\Sql\code;

use app\sql\Sql;
use app\model\user\User;

class UserSql extends Sql
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function setModel(){
        return User::class;
    }
}