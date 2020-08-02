<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bus Ticket Reservation</title>
        <!--<link rel="shortcut icon" href="{{URL::to('public/favicon (2).ico')}}" type="image/x-icon">
        <link rel="icon" href="{{URL::to('public/favicon (2).ico')}}" type="image/x-icon">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{URL::to('public/assets/bootstrap/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{URL::to('public/assets/dist/css/AdminLTE.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{URL::to('public/assets/plugins/iCheck/square/blue.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body  class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                
                <a href="../../index2.html"></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Admin Login</p>

                <h3><?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', '');
                    }
                    ?></h3>
                {!! Form::open(['url' =>'/admin-login-check','class'=>'form-horizontal','method'=>'post']) !!}
                <div class="form-group has-feedback">
                    <input type="email" name="admin_email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="admin_password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!--   <div class="col-xs-8">
                           <div class="checkbox icheck">
                               <label>
                                   <input type="checkbox"> Remember Me
                               </label>
                           </div>
                       </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                {!! Form::close() !!}

                <!-- <a href="{{URl::to('/register')}}" class="text-center">Register a new membership</a> -->

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->


    <!-- jQuery 2.2.3 -->
    <script src="{{URL::to('public/assets/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{URL::to('public/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::to('public/assets/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
    </script>
</body>
</html>