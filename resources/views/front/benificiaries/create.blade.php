@extends('layouts.app')
@section('pageTitle', 'Create a new beneficiary / remmiter')
@section('content')
<style type="text/css">
	.error{
		color: #a51010!important;
	}
    .switch input:checked~span:before{
        border: 1px solid #4a99ff;
        background:none;
    }
    .switch input:empty~span:before{
        border: 1px solid #4a99ff;
        background:none;
    }
    .switch input:empty~span:after{
        background-color: #3699ff;
    }
    .select2-container {
        width: 100% !important;
        padding: 0;
    }
</style>
@section('button')
<a href="{{ route('company.benificiaries') }}" class="btn btn-light-primary font-weight-bolder btn-sm">Benificiaries List</a> 
@endsection
<!--begin::Card-->
<div class="card card-custom">
    <div class="card-body p-0">
        <!--begin: Wizard-->
        <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
            <!--begin: Wizard Nav-->
            <div class="wizard-nav border-right py-8 px-8 px-lg-10">
                <!--begin::Wizard Step 1 Nav-->
                <div class="wizard-steps">
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/General/User.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title" style="font-size: 14px;">Create a new beneficiary</h3>
                                <div class="wizard-desc" style="font-size: 14px;">Setup your new beneficiary details</div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
                                            <rect fill="#000000" x="2" y="8" width="20" height="3" />
                                            <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title">Enter bank details</h3>
                                <div class="wizard-desc">Setup the beneficiary bank details</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Wizard Step 1 Nav-->
                </div>
            </div>
            <!--end: Wizard Nav-->
            <!--begin: Wizard Body-->
            <div class="wizard-body py-8 px-8  px-lg-10">
                <!--begin: Wizard Form-->
                <div class="row">
                    <div class="offset-xxl-2 col-xxl-8">
                        <form class="form formsubmit" action="{{ route('company.benificiaries.store') }}" id="kt_form" method="post" autocomplete="off" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @if(isset($benificiary) && !empty($benificiary->id) )
                                    <input type="hidden" name="b_id" value="{{ $benificiary->id }}">
                                @endif
                            <!--begin: Wizard Step 1-->
                            <div class="pb-3" data-wizard-type="step-content" data-wizard-state="current">
                                <h4 class="mb-3 font-weight-bold text-dark">Enter your new beneficiary / remmiter details</h4>
                                
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Name</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="name"  value="@if(!empty($benificiary)){{ $benificiary->name }}@endif" placeholder="Name" maxlength="150"/>
                                            <span class="form-text text-muted">Enter beneficiary name as per bank records</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Nickname</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="nickname" placeholder="Nickname" value="@if(!empty($benificiary)){{ $benificiary->nickname }}@endif"
                                            maxlength="150"   />
                                            <span class="form-text text-muted">Fill in the nickname</span>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>E-mail</b> <span style="color: red">*</span></label>
                                            <input type="email" value="@if(!empty($benificiary)){{ $benificiary->email }}@endif" class="form-control form-control-solid form-control-lg" name="email" autocomplete="none"  placeholder="E-mail" /> 
                                        </div>
                                    </div>
                                     <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>Mobile No.</b> <span style="color: red">*</span></label>
                                            <input type="text" name="mobile_number" class="form-control form-control-solid form-control-lg"  placeholder="Mobile No." autocomplete="none"  value="@if(!empty($benificiary)){{ $benificiary->mobile_number }}@endif"  maxlength="10" />
                                            
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group ">
                                            <label><b>Is a remmiter?</b> <span style="color: red">*</span></label>
                                            <span class="switch">
                                                <label>
                                                    <input type="checkbox" name="is_remitter" @if(!empty($benificiary) && $benificiary->is_remitter == 'yes') checked @endif">
                                                    <span></span>
                                                </label>
                                            </span>
                                           <span class="form-text text-muted">Turn on if the beneficiary is Remitter/Transferor too</span>
                                        </div>
                                    </div>
                                    </div>
                                    <h4 class="mb-3 font-weight-bold text-dark">Enter the beneficiary / remmiter address</h4>
                                    <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Address</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="address" value="@if(!empty($benificiary)){{ $benificiary->address }}@endif" autocomplete="none"  placeholder="Address"  maxlength="150"/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Address 2</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="address2" value="@if(!empty($benificiary)){{ $benificiary->address2 }}@endif" autocomplete="none"  placeholder="Address 2"   maxlength="150"/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Pin</b> <span style="color: red">*</span></label>
                                            <span  style="position: absolute; cursor: pointer; top: 40px;    right: 15px;" class="spinners"></span>
                                            <input type="text" class="form-control form-control-solid form-control-lg pincode_data" name="pin" value="@if(!empty($benificiary)){{ $benificiary->pin }}@endif"   placeholder="Pincode"   autocomplete="none"  maxlength="6"/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Area</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg area_data" name="area" value="@if(!empty($benificiary)){{ $benificiary->area }}@endif" autocomplete="none"   placeholder="Area" maxlength="50"/>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>City</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg city_data" name="city" value="@if(!empty($benificiary)){{ $benificiary->city }}@endif" autocomplete="none"   placeholder="City"  maxlength="50" />
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <!-- <div class="form-group">
                                            <label><b>State</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg state_data" name="states" value="@if(!empty($benificiary)){{ $benificiary->state }}@endif" autocomplete="none"   placeholder="State"   maxlength="50"/>
                                        </div> -->
                                    <div class="form-group">
                                            <label><b>States</b> <span style="color: red">*</span></label>
                                             <select class="form-control states"  name="states">
                                                <option value="">Select a state</option>
                                                    @if(!empty($states))
                                                        @foreach($states as $state)
                                                        <option value="{{ $state->state }}" @if(!empty($benificiary) && $benificiary->state == strtoupper($state->state)) {{ 'selected' }} @endif>{{ strtoupper($state->state) }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            
                                           
                                            <span class="form-text text-muted">select the remmiter's name</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-5" data-wizard-type="step-content">
                                <h4 class="mb-10 font-weight-bold text-dark">Enter the beneficiary bank details</h4>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Account Number <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="account_number" placeholder="Account Number" value="@if(!empty($benificiary)){{ $benificiary->account_number }}@endif" autocomplete="none" maxlength="20"/>
                                            
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>IFSC <span style="color: red">*</span></label>
                                            <span  style="position: absolute; cursor: pointer; top: 40px;    right: 15px;" class="spinners"></span>
                                            <input type="text" class="form-control form-control-solid form-control-lg ifsc" name="ifsc" placeholder="IFSC"  value="@if(!empty($benificiary)){{ $benificiary->ifsc }}@endif" autocomplete="none" maxlength="11"/>
                                            
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Branch Name <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg branch_name" name="branch_name" placeholder="Branch Name" value="@if(!empty($benificiary)){{ $benificiary->branch_name }}@endif" autocomplete="none"  />
                                            
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Bank Name <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg bank_name" name="bank_name" placeholder="Bank Name" value="@if(!empty($benificiary)){{ $benificiary->bank_name }}@endif"
                                              autocomplete="none" />
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Account Type <span style="color: red">*</span></label>
                                            <select class="form-control form-control-solid form-control-lg account_type"  name="account_type">
                                                    <option value="">Select Account Type</option>


                                                    <option value="current" @if(!empty($benificiary->account_type) && $benificiary->account_type == 'current') selected @endif>Current</option>


                                                    <option value="savings" @if(!empty($benificiary->account_type) && $benificiary->account_type == 'savings') selected @endif>Savings</option>
                                                    <option value="overdraft"@if(!empty($benificiary->account_type) && $benificiary->account_type == 'overdraft') selected @endif >Overdraft</option>
                                                    <option value="cash_credit" @if(!empty($benificiary->account_type) && $benificiary->account_type == 'cash_credit') selected @endif >Cash Credit</option>
                                                    <option value="nro" @if(!empty($benificiary->account_type) && $benificiary->account_type == 'nro') selected @endif>NRO</option>
                                                    <option value="nre" @if(!empty($benificiary->account_type) && $benificiary->account_type == 'nre') selected @endif >NRE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                <div class="form-group">
                                   @php
                                   if(!empty($benificiary->check_book_image)){
                                   $image = $benificiary->check_book_image;
                                   }else{
                                   $image = 'bank_check.jpg';
                                   }
                                   @endphp
                                   <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-size: 437px 218px;width: 100%;background-image: url({{ URL::asset('public/images/logo/bank_check.jpg') }})">
                                        <div class="image-input-wrapper" style="background-size: 437px 177px;width: 100%;height: 182px;background-image: url({{ URL::asset('public/images/logo/'.$image) }})"></div>
                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                          <i class="fa fa-pencil icon-sm text-muted"></i>
                                          <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                          <input type="hidden" name="profile_avatar_remove" class="">
                                        </label>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                          <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                        @if(!empty($benificiary->check_book_image))
                                        <span class="profile_remove btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"  id="profile_remove" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                          <i class="ki ki-bold-close icon-xs text-muted" ></i>
                                        </span>
                                        @endif
                                        <input type="hidden" name="profile_deleted" class="profile_deleted" value="0">
                                      </div>
                                </div>
                            </div> 
                            </div>
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit <span class="spinnermm"></span></button> 
                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end: Wizard-->
                </div>
                <!--end: Wizard Form-->
            </div>
            <!--end: Wizard Body-->
        </div>
        <!--end: Wizard-->
    </div>
</div>





<!--end::Card-->


<div class="modal fade add_modal" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">User</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i aria-hidden="true" class="ki ki-close"></i>
			</button>
		</div>
		<div class="modal-body addholidaybody" style="padding: 0px;">
			
		</div>
		
	</div>
    </div>
</div>
<input type="hidden" class="emails" value="{{ implode(',',$emails) }}">
@push('style')
<link href="{{ URL::asset('public/assets/css/pages/wizard/wizard-2afa4.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('script')
<script type="text/javascript" src="https://preview.keenthemes.com/metronic/theme/html/demo13/dist/assets/js/pages/custom/profile/profile.js?v=7.2.0"></script>
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.rtlafa4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.css?v=7.2.0') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.js') }}"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ URL::asset('public/assets/js/pages/crud/forms/widgets/select2afa4.js') }}"></script>
<script src="{{ URL::asset('public/assets/js/pages/crud/forms/widgets/select2afa4.js') }}"></script>
<script type="text/javascript">




$(document).ready(function(){

var emails = $('.emails').val();
var finalemails = emails.split(',');
console.log(finalemails);
$('.account_ype').select2({
 placeholder: "Select Account Type",
 minimumResultsForSearch: -1
});

$('body').on('keyup', '.pincode_data', function () {
    if($(this).val().length > 5) {
        var pincode = $('.pincode_data').val();
        $.ajax({
            url: "{{ route('company.benificiaries.pincode')}}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {pincode: pincode},
            beforeSend: function () {
                    $('.spinners').html('<i class="fa fa-spinner fa-spin"></i>')
            },
            success: function (data) {
                console.log(data.data.district)
                $('.spinners').html('')
                $('.city_data').val(data.data.district);
                $('.area_data').val(data.data.postalLocation);
                $('.states').val(data.data.state);
                //$(".states").select2("val",data.data.state);
                $(".select2-selection__rendered").text(data.data.state);
                //$('select[name^="states"] option[value=GUJARAT]').attr("selected","selected");
            },
        });
    }
    
});
$('body').on('keyup', '.ifsc', function () {
   
        var ifsccode = $('.ifsc').val();
        if($(this).val().length > 10) {
        $.ajax({
            url: "{{ route('company.benificiaries.ifsccode')}}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {ifsccode: ifsccode},
            beforeSend: function () {
                    $('.spinners').html('<i class="fa fa-spinner fa-spin"></i>')
            },
            success: function (data) {
                 console.log(data)
                $('.spinners').html('')
                $('.bank_name').val(data.data.BANK);
                $('.branch_name').val(data.data.BRANCH);
            },
        });
    
    }   
});



$('.states').select2({
     placeholder: "Select a state",
});
"use strict";
var KTWizard3 = function() {
    var e, t, i, a = [];
    return {
        init: function() {
            e = KTUtil.getById("kt_wizard"), t = KTUtil.getById("kt_form"), (i = new KTWizard(e, {
                startStep: 1,
                clickableSteps: !0
            })).on("change", (function(e) {
                if (!(e.getStep() > e.getNewStep())) {
                    var t = a[e.getStep() - 1];
                    return t && t.validate().then((function(t) {
                        "Valid" == t ? (e.goTo(e.getNewStep()), KTUtil.scrollTop()) : Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then((function() {
                            KTUtil.scrollTop()
                        }))
                    })), !1
                }
            })), i.on("changed", (function(e) {
                KTUtil.scrollTop()
            })), i.on("submit", (function(e) {
                var i = a[e.getStep() - 1];
                i && i.validate().then((function(e) {
                    "Valid" == e ? t.submit() : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-light"
                        }
                    }).then((function() {
                        KTUtil.scrollTop()
                    }))
                }))
            })), a.push(FormValidation.formValidation(t, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "First name is required"
                            },
                            stringLength: {
                                max: 150,
                                message: 'The first name must be less than 50 characters'
                            }
                        }
                    },
                    nickname: {
                        validators: {
                            notEmpty: {
                                message: "Last Name is required"
                            },
                            stringLength: {
                                max: 150,
                                message: 'The last name must be less than 50 characters'
                            },
                            callback: {
                                callback: function(input) {
                                   
                                    if(finalemails.includes(input.value)){
                                        return {
                                            valid: false,
                                            message: 'Nickname should be Unique.',
                                        };
                                    } else{
                                        return {
                                            valid: true,
                                            
                                        };
                                    }
                                    
                                    
                                    
                                    
                                }
                            }
                        }
                    },
                    mobile_number   : {
                        validators: {
                            notEmpty: {
                                message: "Mobile No. is required"
                            },
                            numeric: {
                            message: 'The value is not a number',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                        },
                        stringLength: {
                                min: 10,
                                message: 'The mobile number must be 10 characters'
                            },
                        },

                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    },
                    address: {
                        validators: {
                            notEmpty: {
                                message: "Address is required"
                            },
                            stringLength: {
                                max: 150,
                                message: 'The Address must be less than 50 characters'
                            },
                        }
                    },
                    address2: {
                        validators: {
                            notEmpty: {
                                message: "Address2 is required"
                            },
                            stringLength: {
                                max: 150,
                                message: 'The Address1 must be less than 50 characters'
                            },
                        }
                    },
                    area: {
                        validators: {
                            notEmpty: {
                                message: "Area is required"
                            },
                            stringLength: {
                                max: 50,
                                message: 'The Area must be less than 50 characters'
                            },
                        }
                    },
                    states: {
                        validators: {
                            notEmpty: {
                                message: "State is required"
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: "City is required"
                            },
                            stringLength: {
                                max: 50,
                                message: 'The City must be less than 50 characters'
                            },
                        }
                    },
                    pin: {
                        validators: {
                            notEmpty: {
                                message: "Pin is required"
                            },
                            numeric: {
                            message: 'The value is not a number',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                            },
                            stringLength: {
                                    max: 6,
                                    message: 'The Pin must be less than 6 characters'
                                },
                            }
                    },

                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(t, {
                fields: {
                     account_number: {
                        validators: {
                            notEmpty: {
                                message: "Account number is required"
                            },
                            // numeric: {
                            // message: 'The value is not a number',
                            // // The default separators
                            // thousandsSeparator: '',
                            // decimalSeparator: '.'
                            // },
                            regexp: {
                                regexp: /^[a-zA-Z0-9]+$/i,
                                message: 'The Account number can consist of alphabetical characters and numbers'
                            },
                            stringLength: {
                                    max: 20,
                                    message: 'The Account number must be less than 20 characters'
                                },
                            }
                    },
                    ifsc: {
                        validators: {
                            notEmpty: {
                                message: "IFSC is required"
                            },
                            stringLength: {
                                max: 11,
                                message: 'The ifsc must be less than 50 characters'
                            },
                            regexp: {
                                regexp: /^([a-zA-Z]{4}[0]{1}[a-zA-Z0-9]{6})$/,
                                message: 'IFSC must be 11 characters long and 5th digit has to be “0”'
                            }
                        }
                    },
                    branch_name: {
                        validators: {
                            notEmpty: {
                                message: "Branch Name is required"
                            }
                        }
                    },
                    bank_name: {
                        validators: {
                            notEmpty: {
                                message: "Bank Name is required"
                            }
                        }
                    },
                    account_type: {
                        validators: {
                            notEmpty: {
                                message: "Account type is required"
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleValidClass: ""
                    })
                }
            }))
        }
    }
}();
jQuery(document).ready((function() {
    KTWizard3.init()
}));

        /*filter*/
        $('.searchdata').click(function () {
            event.preventDefault();
            $("#employee").DataTable().ajax.reload()
        })
    
        $('body').on('submit', '.formsubmit', function (e) {
           
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                data: new FormData(this),
                type: 'POST',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('.spinnermm').html('<i class="fa fa-spinner fa-spin"></i>')
                },
                success: function (data) {
                   
                    if (data.status == 400) {
                        $('.spinnermm').html('');
                        toastr.error(data.msg)
                    }
                    if (data.status == 200) {
                        $('.spinnermm').html('');
                        $('.bank_name').modal('hide');
                        $('#employee').DataTable().ajax.reload();
                        //toastr.success(data.msg,'Success!')
                    }
                },
            });
        });
       

	})
</script>
@endpush

@endsection