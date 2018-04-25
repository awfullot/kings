<?php
/**
 * 权限节点判断
 * @param $rule
 * @param $uid
 * @param string $relation
 * @param string $t
 * @param string $f
 * @return string
 */
function authcheck($rule, $uid, $relation='or', $t='', $f='noauth'){
    $auth = new \expand\Auth();
    if( $auth->check($rule, $uid, $type=1, $mode='url',$relation) ){
        $result = $t;
    }else{
        $result = $f;
    }
    return $result;
}

/**
 * 方法权限
 * @param $rule
 * @param string $cationType
 * @param string $param
 * @return mixed|string
 */
function methodAuth($rule, $cationType='create', $param = ''){
    $cationTypes = [
        'create' => "<a title=\"".LQ('Create')."\" href=\"".url($rule, $param)."\"><i class=\"glyphicon glyphicon-plus text-navy\"></i></a>",
        'edit' => "<a title=\"".LQ('Edit')."\" href=\"".url($rule, $param)."\"><i class=\"fa fa-pencil text-navy\"></i></a>&nbsp;&nbsp;&nbsp;",
        'delete' => "<a title=\"".LQ('Delete')."\" href=\"".url($rule, $param)."\"><i class=\"fa fa-trash text-danger\"></i></a>",
    ];
    if( authcheck($rule, UID) != 'noauth' ){
        $result = $cationTypes[$cationType];
    }else{
        $result = "<i title=\"".LQ('Auth no exist')."\" class=\"fa fa-warning text-danger\"></i>&nbsp;";
    }
    return $result;
}

/**
 * ajax pjax返回数据封装
 * @param string $info
 * @param string $url
 * @param string $status
 * @param string $data
 */
function LQPjax($info='', $url='', $status='', $data = ''){
    $result = !empty($url) ? ['info' => LQ('Success'), 'status' => 1, 'url' => $url] : ['info' => LQ('Error'), 'status' => 0, 'url' => ''];
    if(!empty($info)){$result['info'] = $info;}
    if(!empty($status)){$result['status'] = $status;}
    if(!empty($data)){$result['data'] = $data;}
    exit(json_encode($result));
}

/**
 * 格式化时间
 * @param $time
 * @return strings
 */
function formatting_time($time){
    $rtime = $time;
    $time = time () - strtotime($time);

    if($time < 60){
        $str = $time.'秒之前';
    }elseif($time < 60*60){
        $min = floor( $time/60 );
        $str = $min.'分钟前';
    }elseif($time < 60*60*24){
        $h = floor($time/(60*60));
        $str = $h.'小时前 ';
    }elseif($time < 60*60*24*3) {
        $d = floor($time/(60*60*24));
        if ($d == 1)
            $str = $d.'天以前';
        else
            $str = $d.'天以前';
    }else{
        $str = $rtime;
    }
    return $str;
}

/**
 * 搜索地址过滤
 * @param $delparam
 * @return strings
 */
function search_url($delparam){
    $url_path = '/'.request()->path();
    return $url_path;
}

/**
 * 分页接受参数去后缀
 * @return mixeds
 */
function paging(){
    $param = request()->param();
    if (isset($param['_pjax'])){
        unset($param['_pjax']);
    }
    $res['query'] = $param;
    return $res;
}

/**
 * 用于状态判断请求同一个修改接口
 * @param string $arr
 * @return int|string
 */
function LQField(){
    $data = input('post.');
    if(isset($data) && count($data) == 2){
        foreach ($data as $k =>$v){
            $field = $k != 'id' ? $k : '';
        }
    }else{
        $field = 'edit';
    }
    return $field;
}
