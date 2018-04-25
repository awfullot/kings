<?php
/**
 * 管理员验证类
 *
 * @author: Thins <ceoecc@qq.com> 2018/4/25/025
 */

namespace app\backend\validate;

use think\Validate;
class Admin extends Validate
{
    protected $rule = [
        'username' => 'require|min:1|unique:admin',
        'password' => 'require|min:6',
        'email' => 'email|unique:admin',
        'moblie' => '/^1[34578]\d{9}$/|unique:admin',
        'sex' => 'require|in:0,1',
        'status' => 'require|in:0,1',
    ];

    protected $message = [
        'username.require' => '{%Username Require}',
        'username.min' => '{%Username Min}',
        'username.unique' => '{%Username Unique}',
        'password' => '{%Password Val}',
        'password.min' => '{%password Min}',
        'email' => '{%Email Val}',
        'email.unique' => '{%Email Unique}',
        'moblie' => '{%Moblie Val}',
        'moblie.unique' => '{%Moblie Unique}',
        'sex' => '{%Sex Val}',
        'status' => '{%Status Val}',
    ];
    protected $scene = [
        'add'   => ['username', 'password', 'email', 'moblie', 'sex', 'status'],
        'edit'  => ['email', 'moblie', 'sex', 'status'],
        'status' => ['status'],
    ];
}