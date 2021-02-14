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
                        <form class="form formsubmit" action="{{ route('company.benificiaries.store') }}" id="kt_form" method="post">
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
                                            <label><b>Name</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="name"  value="@if(!empty($benificiary)){{ $benificiary->name }}@endif" placeholder="Name" />
                                            <span class="form-text text-muted">Fill in the user name and surname.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Nickname</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="nickname" value="@if(!empty($benificiary)){{ $benificiary->nickname }}@endif"   />
                                            <span class="form-text text-muted">Fill in the nickname.</span>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>E-mail</b></label>
                                            <input type="email" value="@if(!empty($benificiary)){{ $benificiary->email }}@endif" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email" />
                                            <span class="form-text text-muted">Fill in the email.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>


                                     <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>Phone No</b></label>
                                            <input type="text" name="mobile_number" class="form-control form-control-solid form-control-lg"  placeholder="Mobile Number" value="@if(!empty($benificiary)){{ $benificiary->mobile_number }}@endif"  />
                                            <span class="form-text text-muted">Enter his phone number.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group ">
                                            <label><b>Is a remmiter?</b></label>
                                            <span class="switch">
                                                <label>
                                                    <input type="checkbox" name="is_remitter" @if(!empty($benificiary) && $benificiary->is_remitter == 'yes') checked @endif">
                                                    <span></span>
                                                </label>
                                            </span>
                                           <span class="form-text text-muted">Turn on if is a beneficiary only.</span>
                                        </div>
                                    </div>
                                    </div>
                                    <h4 class="mb-3 font-weight-bold text-dark">Enter the beneficiary / remmiter address</h4>
                                    <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Address</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="address" value="@if(!empty($benificiary)){{ $benificiary->address }}@endif"   placeholder="Address"  />
                                            <span class="form-text text-muted">Fill in the mail address.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Address 2</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="address2" value="@if(!empty($benificiary)){{ $benificiary->address2 }}@endif"   placeholder="Address 2"   />
                                            <span class="form-text text-muted">Fill in the address details.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Pin</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="pin" value="@if(!empty($benificiary)){{ $benificiary->pin }}@endif"   placeholder="Pincode"   placeholder="Pin" />
                                            <span class="form-text text-muted">Enter the pin.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Area</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="area" value="@if(!empty($benificiary)){{ $benificiary->area }}@endif"  placeholder="Area" />
                                            <span class="form-text text-muted">Fill in the area.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>City</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="city" value="@if(!empty($benificiary)){{ $benificiary->city }}@endif"  placeholder="City"   />
                                            <span class="form-text text-muted">Enter the city.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>State</b></label>
                                             <select class="form-control states"  name="states">
                                                <option value="">Select a State</option>
                                                    @if(!empty($states))
                                                        @foreach($states as $state)
                                                        <option value="{{ $state->id }}" @if(!empty($benificiary) && $benificiary->state == $state->id) selected @endif>{{ $state->state }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            
                                           
                                            <span class="form-text text-muted">select the remmiter's name.</span>
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
                                            <label>Account Number</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="account_number" placeholder="Account Number" value="@if(!empty($benificiary)){{ $benificiary->account_number }}@endif" />
                                            <span class="form-text text-muted">Fill the user's account number</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>IFSC</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="ifsc" placeholder="form"  value="@if(!empty($benificiary)){{ $benificiary->ifsc }}@endif" />
                                            <span class="form-text text-muted">Enter the IFSC number.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Branch Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="branch_name" placeholder="Branch Name" value="@if(!empty($benificiary)){{ $benificiary->branch_name }}@endif"  />
                                            <span class="form-text text-muted">Fill in the user's bank branch name.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Bank Name</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="bank_name" placeholder="Bank Name" value="@if(!empty($benificiary)){{ $benificiary->bank_name }}@endif"  />
                                            <span class="form-text text-muted">Fill in the user's bank name.</span>
                                        </div>
                                        <!--end::Input-->
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
@push('style')
<link href="{{ URL::asset('public/assets/css/pages/wizard/wizard-2afa4.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('script')
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.rtlafa4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.css?v=7.2.0') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.js') }}"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">




$(document).ready(function(){
$('.states').select2({
     placeholder: "Select a beneficiary",
});
"use strict";
var KTWizard2 = function() {
    var t, e, i, r = [];
    return {
        init: function() {
            t = KTUtil.getById("kt_wizard"), e = KTUtil.getById("kt_form"), (i = new KTWizard(t, {
                startStep: 1,
                clickableSteps: !1
            })).on("change", (function(t) {
                if (!(t.getStep() > t.getNewStep())) {
                    var e = r[t.getStep() - 1];
                    return e && e.validate().then((function(e) {
                        "Valid" == e ? (t.goTo(t.getNewStep()), KTUtil.scrollTop()) : Swal.fire({
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
            })), i.on("changed", (function(t) {
                KTUtil.scrollTop()
            })), i.on("submit", (function(t) {
                Swal.fire({
                    text: "All is good! Please confirm the form submission.",
                    icon: "success",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, submit!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-primary",
                        cancelButton: "btn font-weight-bold btn-default"
                    }
                }).then((function(t) {

                    t.value ? e.submit() : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been submitted!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-primary"
                        }
                    })
                    // toastr.success('Success!')
                    // window.location.href = "{{ url('company/benificiaries') }}";
                }))
            })), r.push(FormValidation.formValidation(e, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "First name is required"
                            },
                            stringLength: {
                                max: 150,
                                message: 'The full name must be less than 50 characters'
                            },
                        }
                    },
                    nickname: {
                        validators: {
                            notEmpty: {
                                message: "Last Name is required"
                            },
                            stringLength: {
                                max: 150,
                                message: 'The Nick name must be less than 50 characters'
                            },
                        }
                    },
                    mobile_number   : {
                        validators: {
                            notEmpty: {
                                message: "Phone is required"
                            },
                            numeric: {
                            message: 'The value is not a number',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                        },
                        stringLength: {
                                max: 11,
                                message: 'The Nick name must be less than 11 characters'
                            },
                        }
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
                            },
                            stringLength: {
                                max: 50,
                                message: 'The State must be less than 50 characters'
                            },
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
            })), r.push(FormValidation.formValidation(e, {
                fields: {
                     account_number: {
                        validators: {
                            notEmpty: {
                                message: "Account number is required"
                            },
                            numeric: {
                            message: 'The value is not a number',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
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
                                max: 15,
                                message: 'The ifsc must be less than 50 characters'
                            },
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
    KTWizard2.init()
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
                        $('.add_modal').modal('hide');
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