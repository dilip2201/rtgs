<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8" />
      <title>Login | RTGS</title>
      <meta name="description" content="Login page example" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!--begin::Fonts-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
      <!--end::Fonts-->
      <!--begin::Page Custom Styles(used by this page)-->
      <link rel="stylesheet" href="{{ URL::asset('public/assets/css/pages/login/classic/login-2afa4.css?v=7.2.0') }}">
      <link rel="stylesheet" href="{{ URL::asset('public/assets/plugins/global/plugins.bundleafa4.css?v=7.2.0') }}">
      <link rel="stylesheet" href="{{ URL::asset('public/assets/plugins/custom/prismjs/prismjs.bundleafa4.css?v=7.2.0') }}">
      <link rel="stylesheet" href="{{ URL::asset('public/assets/css/style.bundleafa4.css?v=7.2.0') }}">
      <link rel="icon" href="{{ URL::asset('public/images/logo/favicon.png') }}" type="image/png" sizes="16x16">
      <style type="text/css">
         .error{
            color: #ff7084!important;
         }
      </style>
   </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading" style="width: 100%;">
      <!-- Google Tag Manager (noscript) -->
      <noscript>
         <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
      <!-- End Google Tag Manager (noscript) -->
      <!--begin::Main-->
      <div class="d-flex flex-column flex-root">
         <!--begin::Login-->
         <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10" style="max-width: 63%;">
               <a href="#" class="mb-15 ">
               <img src="{{ URL::asset('public/images/logo/Logo.svg') }}" style="width: 150px;">
               </a>
               <!--begin: Aside Container-->
               <div class="d-flex flex-row-fluid flex-column justify-content-between">
                  <!--begin::Aside body-->
                  <div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
                     <!--begin::Signin-->
                     <div class="login-form login-signin">
                        <div class=" mb-5 mb-lg-10">
                           <h2 class="font-weight-bold" style="font-weight: 600; font-size: 34px;">Forgot Password?</h2>
                           <p class="text-muted font-weight-bold">Enter the email address associated with your account.</p>
                        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-success" style="background-color: snow;    border-color: #4a99ff;    color: #4a99ff;">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}" id="signup" >
                           @csrf
                           <div class="form-group py-3 m-0">
                              <label style="color: #b5b5c3!important">Your Email</label>
                              <input id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }} form-control h-auto border-0 px-0 placeholder-dark-75" type="Email" placeholder="Email" name="email" autocomplete="off"  required="" />
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                           </div>
                           
                           <div class="form-group flex-wrap justify-content-between align-items-center mt-2" style="text-align: right;  width: 100%;">
                             
                              <a href="{{ url('login')}}" id="kt_login_forgot" class=" text-hover-primary" style="float: right; text-align: right;">Login ?</a>
                           </div>
                           <div class="form-group  flex-wrap justify-content-between align-items-center mt-2">
                             
                              <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold py-4 my-3" style="width: 100%;">Sign In</button>
                           </div>
                        </form>

                     </div>
                     
                  </div>
                  
               </div>
               <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url({{ URL::asset('public/images/logo/right-side-login.png') }}); background-repeat: no-repeat, repeat; background-size: contain;">
            </div>
            <!--end::Content-->
         </div>
         <!--end::Login-->
      </div>
      <!--end::Main-->
      <!--end::Global Config-->
      <!--begin::Global Theme Bundle(used by all pages)-->
   </body>
   <!--end::Body-->
   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
   <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script type="text/javascript">
      $("#signup").validate({
                 rules: {      
                     email: {
                         required: true,
                         email: true
                     },
                 },
                 messages: {
                    email: "Please enter your email addres",
                     
                 }
             });
   </script>
   <!-- Mirrored from preview.keenthemes.com/metronic/demo13/custom/pages/login/classic/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 11:59:29 GMT -->
</html>