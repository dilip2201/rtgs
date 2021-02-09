<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>INTUNOR Integrator | Password Setup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ URL::asset('public/assets/demo/default/media/img/logo/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/developer.css')}}">
    <style>
        .error {
            color: #fff;
        }
    </style>
</head>

<body class="fix-menu">

<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <form class="md-float-material form-material" method="POST" id="resetpassform" action="{{ route('setnewpassword') }}">
                    <div class="text-center">
                        <img src="{{ URL::asset('public/assets/demo/default/media/img/logo/logo_intunor-original.png') }}" width="200px">
                    </div>
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="id" value="{{ $id }}">
                    <div class="auth-box card" style="height: auto!important;">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center">Set Password</h3>
                                </div>
                            </div>

                            <div class="form-group form-primary">
                                <input type="password" name="password" id="password" class="form-control" required="" placeholder="New Password">
                                <span class="form-bar"></span>
                            </div>

                            <div class="form-group form-primary">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required="" placeholder="Confirm Password">
                                <span class="form-bar"></span>

                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Set Password</button>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-12">

                                    <div class="forgot-phone text-right f-right">
                                        <a href="{{ route('login') }}" class="text-right f-w-600">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('public/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {

        $('#resetpassform').validate({ // initialize the plugin
            rules: {
                password: {
                    required: true,
                    minlength: 6
                },
                password_confirmation: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                }
            }
        });

    });
</script>
</body>

</html> -->




<!DOCTYPE html>
<html>

<head>
    <title>Reset Password | Insurance Agent</title>
    <!-- meta_tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Meta_tag_Keywords -->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--web_fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext"
        rel="stylesheet">
    <!--//web_fonts-->
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

<body>
    <div class="form">
        <div class="form-content" style="margin-top: 6%;">
            <form class="md-float-material form-material" method="POST" id="resetpassform" action="{{ route('setnewpassword') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="form-info">
                    <span class="fa fa-html5"
                        style="text-align: center;width: 100%; color: #fff;font-size: 65px;"></span>
                </div>

                <div class="pass-w3l">
                    <span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                   <!--  <input class="pass" type="password" name="password" placeholder="Password"
                        autocomplete="new-password" required> -->
                    <input type="password" name="password" id="password" class="pass" required="" placeholder="New Password" autocomplete="new-password" required>
                </div>
                @error('password')
                <span role="alert" class="colorwhite"
                    style="color: #fff;margin-bottom: 15px; margin-left: 15px; float: left; width: 100%;">{{ $message }}</span>
                @enderror

                <div class="pass-w3l">
                    <span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="pass" required="" placeholder="Confirm Password" autocomplete="new-password" required>
                    
                </div>
                <input id="password-confirm" type="password" placeholder="Confirm Password"
                    name="password_confirmation" autocomplete="new-password" style="display: none;">
                <div class="submit-agileits">
                  <button type="submit" class="login">Reset Password</button>
                </div>
                <div class="form-check">
                    <div class="right" style="text-align: right; margin-right: 10px;">
                        <a href="{{ route('login') }}">login?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {

        $('#resetpassform').validate({ // initialize the plugin
            rules: {
                password: {
                    required: true,
                    minlength: 6
                },
                password_confirmation: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                }
            }
        });

    });
</script>
</html>

