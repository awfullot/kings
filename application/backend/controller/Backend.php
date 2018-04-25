<?php
/**
 * 控制器基类
 *
 * @author: Thins <ceoecc@qq.com> 2018/4/20/020
 */

namespace app\backend\controller;

use app\backend\model\AuthRule;
use think\Controller;
use think\Lang;

class Backend extends Controller
{

    public function _initialize()
    {
        define('UID', session('userId'));   //设置登陆用户ID常量
        $this->APjaxCheck();
        define('MODULE_NAME', request()->module());
        define('CONTROLLER_NAME', request()->controller());
        define('ACTION_NAME', request()->action());
        define('IS_PJAX', request()->isPjax());
        define('BACKEND_LANG', Lang::detect());

        // 加载当前控制器语言包
        Lang::load(APP_PATH . MODULE_NAME . '/lang/' . BACKEND_LANG . '/' . str_replace('.', '/', strtolower(CONTROLLER_NAME)) . '.php');

        // 渲染
        $this->assign([
            'is_pjax' => IS_PJAX,
            'treeMenu' => $this->treeMenu(),
            'language' => BACKEND_LANG,
            'title' => LQ('Home')
        ]);

        //是否开启浏览模式
       // $isbrowse = 1;
       // if ($isbrowse){
       //     if (input('post.')){
       //         return LQPjax(LQ('Browse mode'));
       //     }
       // }
        // 权限设置
        $auth = new \expand\Auth();
        if (!$auth->check(CONTROLLER_NAME.'/'.ACTION_NAME, UID)){
            if(request()->isAjax()){
                return LQPjax(LQ('Auth no exist'));
            }else{
                $this->error('Index/http');
            }
        }
    }

    /**
     * 获取当前用户权限列表
     * @return array
     */
    public function treeMenu()
    {
        $map = [
            'ismenu' => 1,
            'module' => 'backend',
        ];
        if (UID != '-1'){
            $map['status'] = 1;
        }
        $ARM = new AuthRule();
        $lists =  $ARM->where($map)->order('sorts ASC,id ASC')->select();
        $treeClass = new \expand\Tree();
        $treeMenu = $treeClass->create($lists);
        //判断导航tree用户使用权限
        foreach($treeMenu as $k=>$val){
            if( authcheck($val['name'], UID) == 'noauth' ){
                unset($treeMenu[$k]);
            }
        }
        return $treeMenu;
    }

    /**
     * 检测请求是否有效
     */
    private function APjaxCheck(){
        if(!UID){
            if(request()->isAjax()){
                return LQPjax(LQ('Logon expires'),'/backend/Index/index','999');
            }else{
                $this->redirect('login/index');
            }
        }
    }
}