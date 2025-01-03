<?php

namespace app\services\user;

use App\services\BaseService;
use App\Sql\user\UserSql;

class UserServices extends BaseService{

    public function __construct(UserSql $Sql){
        parent::__construct();
        $this->sql = $Sql;
    }

    public function sgin(){
        return "asd";
    }
}