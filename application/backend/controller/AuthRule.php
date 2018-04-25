<?php
/**
 * 权限
 *
 * @author: Thins <ceoecc@qq.com> 2018/4/20/020
 */

namespace app\backend\controller;


class AuthRule extends Backend
{
    public function index(){
        return $this->fetch();
    }
}