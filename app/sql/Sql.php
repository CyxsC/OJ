<?php

namespace app\sql;

use think\Model;

abstract class Sql{

    /**
     * 数据库名称
     */
    protected $sql_name = '';

    /**
     * model实例
     */
    protected $model;

    abstract protected function setModel();
    

    public function __construct(){
        $this->model = $this->getModel();
    }

    protected function getModel(){
        return app()->make($this->setModel());
    }

    public function query($sql){
        // $sql = "select * from user";
    }
}