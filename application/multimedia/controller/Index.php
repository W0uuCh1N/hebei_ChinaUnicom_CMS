<?php
/**
 * Project: hebei_ChinaUnicom.
 * Author: hebei_ChinaUnicom
 * Date: 2016/12/30
 */
namespace app\multimedia\controller;

use think\Request;

class Index
{
    public function index()
    {
        if(Request::instance()->has('path','get') && Request::instance()->has('ext','get') && Request::instance()->has('media','get'))
        {
            if(Request::instance()->get('media') == 'image')
            {
                header("Content-Type: image/".Request::instance()->get('ext'));
                echo file_get_contents(APP_PATH.'plugins/'.Request::instance()->get('path'));
                exit;
            }
        }
    }
}