<?php

//菜单目录

namespace app\model\system;

use think\Model;

class SystemMenu extends Model
{
    protected $name = 'system_menu';

    protected $type = [
        'create_time' => 'timestamp:Y-m-d H:i:s',
    ];
}