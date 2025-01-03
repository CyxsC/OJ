<?php

namespace app\services\user;

use app\services\BaseService;
use app\sql\user\UserAdminSql;
use dayDream\usually\Encipher;

class UserAdminServices extends BaseService{
    public function __construct(UserAdminSql $Sql){
        parent::__construct();
        $this->sql = $Sql;
    }

    /**
     * admins of sign
     * @param mixed $data
     * @return string
     */
    public function sign($data){
        return "asd";
    }

    public function signup(){
        return "asd";
    }
}