<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: hebei_ChinaUnicom <liu21st@ChinaUnicom.com>
// +----------------------------------------------------------------------

namespace think;

// ThinkPHP 引导文件
// 加载基础文件
require __DIR__ . '/base.php';
// 执行应用
App::run()->send();
