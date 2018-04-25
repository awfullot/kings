<?php
/**
 * 首页
 *
 * @author: Thins <ceoecc@qq.com> 2018/4/20/020
 */
namespace app\backend\controller;

class Index extends Backend
{

    public function index()
    {
        return $this->fetch();
    }

    public function http(){
        return $this->fetch('/403');
    }
}
