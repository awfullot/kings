<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:80:"/www/wwwroot/backend.ceoe.cc/public/../application/backend/view/index/index.html";i:1524583417;s:78:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_base.html";i:1524580403;s:77:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_css.html";i:1524573244;s:78:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_left.html";i:1524478238;s:77:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_top.html";i:1524546214;s:79:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_crumb.html";i:1524477366;s:80:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_buttom.html";i:1524559838;s:76:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_js.html";i:1524573244;}*/ ?>
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
            <div class="row row_content">

<div class="col-lg-3">

    <div class="ibox">

        <div class="ibox-content">

            <h5 class="m-b-md">Server status Q12</h5>

            <h2 class="text-navy">

                <i class="fa fa-play fa-rotate-270"></i> Up

            </h2>

            <small>Last down 42 days ago</small>

        </div>

    </div>

</div>

<div class="col-lg-3">

    <div class="ibox">

        <div class="ibox-content ">

            <h5 class="m-b-md">Server status Q13</h5>

            <h2 class="text-navy">

                <i class="fa fa-play fa-rotate-270"></i> Up

            </h2>

            <small>Last down 42 days ago</small>

        </div>

    </div>

</div>

<div class="col-lg-3">

    <div class="ibox">

        <div class="ibox-content">

            <h5 class="m-b-md">Server status Q42</h5>

            <h2 class="text-danger">

                <i class="fa fa-play fa-rotate-90"></i> Down

            </h2>

            <small>Server down since 4 days</small>

        </div>

    </div>

</div>

<div class="col-lg-3">

    <div class="ibox">

        <div class="ibox-content">

            <h5 class="m-b-md">Server status Q43</h5>

            <h2 class="text-danger">

                <i class="fa fa-play fa-rotate-90"></i> Down

            </h2>

            <small>Server down since 4:32 pm.</small>

        </div>

    </div>

</div>



    <!--<div class="col-lg-3">-->

        <!--<div class="ibox">-->

            <!--<div class="ibox-content">-->

                <!--<h5>Visits in last 24h</h5>-->

                <!--<h2>198 009</h2>-->

                <!--<div id="sparkline1"></div>-->

            <!--</div>-->

        <!--</div>-->

    <!--</div>-->

    <!--<div class="col-lg-3">-->

        <!--<div class="ibox">-->

            <!--<div class="ibox-content">-->

                <!--<h5>Visits week</h5>-->

                <!--<h2>65 000</h2>-->

                <!--<div id="sparkline2"></div>-->

            <!--</div>-->

        <!--</div>-->

    <!--</div>-->

    <!--<div class="col-lg-3">-->

        <!--<div class="ibox">-->

            <!--<div class="ibox-content">-->

                <!--<h5>Last month</h5>-->

                <!--<h2>680 900</h2>-->

                <!--<div id="sparkline3"></div>-->

            <!--</div>-->

        <!--</div>-->

    <!--</div>-->

    <!--<div class="col-lg-3">-->

        <!--<div class="ibox">-->

            <!--<div class="ibox-content">-->

                <!--<h5>Avarage time</h5>-->

                <!--<h2>00:06:40</h2>-->

                <!--<div id="sparkline4"></div>-->

            <!--</div>-->

        <!--</div>-->

    <!--</div>-->

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Usage</h5>

                <h2>65%</h2>

                <div class="progress progress-mini">

                    <div style="width: 68%;" class="progress-bar"></div>

                </div>



                <div class="m-t-sm small">Server down since 4:32 pm.</div>

            </div>

        </div>

    </div>



    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Usage</h5>

                <h2>50%</h2>

                <div class="progress progress-mini">

                    <div style="width: 78%;" class="progress-bar"></div>

                </div>



                <div class="m-t-sm small">Server down since 4:32 pm.</div>

            </div>

        </div>

    </div>



    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Usage</h5>

                <h2>14%</h2>

                <div class="progress progress-mini">

                    <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>

                </div>



                <div class="m-t-sm small">Server down since 4:32 pm.</div>

            </div>

        </div>

    </div>



    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Usage</h5>

                <h2>20%</h2>

                <div class="progress progress-mini">

                    <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>

                </div>



                <div class="m-t-sm small">Server down since 4:32 pm.</div>

            </div>

        </div>

    </div>



    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Income</h5>

                <h1 class="no-margins">886,200</h1>

                <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>

                <small>Total income</small>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Income last month</h5>

                <h1 class="no-margins">1 738,200</h1>

                <div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>

                <small>Total income</small>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Income last day</h5>

                <h1 class="no-margins">-200,100</h1>

                <div class="stat-percent font-bold text-danger">12% <i class="fa fa-level-down"></i></div>

                <small>Total income</small>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Income all</h5>

                <h1 class="no-margins">54,200</h1>

                <div class="stat-percent font-bold text-danger">24% <i class="fa fa-level-down"></i></div>

                <small>Total income</small>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>All new alerts</h5>

                <table class="table table-stripped small m-t-md">

                    <tbody>

                    <tr>

                        <td class="no-borders">

                            <i class="fa fa-circle text-navy"></i>

                        </td>

                        <td  class="no-borders">

                            Example element 1

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-navy"></i>

                        </td>

                        <td>

                            Example element 2

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-navy"></i>

                        </td>

                        <td>

                            Example element 3

                        </td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Alerts</h5>

                <table class="table table-stripped small m-t-md">

                    <tbody>

                    <tr>

                        <td class="no-borders">

                            <i class="fa fa-circle text-navy"></i>

                        </td>

                        <td  class="no-borders">

                            Example element 1

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-navy"></i>

                        </td>

                        <td>

                            Example element 2

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-navy"></i>

                        </td>

                        <td>

                            Example element 3

                        </td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>All messages</h5>

                <table class="table table-stripped small m-t-md">

                    <tbody>

                    <tr>

                        <td class="no-borders">

                            <i class="fa fa-circle text-danger"></i>

                        </td>

                        <td  class="no-borders">

                            Example element 1

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-danger"></i>

                        </td>

                        <td>

                            Example element 2

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-danger"></i>

                        </td>

                        <td>

                            Example element 3

                        </td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="ibox">

            <div class="ibox-content">

                <h5>Last notification</h5>

                <table class="table table-stripped small m-t-md">

                    <tbody>

                    <tr>

                        <td class="no-borders">

                            <i class="fa fa-circle text-danger"></i>

                        </td>

                        <td  class="no-borders">

                            Example element 1

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-danger"></i>

                        </td>

                        <td>

                            Example element 2

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <i class="fa fa-circle text-danger"></i>

                        </td>

                        <td>

                            Example element 3

                        </td>

                    </tr>

                    </tbody>

                </table>

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

