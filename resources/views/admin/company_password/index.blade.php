<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8" />
      <title>Set Password | RTGS</title>
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
                           <h2 class="font-weight-bold" style="font-weight: 600; font-size: 34px;">Set Password</h2>
                           <p class="text-muted font-weight-bold">Set the password to login with system!</p>
                        </div>
                        <form method="POST" action="{{ route('setnewpassword') }}" id="resetpassform" >
                           @csrf
                           <input type="hidden" name="token" value="{{ $token }}">
                           <div class="form-group py-3 m-0" style="position: relative;">
                              <label style="color: #b5b5c3!important">Password</label>
                              <input id="password_co" type="password" class="form-control h-auto border-0 px-0 placeholder-dark-75" name="password" placeholder="Password" required="">
                              <span toggle="#password-co" style="position: absolute; cursor: pointer; top: 46px;    right: 15px;" class="fa fa-fw fa-eye field_icon password-co"></span>
                              @error('password')
                               <span role="alert" class="colorwhite"
                                   style="color: #fff;margin-bottom: 15px; margin-left: 15px; float: left; width: 100%;">{{ $message }}</span>
                               @enderror
                           </div>
                           <div class="form-group py-3 border-top m-0" style="position: relative;">
                             
                              <label style="color: #b5b5c3!important">Confirm Password</label>
                              <input id="password_confirmation" style="    border-bottom: 1px solid #ccc!important;" type="password" class="form-control h-auto border-0 px-0 placeholder-dark-75" name="password_confirmation" placeholder="Confirm Password" required="">
                             <span toggle="#password-field" style="position: absolute; cursor: pointer; top: 46px;    right: 15px;" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                           </div>
                           <div class="form-group flex-wrap justify-content-between align-items-center mt-2" style="text-align: right;  width: 100%;">
                             
                              <a href="{{ url('login') }}" id="kt_login_forgot" class=" text-hover-primary" style="float: right; text-align: right;">Login?</a>
                           </div>
                           <div class="form-group  flex-wrap justify-content-between align-items-center mt-2">
                             
                              <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold py-4 my-3" style="width: 100%;">Reset Password</button>
                           </div>
                        </form>
                        <!--end::Form-->
                     </div>
                     <!--end::Signin-->
                     <!--begin::Signup-->
                    
                     <!--end::Signup-->
                     <!--begin::Forgot-->
                     
                     <!--end::Forgot-->
                  </div>
                  <!--end::Aside body-->
                  <!--begin: Aside footer for desktop-->
                  <!--end: Aside footer for desktop-->
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
        $(document).ready(function () {
          $(document).on('click', '.password-co', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#password_co");
            input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
          });


          $(document).on('click', '.toggle-password', function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#password_confirmation");
            input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
          });

          $("#resetpassform").validate({
                 rules: {
                     
                     password: {
                         required: true,
                         minlength: 6
                     },
                     password_confirmation: {
                         required: true,
                         minlength: 6,
                         equalTo: "#password_co"
                     },
                     email: {
                         required: true,
                         email: true
                     },
      
                     agree: "required"
                 },
                 messages: {
                    
                     email: "Please enter valid email address.",
                     password: {
                         required: "Please provide a password.",
                         minlength: "Your password must be at least 6 characters long."
                     },
                     password_confirmation: {
                         required: "Please provide Confirm Password a password.",
                         minlength: "Your password must be at least 6 characters long.",
                         equalTo: "Password and Confirm new password do not match."
                     },
                     email: "Please enter a valid email address.",
                   
                 }
             });


    });
   </script>
   <!-- Mirrored from preview.keenthemes.com/metronic/demo13/custom/pages/login/classic/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 11:59:29 GMT -->
</html>