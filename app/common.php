<?php
// 应用公共文件

if(!function_exists('getLang')){
    /**
     * 绑定一个类到容器
     * @param string|number $lang 语言标识
     * @return string
     */
    function getLang($lang){
        return app('lang')->get($lang);
    }
}

if(!function_exists('getLangs')){
    /**
     * 生成列表树 tree
     * @param array $data 语言标识
     * @return array;
     */
    function tree($data,$id = 0): array{
        // $childrens = [];
        // foreach($data as $v){
        //     $v['pid'] == $id?array_push($childrens,$v):'';
        // }
        return [1];
        // return tree($data());
    }
}