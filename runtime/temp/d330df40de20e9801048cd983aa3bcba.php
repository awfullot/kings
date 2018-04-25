<?php if (!defined('THINK_PATH')) exit(); /*a:11:{s:80:"/www/wwwroot/backend.ceoe.cc/public/../application/backend/view/admin/index.html";i:1524580423;s:78:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_base.html";i:1524580403;s:77:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_css.html";i:1524573244;s:78:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_left.html";i:1524478238;s:77:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_top.html";i:1524546214;s:79:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_crumb.html";i:1524477366;s:75:"/www/wwwroot/backend.ceoe.cc/application/backend/view/form/form_action.html";i:1524561356;s:75:"/www/wwwroot/backend.ceoe.cc/application/backend/view/form/form_search.html";i:1524478704;s:75:"/www/wwwroot/backend.ceoe.cc/application/backend/view/form/list_action.html";i:1524561360;s:80:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_buttom.html";i:1524559838;s:76:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_js.html";i:1524573244;}*/ ?>
<?php if(!$is_pjax): ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="<?php echo $language; ?>">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php endif; ?>

<title><?php echo $title; ?></title>

<!-- css引入 -->



    <?php if(!$is_pjax): ?>

	<link rel="stylesheet" type="text/css" href="/static/backend/css/bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="/static/backend/font-awesome/css/font-awesome.css" />

	<link rel="stylesheet" type="text/css" href="/static/backend/css/animate.css" />

	<link rel="stylesheet" type="text/css" href="/static/backend/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/static/backend/js/plugins/toastr/toastr.css" />

<?php endif; if(!$is_pjax): ?>

</head>

<body class="md-skin fixed-nav no-skin-config">

<div id="wrapper">

<?php endif; ?>

<!-- 左侧 -->



    <?php if(!$is_pjax): ?>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <!--左侧用户信息-->
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/static/backend/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <!--左侧菜单栏-->

                <?php if(is_array($treeMenu) || $treeMenu instanceof \think\Collection || $treeMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $treeMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oo): $mod = ($i % 2 );++$i;if($oo['level'] == '1' && $oo['name'] == 'Index/index'): ?>
                <li>
                    <!--fa fa-th-large-->
                    <a href="<?php echo url(MODULE_NAME.'/'.$oo['name']); ?>"><i class="<?php echo $oo['icon']; ?>"></i> <span class="nav-label"><?php echo LQ($oo['title']); ?></span></a>
                </li>
                <?php elseif($oo['level'] == '1'): ?>
                <li>
                    <a href="<?php echo url(MODULE_NAME.'/'.$oo['name']); ?>"><i class="<?php echo $oo['icon']; ?>"></i> <span class="nav-label"><?php echo LQ($oo['title']); ?></span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <?php if(is_array($treeMenu) || $treeMenu instanceof \think\Collection || $treeMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $treeMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$to): $mod = ($i % 2 );++$i;if($to['pid'] == $oo['id']): ?>
                        <li><a href="<?php echo url(MODULE_NAME.'/'.$to['name']); ?>"><?php echo LQ($to['title']); ?></a></li>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </nav>
<?php endif; ?>



<!-- 右侧 -->

    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">

            <!--头部导航-->

            

                <?php if(!$is_pjax): ?>
	<nav class="navbar navbar-fixed-top" role="navigation" style="margin-bottom: 0">
	    <div class="navbar-header">
	        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
	        <!--<form role="search" class="navbar-form-custom" action="search_results.html">-->
	            <!--<div class="form-group">-->
	                <!--<input type="text" placeholder="<?php echo LQ('Search'); ?>" class="form-control" name="top-search" id="top-search">-->
	            <!--</div>-->
	        <!--</form>-->
	    </div>
	    <ul class="nav navbar-top-links navbar-right">
<!-- 	        <li>
	            <span class="m-r-sm text-muted welcome-message">Welcome to</span>
	        </li> -->
	        <li>
	        	<a href="?lang=<?php if($language == 'zh-cn'): ?>en<?php else: ?>zh-cn<?php endif; ?>" title="<?php echo LQ('Switch Language'); ?>" target="_blank" class="btn"><?php if($language == 'zh-cn'): ?><?php echo LQ('Chinese'); else: ?><?php echo LQ('English'); endif; ?></a>
	        </li>
	        <li class="dropdown">
	            <a href="#" title="<?php echo LQ('Caching'); ?>">
	                <i class="fa fa-trash"></i>
	            </a>
	        </li>
	        <li class="dropdown">
	            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
	                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
	            </a>
	            <ul class="dropdown-menu dropdown-messages">
	                <li>
	                    <div class="dropdown-messages-box">
	                        <a href="profile.html" class="pull-left">
	                            <img alt="image" class="img-circle" src="/static/backend/img/a7.jpg">
	                        </a>
	                        <div class="media-body">
	                            <small class="pull-right">46h ago</small>
	                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
	                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
	                        </div>
	                    </div>
	                </li>
	                <li class="divider"></li>
	                <li>
	                    <div class="dropdown-messages-box">
	                        <a href="profile.html" class="pull-left">
	                            <img alt="image" class="img-circle" src="/static/backend/img/a4.jpg">
	                        </a>
	                        <div class="media-body ">
	                            <small class="pull-right text-navy">5h ago</small>
	                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
	                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
	                        </div>
	                    </div>
	                </li>
	                <li class="divider"></li>
	                <li>
	                    <div class="dropdown-messages-box">
	                        <a href="profile.html" class="pull-left">
	                            <img alt="image" class="img-circle" src="/static/backend/img/profile.jpg">
	                        </a>
	                        <div class="media-body ">
	                            <small class="pull-right">23h ago</small>
	                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
	                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
	                        </div>
	                    </div>
	                </li>
	                <li class="divider"></li>
	                <li>
	                    <div class="text-center link-block">
	                        <a href="mailbox.html">
	                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
	                        </a>
	                    </div>
	                </li>
	            </ul>
	        </li>
	        <li class="dropdown">
	            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
	                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
	            </a>
	            <ul class="dropdown-menu dropdown-alerts">
	                <li>
	                    <a href="mailbox.html">
	                        <div>
	                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
	                            <span class="pull-right text-muted small">4 minutes ago</span>
	                        </div>
	                    </a>
	                </li>
	                <li class="divider"></li>
	                <li>
	                    <a href="profile.html">
	                        <div>
	                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
	                            <span class="pull-right text-muted small">12 minutes ago</span>
	                        </div>
	                    </a>
	                </li>
	                <li class="divider"></li>
	                <li>
	                    <a href="grid_options.html">
	                        <div>
	                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
	                            <span class="pull-right text-muted small">4 minutes ago</span>
	                        </div>
	                    </a>
	                </li>
	                <li class="divider"></li>
	                <li>
	                    <div class="text-center link-block">
	                        <a href="notifications.html">
	                            <strong>See All Alerts</strong>
	                            <i class="fa fa-angle-right"></i>
	                        </a>
	                    </div>
	                </li>
	            </ul>
	        </li>
	        <li>
	            <a href="<?php echo url('Login/loginOut'); ?>">
	                <i class="fa fa-sign-out"></i> <?php echo LQ('Log out'); ?>
	            </a>
	        </li>
	    </ul>
	</nav>
<?php endif; ?>

            

        </div>

        <!--面包屑-->

  <!--           

                <?php if(!$is_pjax): ?>
	<div class="row wrapper border-bottom white-bg page-heading">
	    <div class="col-lg-10">
	        <h2>Loading buttons</h2>
	        <ol class="breadcrumb">
	            <li>
	                <a href="index.html">Home</a>
	            </li>
	            <li>
	                <a>Miscellaneous</a>
	            </li>
	            <li class="active">
	                <strong>Loading buttons</strong>
	            </li>
	        </ol>
	    </div>
	    <div class="col-lg-2">

	    </div>
	</div>
<?php endif; ?>

             -->

        <div class="animated fadeInRight" id="pjax-container">


                
<div class="row wrapper border-bottom white-bg page-heading row_mb">

        <div class="col-lg-10">

            <h2>Loading buttons</h2>

            <ol class="breadcrumb">

                <li>

                    <a href="index.html">Home</a>

                </li>

                <li>

                    <a>Miscellaneous</a>

                </li>

                <li class="active">

                    <strong>Loading buttons</strong>

                </li>

            </ol>

        </div>

        <div class="col-lg-2">



        </div>

    </div>
            <div class="row row_content">
<div class="col-lg-12">

    <div class="ibox float-e-margins">

        <!--<div class="ibox-title">-->

            <!--<h5>Custom responsive table </h5>-->

        <!--</div>-->

        <div class="ibox-content">

            <div class="row">

                <div class="col-sm-10 m-b-xs">
    <?php echo methodAuth(CONTROLLER_NAME.'/create', 'create'); ?>
</div>

                <div class="col-sm-2">
    <form action="<?php echo search_url('search'); ?>" method="GET" pjax-search="">
        <div class="input-group">
            <input class="form-control" placeholder="<?php echo LQ('Search FAQ'); ?>" value="<?php echo input('get.search'); ?>" name="search" type="text">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary"><?php echo LQ('Search'); ?></button>
            </span>
        </div>
    </form>
</div>



            </div>

            <div class="table-responsive">

                <table class="table">

                    <thead>

                    <tr>

                        <th></th>

                        <th><?php echo LQ('System Name'); ?></th>

                        <th><?php echo LQ('Name'); ?></th>

                        <th><?php echo LQ('System Role'); ?></th>

                        <th><?php echo LQ('Email'); ?></th>

                        <th><?php echo LQ('Phone'); ?></th>

                        <th><?php echo LQ('Login Num'); ?></th>

                        <th><?php echo LQ('Status'); ?></th>

                        <th><?php echo LQ('Operate'); ?></th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php if(is_array($dataList) || $dataList instanceof \think\Collection || $dataList instanceof \think\Paginator): $i = 0; $__LIST__ = $dataList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>

                    <tr>

                        <td><input type="checkbox" class="i-checks" name="input[]" value="<?php echo $v['id']; ?>"></td>

                        <td><?php echo $v['username']; ?></td>

                        <td><?php echo $v['name']; ?></td>

                        <td style="vertical-align:middle"><span class="label label-primary">超级管理员</span></td>

                        <td><?php echo $v['email']; ?></td>

                        <td><?php echo $v['moblie']; ?></td>

                        <td><?php echo $v['logins']; ?></td>

                        <td><a title="<?php echo LQ('Edit'); ?>" class="<?php if($v['status'] == 1): ?>text-navy<?php else: ?>text-danger<?php endif; ?> switch_to" data-id="<?php echo $v['id']; ?>" data-field="status"

                               data-value="<?php echo $v['status']; ?>" data-url="<?php echo url('edit', 'id='.$v['id']); ?>"><?php if($v['status'] == 1): ?>Y<?php else: ?>N<?php endif; ?></a></td>

                        <td><?php echo methodAuth(CONTROLLER_NAME.'/edit', 'edit', ['id' => $v['id']]); ?>
<?php echo methodAuth(CONTROLLER_NAME.'/delete', 'delete', ['id' => $v['id']]); ?></td>

                    </tr>

                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>

                </table>

                <div class="pager-style">

                    <?php echo $dataList->render(); ?>

                </div>

            </div>

        </div>

    </div>

</div>
</div>



            

        </div>

        <!-- 底部 -->

        

            <?php if(!$is_pjax): ?>
	<div class="footer">
	    <div class="pull-right">
	        LQ+ <strong>Queen Of</strong> Kings.
	    </div>
	    <div>
	        <strong>Copyright</strong> Example Company &copy; 2018
	    </div>
	</div>
<?php endif; ?>

        

    </div>

<?php if(!$is_pjax): ?>

</div>

<?php endif; ?>

<!-- js引入 -->



    <?php if(!$is_pjax): ?>

	<!-- Mainly scripts -->

	<script type="text/javascript" src="/static/backend/js/jquery-3.1.1.min.js"></script>

	<script type="text/javascript" src="/static/backend/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="/static/backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>

	<script type="text/javascript" src="/static/backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom and plugin javascript -->

	<script type="text/javascript" src="/static/backend/js/inspinia.js"></script>

	<script type="text/javascript" src="/static/backend/js/plugins/pace/pace.min.js"></script>

	<script type="text/javascript" src="/static/backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script type="text/javascript" src="/static/backend/js/jquery.pjax.js"></script>
	<script type="text/javascript" src="/static/backend/js/plugins/toastr/toastr.js"></script>
	<script type="text/javascript" src="/static/backend/js/common.js"></script>

<?php endif; if(!$is_pjax): ?>

</body>

</html>

<?php endif; ?>

