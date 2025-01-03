<?php

namespace app\services\system;

use app\services\BaseService;
use app\sql\system\SystemMenuSql;

class SystemMenuServices extends  BaseService{

    public function __construct(SystemMenuSql $Sql){
        parent::__construct();
        $this->sql = $Sql;
    }

    /**
     * 获取菜单树
     * @param int $data //递归上一个的id
     * @param string $path //递归上一个的路径
     * @return array
     */
    public function getMenuTree($id = 0, $path = ""){
        $filed = "id,name,path,icon,create_time";

        $list = $this->sql->getList(["pid" => $id], $filed);
        if(!$path){
            foreach($list as &$v){
                $v['path'] = "oj/".$v['path'];
            }
        }
        foreach($list as $v){
            $v['path'] = $path?$path."/".$v['path']:$v['path'];
            $children = $this->getMenuTree($v['id'], $v['path'])['list'];
            if(count($children) !== 0){
                $v['children'] = $children;
            }
        }
        return compact("list");
    }

    /**
     * 添加或编辑菜单 menu of add or edit
     * @param array $data
     * @return int
     */
    public function saveMenu($data){
        if($data['id'] === "0"){
            $this->sql->save($data);
        }else{
            $this->sql->update($data['id'], $data);
        }
        return "10000";
    }

    /**
     * 删除菜单 menu of delete
     * @param array $data
     * @return mixed
     */
    public function deleteMenu($data){
        return 0;
    }

}