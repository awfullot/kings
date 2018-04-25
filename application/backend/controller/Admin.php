<?php

/**
 * File Description
 *
 * @author: Thins <ceoecc@qq.com> 2018/4/22
 */


namespace app\backend\controller;


use app\backend\model\Admin as Admins;
use think\Db;
class Admin extends Backend

{

    private $AM;   //当前控制器关联模型


    public function _initialize()

    {

        parent::_initialize();

        $this->AM = new Admins;   //别名：避免与控制名冲突

    }


    public function index()

    {

        $where = [];

        if (input('get.search')) {

            $where['name'] = ['like', '%' . input('get.search') . '%'];

        }

        $dataList = $this->AM->where($where)->paginate('', false, paging());

        $this->assign('dataList', $dataList);

        return $this->fetch();

    }


    public function edit($id)

    {

        if (request()->isPost()) {

            $data = input('post.');

            $res = $this->AM->validate(CONTROLLER_NAME . '.' . LQField())->allowField(true)->save($data, $data['id']);

            if ($res) {

                return LQPjax(LQ('Success'), url('index'));

            } else {

                return LQPjax($this->AM->getError());

            }

        } else {
            if ($id > 0){
                $data = $this->AM->get($id);
                $this->assign('data', $data);
                return $this->fetch();
            }
        }

    }


    public function create()

    {
        if (request()->isPost()){
            Db::startTrans();
            try{
                $data = input('post.');
                $res = $this->AM->validate(CONTROLLER_NAME.'.add')->allowField(true)->save($data);
                if ($res){
                    Db::commit();
                    return LQPjax(LQ('Success'), url('index'));
                }else{
                    return LQPjax($this->AM->getError());
                }
            } catch (\Exception $e) {
                Db::rollback();
                return LQPjax($e->getMessage());
            }
        }else{
            return $this->fetch('edit');
        }

    }


    public function delete()

    {

        if (request()->isPost()){
            $id = input('id');
            if (isset($id) && !empty($id)){
                $result = $this->AM->where('id', $id)->delete();
                if ($result){
                    return LQPjax(LQ('Success'), url('index'));
                }else{
                    return LQPjax($this->AM->getError());
                }
            }
        }

    }

}