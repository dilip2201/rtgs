<!DOCTYPE html>
<html lang="en">

<head>
    <title>INTUNOR Integrator | Password Setup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ URL::asset('public/assets/demo/default/media/img/logo/favicon.png') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('public/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/developer.css')}}">
</head>

<body class="fix-menu">

<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <img src="{{ URL::asset('public/assets/demo/default/media/img/logo/logo_intunor-original.png') }}"
                         width="200px">
                </div>
                <div class="auth-box card" style="height: auto!important;">
                    <div class="card-block">
                        <div class="row m-b-20">
                            <div class="col-md-12">
                                <h3 class="text-center">Invalid Token :(</h3>
                            </div>
                        </div>

                        <div class="form-group form-primary">
                            Your Password Setup Token is invalid. Please Generate new one and try again.
                        </div>

                        <div class="row text-left">
                            <div class="col-12">

                                <div class="forgot-phone text-right f-right">
                                    <a href="{{ route('login') }}" class="text-center f-w-600">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
