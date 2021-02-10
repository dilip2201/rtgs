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
<div class="container d-flex flex-row-fluid flex-column justify-content-md-center p-12">
                    <h1 style="font-size: 150px;    color: #565656!important;" class="error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12">Oops!</h1>
                    <p style="color: #b5a5a5;font-size: 15px!important;" class="font-size-h3"> Your Password Setup Token is invalid. Please Generate new one and try again. <a href="{{ route('login') }}" class="text-center f-w-600">Login</a></p>
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
                     firstname: "required",
                     email: "required",
                     address1: "required",
                     city: "required",
                     county: "required",
                     postcode: "required",
      
                     password_s: {
                         required: true,
                         minlength: 5
                     },
                     password_s_con: {
                         required: true,
                         minlength: 5,
                         equalTo: "#password_s"
                     },
                     email: {
                         required: true,
                         email: true
                     },
      
                     agree: "required"
                 },
                 messages: {
                     firstname: "Please enter your first name",
                     lastname: "Please enter your last name",
                     email: "Please enter your addres",
                     city: "Please enter your city/town",
                     county: "Please enter your county",
                     postcode: "Please enter your postcode",
      
                     password: {
                         required: "Please provide a password",
                         minlength: "Your password must be at least 5 characters long"
                     },
                     confirm_password: {
                         required: "Please provide a password",
                         minlength: "Your password must be at least 5 characters long",
                         equalTo: "Please enter the same password as above"
                     },
                     email: "Please enter a valid email address",
                     agree: "Please accept our policy"
                 }
             });
   </script>
   <!-- Mirrored from preview.keenthemes.com/metronic/demo13/custom/pages/login/classic/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 11:59:29 GMT -->
</html>