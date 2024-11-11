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