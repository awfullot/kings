<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/www/wwwroot/backend.ceoe.cc/public/../application/backend/view/login/index.html";i:1524575354;}*/ ?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LQ+ Login</title>

    <link rel="stylesheet" type="text/css" href="/static/backend/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="/static/backend/font-awesome/css/font-awesome.css" />

    <link rel="stylesheet" type="text/css" href="/static/backend/css/animate.css" />

    <link rel="stylesheet" type="text/css" href="/static/backend/css/style.css" />

    <link rel="stylesheet" type="text/css" href="/static/backend/js/plugins/toastr/toastr.css" />

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">

        <div>

            <div>

                <h1 class="logo-name">LQ+</h1>

            </div>

            <h3>Welcome to LQ+</h3>

            <p>Efforts do not contain the result of staying up late, after all, is what they want

            </p>

            <p>Log in and experience it!</p>

            <form class="m-t" action="<?php echo url('checkLogin'); ?>" method="POST" onsubmit="return false">

                <div class="form-group">

                    <input type="text" class="form-control" id="username" name="username" required="">

                </div>

                <div class="form-group">

                    <input type="password" class="form-control" id="password" name="password" required="">

                </div>

                <button type="submit" class="btn btn-primary block full-width m-b login">Login</button>



                <a href="#"><small>Forgot password?</small></a>

                <p class="text-muted text-center"><small>Do not have an account?</small></p>

                <a class="btn btn-sm btn-white btn-block" href="#">Create an account</a>

            </form>

            <p class="m-t"> <small>LQ backstage copyright 2018</small> </p>

        </div>

    </div>

    <!-- Mainly scripts -->

    <script type="text/javascript" src="/static/backend/js/jquery-3.1.1.min.js"></script>

    <script type="text/javascript" src="/static/backend/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/static/backend/js/jquery.pjax.js"></script>

    <script type="text/javascript" src="/static/backend/js/jquery.form.js"></script>

    <script type="text/javascript" src="/static/backend/js/plugins/toastr/toastr.js"></script>

    <script type="text/javascript" src="/static/backend/js/login/login.js"></script>

</body>

</html>

