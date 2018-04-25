<?php
/**
 * File Description
 *
 * @author: Thins <ceoecc@qq.com> 2018/4/23/023
 */

namespace app\backend\behavior;

use think\Config;
use think\Lang;

class Common
{
    public function moduleInit(&$request)
    {
        if (Config::get('app_debug'))
        {
            // 如果是开发模式那么将异常模板修改成官方的
            Config::set('exception_tmpl', THINK_PATH . 'tpl' . DS . 'think_exception.tpl');
        }
        // 切换多语言
        if (Config::get('lang_switch_on') && $request->get('lang'))
        {
            \think\Cookie::set('think_var', $request->get('lang'));
        }
    }
}