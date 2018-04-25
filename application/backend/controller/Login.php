<?php
/**
 * 登录
 *
 * @author: Thins <ceoecc@qq.com> 2018/4/24/024
 */

namespace app\backend\controller;

use app\backend\model\Admin as Admins;
class Login extends Backend
{
    private $cModel;   //当前控制器关联模型

    public function _initialize()
    {
        $this->cModel = new Admins;   //别名：避免与控制名冲突
    }

    public function index()
    {
        $userId = session('userId');
        if (!empty($userId)){
            $this->redirect(url('Index/index'));
        }else{
            return $this->fetch();
        }
    }

    public function checkLogin()
    {
        if(request()->isPost()){
            $data = input('post.');
            $where = ['username' => $data['username'] ];
            $user = $this->cModel->where($where)->find();
            if(!empty($user)){
                if($user['status'] != '1'){
                    return LQPjax(LQ('User stop'));
                }elseif($user['password'] != md5($data['password'])){
                    return LQPjax(LQ('Password error'));
                }else{
                    // 更新登陆信息
                    $ip = request()->ip();
                    $updata = [
                        'logins' => $user['logins']+1,
                        'last_time' => time(),
                        'last_ip' => $ip,
                    ];
                    $where = ['id' => $user['id']];
                    $this->cModel->where($where)->update($updata);
                    //设置session
                    session('userId', $user['id']);
                    return LQPjax(LQ('Success'), url('Index/index'));
                }
            }else{
                return LQPjax(LQ('Error'));
            }
        }
    }

    public function loginOut($params='')
    {
        session('userId', null);
        $this->redirect('Login/index', $params);
    }
}