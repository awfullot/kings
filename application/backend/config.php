<?php
//配置文件
return [
    //模板参数替换
    'view_replace_str' => array(
        '__CSS__' => '/static/backend/css',
        '__JS__'  => '/static/backend/js',
        '__FONTS__'  => '/static/backend/fonts',
        '__IMG__' => '/static/backend/img',
        '__AWESOME__' => '/static/backend/font-awesome',
        '__AVATAR__' => '/static/backend/img/avatar',
    ),
    // Pjax返回格式
    'default_ajax_return'    => 'html',
    // 是否开启多语言
    'lang_switch_on'         => true,
    // 默认语言
    'default_lang'           => 'zh-cn',
    //分页配置
    'paginate'               => [
        'type'      => 'bootstrap',
        'var_page'  => 'page',
        'list_rows' => 9,
    ],
    // 权限不够跳转403
    'dispatch_error_tmpl'    => APP_PATH . 'backend/view/403.html',

];