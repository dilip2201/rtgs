@extends('layouts.app')
@section('pageTitle', 'Profile')
@section('content')
<div class="row">
	<div class="col-md-4">
<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end">
													<div class="dropdown dropdown-inline">
														
														<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" style="">
															<!--begin::Navigation-->
															<ul class="navi navi-hover py-5">
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
																		<span class="navi-text">New Group</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
																		<span class="navi-text">Contacts</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
																		<span class="navi-text">Groups</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Calls</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
																		<span class="navi-text">Settings</span>
																	</a>
																</li>
																<li class="navi-separator my-3"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
																		<span class="navi-text">Help</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
																		<span class="navi-text">Privacy</span>
																		<span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
																	</a>
																</li>
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
												<!--end::Toolbar-->
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
														<div class="symbol-label" style="background-image:url('/metronic/theme/html/demo13/dist/assets/media/users/300_13.jpg')"></div>
														<i class="symbol-badge bg-success"></i>
													</div>
													<div>
														<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
														<div class="text-muted">Application Developer</div>
														<div class="mt-2">
															<a href="#" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Chat</a>
															<a href="#" class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">Follow</a>
														</div>
													</div>
												</div>
												<!--end::User-->
												<!--begin::Contact-->
												<div class="pt-8 pb-6">
													<div class="d-flex align-items-center justify-content-between mb-2">
														<span class="font-weight-bold mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary">matt@fifestudios.com</a>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-2">
														<span class="font-weight-bold mr-2">Phone:</span>
														<span class="text-muted">44(76)34254578</span>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<span class="font-weight-bold mr-2">Location:</span>
														<span class="text-muted">Melbourne</span>
													</div>
												</div>
												<!--end::Contact-->
												<!--begin::Contact-->
												<div class="pb-6">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</div>
												<!--end::Contact-->
												<a href="#" class="btn btn-light-success font-weight-bold py-3 px-6 mb-2 text-center btn-block">Profile Overview</a>
											</div>
											<!--end::Body-->
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="example mb-10">
													
													<div class="example-preview">
														<ul class="nav nav-success nav-pills" id="myTab2" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" id="home-tab-2" data-toggle="tab" href="#home-2">
																	<span class="nav-icon">
																		<i class="flaticon2-chat-1"></i>
																	</span>
																	<span class="nav-text">Profile</span>
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="profile-tab-2" data-toggle="tab" href="#profile-2" aria-controls="profile">
																	<span class="nav-icon">
																		<i class="flaticon2-layers-1"></i>
																	</span>
																	<span class="nav-text">Chnage password</span>
																</a>
															</li>

															
														</ul>
														<div class="tab-content mt-5" id="myTabContent2">
															<div class="tab-pane fade active show" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
				 <form class="form-some-up form-block passwordformsubmit" role="form"
                                    action="{{ route('profileupdt') }}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
												<!--begin::Body-->
												<div class="card-body">
													<div class="row">
														<label class="col-xl-3"></label>
														<div class="col-lg-9 col-xl-6">
															<h5 class="font-weight-bold mb-6">Customer Info</h5>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
														<div class="col-lg-9 col-xl-6">
															<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/metronic/theme/html/demo13/dist/assets/media/users/blank.png)">
																<div class="image-input-wrapper" style="background-image: url(/metronic/theme/html/demo13/dist/assets/media/users/300_21.jpg)"></div>
																<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
																	<i class="fa fa-pen icon-sm text-muted"></i>
																	<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
																	<input type="hidden" name="profile_avatar_remove">
																</label>
																<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
																<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
															</div>
															<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="text" value="Nick">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="text" value="Bold">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Company Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="text" value="Loop Inc.">
															<span class="form-text text-muted">If you want your invoices addressed to a company. Leave blank to use your full name.</span>
														</div>
													</div>
													<div class="row">
														<label class="col-xl-3"></label>
														<div class="col-lg-9 col-xl-6">
															<h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
														<div class="col-lg-9 col-xl-6">
															<div class="input-group input-group-lg input-group-solid">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-phone"></i>
																	</span>
																</div>
																<input type="text" class="form-control form-control-lg form-control-solid" value="+35278953712" placeholder="Phone">
															</div>
															<span class="form-text text-muted">We'll never share your email with anyone else.</span>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
														<div class="col-lg-9 col-xl-6">
															<div class="input-group input-group-lg input-group-solid">
																<div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-at"></i>
																	</span>
																</div>
																<input type="text" class="form-control form-control-lg form-control-solid" value="nick.bold@loop.com" placeholder="Email">
															</div>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
														<div class="col-lg-9 col-xl-6">
															<div class="input-group input-group-lg input-group-solid">
																<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="loop">
																<div class="input-group-append">
																	<span class="input-group-text">.com</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											<button type="submit" class="btn btn-success mr-2">Save Changes<span class="spinner"></span></button>
												<!--end::Body-->
											</form>
															</div>
															<div class="tab-pane fade" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
												 <form action=" {{ route('changepswrd') }}" class="formsubmit"
                                                method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}







												<div class="card-body">
													<!--begin::Alert-->
													
													<!--end::Alert-->
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
														<div class="col-lg-9 col-xl-6">
															<input type="password" name="current_password" class="form-control form-control-lg form-control-solid mb-2" value="" placeholder="Current password" required="">
															
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
														<div class="col-lg-9 col-xl-6">
															<input type="password" name="new_password" class="form-control form-control-lg form-control-solid new_password" id="new_password" value="" placeholder="New password" required="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
														<div class="col-lg-9 col-xl-6">
															<input type="password" id="password_confirmation"    name="password_confirmation" class="form-control form-control-lg form-control-solid password_confirmation" value="" placeholder="Verify password"  required="">
														</div>
													</div>
												</div>
												<button type="submit" class="btn btn-success mr-2">Save Changes<span class="passwordspinner"></span></button>
											</form>

										</div>
															<div class="tab-pane fade" id="contact-2" role="tabpanel" aria-labelledby="contact-tab-2">Tab content 3</div>
														</div>
													</div>

												</div>
								</div>
							</div>

@push('script')
							  
   <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
							<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<script type="text/javascript" src="https://preview.keenthemes.com/metronic/theme/html/demo13/dist/assets/js/pages/custom/profile/profile.js?v=7.2.0"></script>
<script type="text/javascript">


$( document ).ready(function() {
	
    $(".passwordformsubmit").validate({
    rules : {
            new_password : {
                minlength : 8
            },
            password_confirmation : {
                minlength : 8,
                equalTo : '[name="new_password"]'
            }
        }
});
});
$(".formsubmit").validate({
    rules: {
        name : {
            required:true,
            maxlength: 20,
        },
        lastname:{
            required:true,
            maxlength: 20,
        },
        phone: {
            required:true,
            number: true,
            maxlength: 10,
            minlength: 10,

        }
    }

});

$('body').on('submit', '.formsubmit', function(e) {
   
    e.preventDefault();
    $.ajax({
        url: $(this).attr('action'),
        data: new FormData(this),
        type: 'POST',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('.spinner').html('<i class="fa fa-spinner fa-spin"></i>')
        },
        success: function(data) {

            if (data.status == 400) {
                $('.spinner').html('');
                toastr.error(data.msg)
            }
            if (data.status == 200) {

                $('.spinner').html('');
                toastr.success(data.msg)
            }
        },
    });
});
/*change password*/
$('body').on('submit', '.passwordformsubmit', function(e) {
    e.preventDefault();
    $.ajax({
        url: $(this).attr('action'),
        data: new FormData(this),
        type: 'POST',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('.passwordspinner').html('<i class="fa fa-spinner fa-spin"></i>')
        },
        success: function(data) {
            if (data.status == 400) {
                $('.passwordspinner').html('');
                toastr.error(data.msg)

            }
            if (data.status == 200) {
                $('.passwordspinner').html('');
                $(".passwordformsubmit")[0].reset();
                toastr.success(data.msg)
            }
        },
    });
});

/***********setting*********/
$('body').on('submit', '.settiingsubmitform', function(e) {
    e.preventDefault();
    $.ajax({
        url: $(this).attr('action'),
        data: new FormData(this),
        type: 'POST',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
            $('.spinner').html('<i class="fa fa-spinner fa-spin"></i>');
            $('.submitbutton').prop("disabled", true);

        },
        success: function(data) {

            $('.submitbutton').prop("disabled", false);
            if (data.status == 400) {
                $('.spinner').html('');
                toastr.error(data.msg, 'Oh No!');
            }
            if (data.status == 200) {
                $('.spinner').html('');

                toastr.success(data.msg, 'Success!');
            }

        },
    });

});
</script>
@endpush
@endsection
