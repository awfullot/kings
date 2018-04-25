<?php

namespace app\backend\model;

class AuthRule extends Backend
{
    public function getMenu($nodeStr = '')
    {
        //超级管理员没有节点数组
        $where = empty($nodeStr) ? 'status = 1' : 'status = 1 and id in('.$nodeStr.')';
        $result = $this->where($where)->order('sort')->select();
        $menu = prepareMenu($result);
        return $menu;
    }
}