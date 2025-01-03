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
    protected $sql;

    abstract protected function setModel();
    

    public function __construct(){
        $this->sql = $this->getModel();
    }

    protected function getModel(){  
        return app()->make($this->setModel());
    }

    /**
     * 查询条件
     * @param array|string $data 查询条件
     * @return <T> 查询结果
     */
    // public function where($data){
    //     return $this->sql->where($data);
    // }

    public function query($sql){
        // $sql = "select * from user";
    }

    /**
     * id查询
     * @param int $id
     * @return array
     */
    public function get($id){
        return $this->sql->where('id', $id)->select();
    }

    /**
     * 插入数据
     * @param array $data
     * @return mixed
     */
    public function save(array $data)
    {
        return $this->getModel()::create($data);
    }

    /**
     * 更新数据
     * @param int|string|array $id
     * @param array $data
     * @param string|null $key
     * @return Model
     */
    public function update($id, array $data, ?string $key = null)
    {
        if (is_array($id)) {
            $where = $id;
        } else {
            $where = [is_null($key) ? $this->getPk() : $key => $id];
        }
        return $this->getModel()::update($data, $where);
    }

    /**
     * 获取主键
     * @return array|string
     */
    protected function getPk()
    {
        return $this->getModel()->getPk();
    }
}