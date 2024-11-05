<?php
namespace app\controller;

use app\BaseController;
use dayDream\Build;

class Index extends BaseController
{
    public function index()
    {
        $type = 'php';
        new Build($type);
        return;
    }
}
