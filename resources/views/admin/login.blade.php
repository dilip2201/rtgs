

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Log in | RTGS </title>
  <!-- Tell the browser to be responsive to screen width -->

   <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="RTGS">
    <meta itemprop="description" content="RTGS ">
    <meta itemprop="image" content="{{ URL::asset('public/images/logo/Logo.svg') }}}">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="RTGS ">
    <meta property="og:description" content="RTGS ">
    <meta property="og:image" content="{{ URL::asset('public/Link.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RTGS ">
    <meta name="twitter:description" content="RTGS ">
    <meta name="twitter:image" content="{{ URL::asset('public/Link.png') }}">


  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('public/admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <link rel="icon" href="{{ URL::asset('public/images/logo/favicon.png') }}" type="image/png" sizes="16x16">
    
</head>
<style type="text/css">
.login-page::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.65);
}

.colorwhite{
    color: #fff;
}

.login-box .card {
    background-color: rgba(255,255,255,0.1);
    border: 1px solid #fff;
    color: #fff!important;
    max-width: 380px!important;
    height: auto !important;
    border-radius: 10px!important;
    box-shadow: 1px 0px 15px #ffffff;
    margin: 40px auto 0 auto!important;
}
.login-card-body{
    background: none;
}

</style>
<body class="hold-transition login-page" style="background-image: url('{{ url('public/admin/bg-01.jpg') }}');     background-repeat: no-repeat;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="color: #fff; font-weight: 600;"><img src="{{ URL::asset('public/images/logo/Logo.svg') }}" style="    width: 221px;    background: #fff;    padding: 10px 20px;    border-radius: 10px 0px 10px 0px;"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="color: #fff;">Sign in to start your session</p>

      <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="input-group mb-3">
          <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope colorwhite"></span>
            </div>
          </div>
          @error('email')
            
                <span role="alert" class="colorwhite">{{ $message }}</span>
            
        @enderror
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          <input id="password-confirm" type="password" placeholder="Confirm Password"
                                 name="asaspassword_confirmation" autocomplete="new-password" style="display: none;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock colorwhite"></span>
            </div>
          </div>
          @error('password')
                <span role="alert" class="colorwhite" style="width: 100%;">{{ $message }}</span>
            @enderror
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
  
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
</html>
