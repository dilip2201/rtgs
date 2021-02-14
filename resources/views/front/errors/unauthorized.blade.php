@extends('layouts.app')
@section('pageTitle', 'Unauthorized')
@section('content')
<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
    <!--begin: Aside Container-->
	<div class="container d-flex flex-row-fluid flex-column justify-content-md-center p-12">
		<i class="icon-xl fas fa-ban" style="font-size: 100px!important;color: #da4040;text-align: center;"></i>
        <h1 style="font-size: 60px; text-align: center;   color: #565656!important;" class="error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12" >Unauthorized Access!</h1>
        <p style="color: #b5a5a5;font-size: 15px!important;text-align: center;" class="font-size-h3"> You can not access this page. <a href="{{ url()->previous() }}" class="text-center f-w-600">Back</a></p>
    </div>
</div>
@endsection