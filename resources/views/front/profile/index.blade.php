@extends('layouts.app')
@section('pageTitle', 'Profile')
@section('content')
<style type="text/css">
   .error{
      color:red!important;
   }
</style>
<div class="row">
   <div class="col-md-4">
      <div class="flex-row-auto offcanvas-mobile" id="kt_profile_aside">
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
               @php
               if(!empty(auth()->user()->image)){
               $image = auth()->user()->image;
               }else{
               $image = 'default.png';
               }
               @endphp
               <div class="text-center">
                  <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                     <div class="symbol-label" style="background-image: url({{ URL::asset('public/company/employee/'.$image) }})"></div>
                     <i class="symbol-badge symbol-badge-bottom bg-success"></i>
                  </div>
                  <h4 class="font-weight-bold my-2">{{ Auth::user()->c_name}}</h4>
                  <div class="text-muted mb-2" style="    padding-bottom: 10px;
                     border-bottom: 1px solid #ccc;">{{ Auth::user()->name}}</div>
                  @php
                  if(Auth::user()->status == 1){
                  $status = "Enable";
                  }else{
                  $status = "Disable";
                  }
                  @endphp
                  <!--end::User-->
                  <!--begin::Contact-->
                  <div class="pt-8 pb-6">
                     <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">Email:</span>
                        <a href="#" class="text-muted text-hover-primary">{{ Auth::user()->email }}</a>
                     </div>
                     <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">Phone:</span>
                        <span class="text-muted">{{ Auth::user()->phone ?? '' }}</span>
                     </div>
                     <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="font-weight-bold mr-2">Status:</span>
                        <span class="label label-light-warning label-inline font-weight-bold label-lg">{{ $status }}</span>
                     </div>
                  </div>
                  <!--                   <div class="d-flex align-items-center justify-content-between">
                     <span class="font-weight-bold mr-2">Location:</span>
                     <span class="text-muted">Melbourne</span>
                     </div> -->
               </div>
               <!--end::Contact-->
               <!--begin::Contact-->
               <!--end::Contact-->
               <!--          <a href="#" class="btn btn-light-success font-weight-bold py-3 px-6 mb-2 text-center btn-block">Profile Overview</a> -->
            </div>
            <!--end::Body-->
         </div>
      </div>
   </div>
   <div class="col-md-8">
      <div class="example mb-10">
         <div class="example-preview" style="background-color: white;">
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
                  <form class="form-some-up form-block formsubmit" role="form"
                     action="{{ route('profileupdt') }}" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <!--begin::Body-->
                     <div class="card-body">
                        <div class="form-group row">
                           <label class="col-md-2 col-form-label">Name</label>
                           <div class="col-md-4">
                              <input name="name" class="form-control form-control-lg form-control-solid" placeholder="Name" type="text" value="{{ Auth::user()->name }}">
                           </div>
                           <label class="col-md-2 col-form-label">Phone</label>
                           <div class="col-md-4">
                              <input name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone" type="text" value="{{ Auth::user()->phone }}">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-md-2 col-form-label">Email</label>
                           <div class="col-md-4">
                              <input name="email" class="form-control form-control-lg form-control-solid" type="text" value="{{ Auth::user()->email }}" disabled="">
                           </div>
                           @php
                           if(!empty(auth()->user()->image)){
                           $image = auth()->user()->image;
                           }else{
                           $image = 'default.png';
                           }
                           @endphp
                           <label class="col-xl-2 col-lg-2 col-form-label">Profile Picture</label>
<!--                            <div class="col-md-4">
                              <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{ URL::asset('public/admin/company/employee/'.$image) }})">
                                 <div class="image-input-wrapper" style="background-image: url({{ URL::asset('public/company/employee/'.$image) }})"></div>
                                 <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                 <i class="fa fa-pen icon-sm text-muted"></i>
                                 <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                 <input type="hidden" name="profile_avatar_remove">
                                 </label>
                                 <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                 <i class="ki ki-bold-close icon-xs text-muted"></i>
                                 </span>
                              </div>
                              <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                           </div> -->
                           <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{ URL::asset('public/company/employee/default.png') }})">
                                <div class="image-input-wrapper" style="background-image: url({{ URL::asset('public/\/company/employee/'.$image) }})"></div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                  <i class="fa fa-pen icon-sm text-muted"></i>
                                  <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                  <input type="hidden" name="profile_avatar_remove" class="">
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                                @if(!empty(Auth::user()->image))
                                <span class="profile_remove btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"  id="profile_remove" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                  <i class="ki ki-bold-close icon-xs text-muted" ></i>
                                </span>
                                @endif
                              </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-success mr-2">Save Changes<span class="spinner1"></span></button>
                     <!--end::Body-->
                  </form>
               </div>
               <div class="tab-pane fade" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                  <form action=" {{ route('changepswrd') }}" class="passwordformsubmit"
                     method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="card-body">
                        <!--begin::Alert-->
                        <!--end::Alert-->
                        <div class="form-group row" style="position: relative;">
                           <label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
                           <div class="col-lg-9 col-xl-6" >
                              <input type="password" name="current_password" class="form-control form-control-lg form-control-solid mb-2" id="old_pw" value="" placeholder="Current password" required="">
                               <span toggle="#password-field" style="position: absolute; cursor: pointer; top: 17px;    right: 27px;" class="fa fa-fw fa-eye field_icon toggle-passwordo"></span>
                           </div>
                        </div>
                        <div class="form-group row" style="position: relative;">
                           <label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
                           <div class="col-lg-9 col-xl-6">
                              <input type="password" name="new_password" class="form-control form-control-lg form-control-solid new_password" id="new_password" value="" placeholder="New password" required=>
                              <span toggle="#password-field" style="position: absolute; cursor: pointer; top: 17px;    right: 27px;" class="fa fa-fw fa-eye field_icon toggle-passwords"></span>
                           </div>
                        </div>
                        <div class="form-group row" style="position: relative;">
                           <label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
                           <div class="col-lg-9 col-xl-6">
                              <input type="password" id="password_confirmation"    name="password_confirmation" class="form-control form-control-lg form-control-solid password_confirmation" value="" placeholder="Verify password"  required="">
                               <span toggle="#password-field" style="position: absolute; cursor: pointer; top: 17px;    right: 27px;" class="fa fa-fw fa-eye field_icon toggle-password"></span>
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
<script type="text/javascript" src="https://preview.keenthemes.com/metronic/theme/html/demo13/dist/assets/js/pages/custom/profile/profile.js?v=7.2.0"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
   $( document ).ready(function() {
      $(document).on('click', '.toggle-passwordo', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
    
        var input = $("#old_pw");
          input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });
      $(document).on('click', '.toggle-passwords', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
    
        var input = $("#new_password");
          input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });
   	  $(document).on('click', '.toggle-password', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
    
        var input = $("#password_confirmation");
          input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
        });
       $(".passwordformsubmit").validate({
       rules : {
               new_password : {
                   minlength : 6
               },
               password_confirmation : {
                   minlength : 6,
                   equalTo : '#new_password',
               }
           },
           messages: {
                new_password: "Please enter at least 6 characters.",
                password_confirmation: "New password and Confirm new password do not match"
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

        $('body').on('click', '#profile_remove', function (e) {
         var id = $(this).data('id');
            e.preventDefault();
            $.ajax({
                    url: '{{ route("remove_profile") }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {id: id},
                    success: function (data) {
                        
                    },
                    error: function () {
                        toastr.error('Something went wrong!', 'Oh No!');

                    }
            });
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
               $('.spinner1').html('<i class="fa fa-spinner fa-spin"></i>')
           },
           success: function(data) {
   
               if (data.status == 400) {
                   $('.spinner1').html('<i class="fa fa-spinner fa-spin"></i>');
                   toastr.error(data.msg)
               }
               if (data.status == 200) {
   
                   $('.spinner1').html('');
                   location.reload();
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
                //$(".passwordspinner").addClass("spinner");
           },
           success: function(data) {
               if (data.status == 400) {
                   $('.passwordspinner').remove('');
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