<?php

namespace app\model;

use think\Model;

class Link extends Model{

    // protected $jsonAssoc = true; // 自动识别json格式

    public function getLinkList(){
        return $this->field('id,name,link')->select();
    }

    public function getLinkInput($key){
        return $this->field('id,name,link')->where('name','like',$key)->select();
    }
}