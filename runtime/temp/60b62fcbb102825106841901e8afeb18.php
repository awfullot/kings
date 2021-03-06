<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:79:"/www/wwwroot/backend.ceoe.cc/public/../application/backend/view/admin/edit.html";i:1524582810;s:78:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_base.html";i:1524580403;s:77:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_css.html";i:1524573244;s:78:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_left.html";i:1524478238;s:77:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_top.html";i:1524546214;s:79:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_crumb.html";i:1524477366;s:80:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_buttom.html";i:1524559838;s:76:"/www/wwwroot/backend.ceoe.cc/application/backend/view/common/backend_js.html";i:1524573244;}*/ ?>
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

            <div class="ibox-title">

                <h5>All form elements <small>With custom checbox and radion elements.</small></h5>

                <div class="ibox-tools">

                    <a class="collapse-link">

                        <i class="fa fa-chevron-up"></i>

                    </a>

                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <i class="fa fa-wrench"></i>

                    </a>

                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="#">Config option 1</a>

                        </li>

                        <li><a href="#">Config option 2</a>

                        </li>

                    </ul>

                    <a class="close-link">

                        <i class="fa fa-times"></i>

                    </a>

                </div>

            </div>

            <div class="ibox-content">

                <form method="get" class="form-horizontal">

                    <div class="form-group"><label class="col-sm-2 control-label">Normal</label>



                        <div class="col-sm-10"><input type="text" class="form-control"></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Help text</label>

                        <div class="col-sm-10"><input type="text" class="form-control"> <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Password</label>



                        <div class="col-sm-10"><input type="password" class="form-control" name="password"></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Placeholder</label>



                        <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-lg-2 control-label">Disabled</label>



                        <div class="col-lg-10"><input type="text" disabled="" placeholder="Disabled input here..." class="form-control"></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-lg-2 control-label">Static control</label>



                        <div class="col-lg-10"><p class="form-control-static">email@example.com</p></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Checkboxes and radios <br/>

                        <small class="text-navy">Normal Bootstrap elements</small></label>



                        <div class="col-sm-10">

                            <div><label> <input type="checkbox" value=""> Option one is this and that&mdash;be sure to include why it's great </label></div>

                            <div><label> <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one is this and that&mdash;be sure to

                                include why it's great </label></div>

                            <div><label> <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two can be something else and selecting it will

                                deselect option one </label></div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Inline checkboxes</label>



                        <div class="col-sm-10"><label class="checkbox-inline"> <input type="checkbox" value="option1" id="inlineCheckbox1"> a </label> <label class="checkbox-inline">

                            <input type="checkbox" value="option2" id="inlineCheckbox2"> b </label> <label class="checkbox-inline">

                            <input type="checkbox" value="option3" id="inlineCheckbox3"> c </label></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Checkboxes &amp; radios <br/><small class="text-navy">Custom elements</small></label>



                        <div class="col-sm-10">

                            <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> Option one </label></div>

                            <div class="i-checks"><label> <input type="checkbox" value="" checked=""> <i></i> Option two checked </label></div>

                            <div class="i-checks"><label> <input type="checkbox" value="" disabled="" checked=""> <i></i> Option three checked and disabled </label></div>

                            <div class="i-checks"><label> <input type="checkbox" value="" disabled=""> <i></i> Option four disabled </label></div>

                            <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Option one </label></div>

                            <div class="i-checks"><label> <input type="radio" checked="" value="option2" name="a"> <i></i> Option two checked </label></div>

                            <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option2"> <i></i> Option three checked and disabled </label></div>

                            <div class="i-checks"><label> <input type="radio" disabled="" name="a"> <i></i> Option four disabled </label></div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Inline checkboxes</label>



                        <div class="col-sm-10"><label class="checkbox-inline i-checks"> <input type="checkbox" value="option1">a </label>

                            <label class="checkbox-inline i-checks"> <input type="checkbox" value="option2"> b </label>

                            <label class="checkbox-inline i-checks"> <input type="checkbox" value="option3"> c </label></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Select</label>



                        <div class="col-sm-10"><select class="form-control m-b" name="account">

                            <option>option 1</option>

                            <option>option 2</option>

                            <option>option 3</option>

                            <option>option 4</option>

                        </select>



                            <div class="col-lg-4 m-l-n"><select class="form-control" multiple="">

                                <option>option 1</option>

                                <option>option 2</option>

                                <option>option 3</option>

                                <option>option 4</option>

                            </select></div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group has-success"><label class="col-sm-2 control-label">Input with success</label>



                        <div class="col-sm-10"><input type="text" class="form-control"></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group has-warning"><label class="col-sm-2 control-label">Input with warning</label>



                        <div class="col-sm-10"><input type="text" class="form-control"></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group has-error"><label class="col-sm-2 control-label">Input with error</label>



                        <div class="col-sm-10"><input type="text" class="form-control"></div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Control sizing</label>



                        <div class="col-sm-10"><input type="text" placeholder=".input-lg" class="form-control input-lg m-b">

                            <input type="text" placeholder="Default input" class="form-control m-b"> <input type="text" placeholder=".input-sm" class="form-control input-sm">

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Column sizing</label>



                        <div class="col-sm-10">

                            <div class="row">

                                <div class="col-md-2"><input type="text" placeholder=".col-md-2" class="form-control"></div>

                                <div class="col-md-3"><input type="text" placeholder=".col-md-3" class="form-control"></div>

                                <div class="col-md-4"><input type="text" placeholder=".col-md-4" class="form-control"></div>

                            </div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Input groups</label>



                        <div class="col-sm-10">

                            <div class="input-group m-b"><span class="input-group-addon">@</span> <input type="text" placeholder="Username" class="form-control"></div>

                            <div class="input-group m-b"><input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>

                            <div class="input-group m-b"><span class="input-group-addon">$</span> <input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>

                            <div class="input-group m-b"><span class="input-group-addon"> <input type="checkbox"> </span> <input type="text" class="form-control"></div>

                            <div class="input-group"><span class="input-group-addon"> <input type="radio"> </span> <input type="text" class="form-control"></div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Button addons</label>



                        <div class="col-sm-10">

                            <div class="input-group m-b"><span class="input-group-btn">

                                            <button type="button" class="btn btn-primary">Go!</button> </span> <input type="text" class="form-control">

                            </div>

                            <div class="input-group"><input type="text" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary">Go!

                                        </button> </span></div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">With dropdowns</label>



                        <div class="col-sm-10">

                            <div class="input-group m-b">

                                <div class="input-group-btn">

                                    <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action <span class="caret"></span></button>

                                    <ul class="dropdown-menu">

                                        <li><a href="#">Action</a></li>

                                        <li><a href="#">Another action</a></li>

                                        <li><a href="#">Something else here</a></li>

                                        <li class="divider"></li>

                                        <li><a href="#">Separated link</a></li>

                                    </ul>

                                </div>

                                <input type="text" class="form-control"></div>

                            <div class="input-group"><input type="text" class="form-control">



                                <div class="input-group-btn">

                                    <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action <span class="caret"></span></button>

                                    <ul class="dropdown-menu pull-right">

                                        <li><a href="#">Action</a></li>

                                        <li><a href="#">Another action</a></li>

                                        <li><a href="#">Something else here</a></li>

                                        <li class="divider"></li>

                                        <li><a href="#">Separated link</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group"><label class="col-sm-2 control-label">Segmented</label>



                        <div class="col-sm-10">

                            <div class="input-group m-b">

                                <div class="input-group-btn">

                                    <button tabindex="-1" class="btn btn-white" type="button">Action</button>

                                    <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"><span class="caret"></span></button>

                                    <ul class="dropdown-menu">

                                        <li><a href="#">Action</a></li>

                                        <li><a href="#">Another action</a></li>

                                        <li><a href="#">Something else here</a></li>

                                        <li class="divider"></li>

                                        <li><a href="#">Separated link</a></li>

                                    </ul>

                                </div>

                                <input type="text" class="form-control"></div>

                            <div class="input-group"><input type="text" class="form-control">



                                <div class="input-group-btn">

                                    <button tabindex="-1" class="btn btn-white" type="button">Action</button>

                                    <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"><span class="caret"></span></button>

                                    <ul class="dropdown-menu pull-right">

                                        <li><a href="#">Action</a></li>

                                        <li><a href="#">Another action</a></li>

                                        <li><a href="#">Something else here</a></li>

                                        <li class="divider"></li>

                                        <li><a href="#">Separated link</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group">

                        <div class="col-sm-4 col-sm-offset-2">

                            <button class="btn btn-white" type="submit">Cancel</button>

                            <button class="btn btn-primary" type="submit">Save changes</button>

                        </div>

                    </div>

                </form>

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

