@extends('layouts.app')
@section('pageTitle', 'Create a new form')
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
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"></path>
                                            <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title" style="font-size: 14px;">Create form</h3>
                                <div class="wizard-desc" style="font-size: 14px;">Setup the form details</div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000"></path>
                                            <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1"></rect>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title">Review & confirm</h3>
                                <div class="wizard-desc">Review and confirm your form</div>
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
                        <form class="form formsubmit" action="{{ route('company.form.store') }}" id="kt_form" method="post">
                                {{ csrf_field() }}
                                @if(isset($user) && !empty($user->id) )
                                    <input type="hidden" name="transaction_id" value="{{ encrypt($transaction->id) }}">
                                @endif
                            <!--begin: Wizard Step 1-->
                            <div class="pb-3" data-wizard-type="step-content" data-wizard-state="current">
                                <h4 class="mb-3 font-weight-bold text-dark">Enter the remmiter's details</h4>
                                
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Remmiter</b></label>
                                             <select class="form-control remmiter"  name="remmiter_id">
                                                <option value="">Select a Remmiter</option>
                                                    @if(!empty($remmiters))
                                                        @foreach($remmiters as $remmiter)
                                                        <option value="{{ $remmiter->id }}">{{ $remmiter->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            
                                           
                                            <span class="form-text text-muted">select the remmiter's name.</span>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-3 font-weight-bold text-dark">Enter the benificiary's details</h4>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>Beneficiary</b></label>
                                            <div class="form-group ">
                                                <select class="form-control benificiaries"  name="beneficiary_id">
                                                    <option value="">Select a Beneficiary</option>
                                                    @if(!empty($benificiaries))
                                                        @foreach($benificiaries as $benificiary)
                                                        <option value="{{ $benificiary->id }}">{{ $benificiary->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Input-->
                                    </div>


                                     <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <a style="margin-top: 25px;" href="{{ route('company.benificiaries.create') }}" class="btn btn-primary font-weight-bolder"><i class="la la-plus"></i>New Benificiaries</a>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    
                                    </div>
                                    <h4 class="mb-3 font-weight-bold text-dark">Enter the transaction's details</h4>
                                    <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Amount</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg amount" name="amount" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="Amount" value="" required />
                                            <span class="form-text text-muted">Fill in the amount to be transferred.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Cheque No</b></label>
                                            <input type="text" maxlength="6" class="form-control form-control-solid form-control-lg cheque_number" name="cheque_number"  placeholder="Cheque No" value="" required />
                                            <span class="form-text text-muted">Fill in the cheque number</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Transaction method</b></label>
                                            <div class="radio-inline">
                                                            <label class="radio">
                                                            <input type="radio" class="transaction_method" name="transaction_method" checked="" value="neft" />
                                                            <span></span>NEFT</label>
                                                            <label class="radio">
                                                            <input type="radio" value="rtgs" class="transaction_method" name="transaction_method" />
                                                            <span></span>RTGS</label>
                                                           
                                                        </div>
                                            <span class="form-text text-muted">Select the mode.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Date</b></label>
                                            <input type="date" class="form-control form-control-solid form-control-lg transaction_date" name="transaction_date" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="Date" value="" required />
                                            <span class="form-text text-muted">Edit the date if neccessary.</span>
                                        </div>
                                    </div>
                                    </div>
                                   
                            </div>
                            <div class="pb-5" data-wizard-type="step-content">
                                <h4 class="mb-5 font-weight-bold text-dark" >Review & confirm</h4>
                                <h4 data-wizard-type="action-prev" class="mb-5 font-weight-bold text-dark" style="cursor: pointer; color: #3699ff!important;"><i class="flaticon2-left-arrow-1" style="color: #3699ff!important; margin-right: 10px;"></i>Back and edit</h4>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <!--begin::Input-->
                                        <div class="form-group benificiary_detail" >
                                            
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-4">
                                        <!--begin::Input-->
                                        <div class="form-group remmiter_detail">
                                            
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-4">
                                        <!--begin::Input-->
                                        <div class="form-group transaction_detail">
                                            <label><b style="color: #000; font-size: 14px;">Transaction details</b></label><br>
                                            <span class="benificiary_name" style="color: #9f9f9f;">HBCS</span><br>
                                            <span class="cheque_number_class" style="color: #9f9f9f;">31-343456677878</span><br>
                                            <span class="amount_class" style="color: #9f9f9f;">1200$</span><br>
                                            <span class="transaction_mode_class" style="color: #9f9f9f;">NEFT</span><br>
                                            <span class="date_class" style="color: #9f9f9f;">31/01/201</span><br>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea required="" class="form-control form-control-solid form-control-lg" name="remarks"></textarea>
                                            <span class="form-text text-muted">Add any remark to be kept.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4 clicknext" data-wizard-type="action-next">Next</button>
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


<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script src="{{ URL::asset('public/assets/js/pages/crud/forms/widgets/select2afa4.js') }}"></script>
<script type="text/javascript">
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
                    remmiter_id: {
                        validators: {
                            notEmpty: {
                                message: "Select at least one Remmiter."
                            }
                        }
                    },
                    beneficiary_id: {
                        validators: {
                            notEmpty: {
                                message: "Select at least one Beneficiary."
                            }
                        }
                    },
                    amount: {
                        validators: {
                            notEmpty: {
                                message: "Amount field is required."
                            },
                            numeric : {
                                message: 'The value is not a number',
                                thousandsSeparator: '',
                                decimalSeparator: '.'
                            }
                        }
                    },
                    cheque_number: {
                        validators: {
                            notEmpty: {
                                message: "Cheque No is required"
                            },
                            numeric : {
                                message: 'The value is not a number',
                            }
                        }
                    },
                    transaction_date: {
                        validators: {
                            notEmpty: {
                                message: "date is required"
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
                    remarks: {
                        validators: {
                            notEmpty: {
                                message: "Account number is required"
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
            }))
        }
    }
    }();
    jQuery(document).ready((function() {
        KTWizard2.init()
    }));
	$(document).ready(function(){
    
        $('.benificiaries').select2({
             placeholder: "Select a beneficiary",
        });

        $('.remmiter').select2({
             placeholder: "Select a remmiter",
        });

        $('body').on('change','.remmiter',function(){
            var remmiter = $(this).val();
            $.ajax({
                url: '{{ route("company.form.getdata") }}',
                type: 'POST',
                data:{remmiter:remmiter},
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function () {
                },
                success: function (data) {
                    $('.remmiter_detail').html(data);
                },
                error: function () {
                    toastr.error('Something went wrong!', 'Oh No!');
                }
            });
        })

        $('body').on('keyup','.amount',function(){
            var amount = $(this).val();
            $('.amount_class').text(amount)

            var method = $('.transaction_method:checked').val();
            if(method == 'neft'){
                $('.transaction_mode_class').text('NEFT');
            }else{
                $('.transaction_mode_class').text('RTGS');
            }

        });
        $('body').on('change','.transaction_date',function(){
            var transaction_date = $(this).val();
            $('.date_class').text(transaction_date)
            var method = $('.transaction_method:checked').val();
            if(method == 'neft'){
                $('.transaction_mode_class').text('NEFT');
            }else{
                $('.transaction_mode_class').text('RTGS');
            }

        });

        $('body').on('change','.transaction_method',function(){
            var method = $('.transaction_method:checked').val();
            
            if(method == 'neft'){
                $('.transaction_mode_class').text('NEFT');
            }else{
                $('.transaction_mode_class').text('RTGS');
            }

        });

        $('body').on('keyup','.cheque_number',function(){
            var cheque_number = $(this).val();
            $('.cheque_number_class').text(cheque_number)
            var method = $('.transaction_method:checked').val();
            if(method == 'neft'){
                $('.transaction_mode_class').text('NEFT');
            }else{
                $('.transaction_mode_class').text('RTGS');
            }

        });
        $('body').on('change','.benificiaries',function(){
            var benificiaries = $(this).val();
            $.ajax({
                url: '{{ route("company.form.getdatabenificiaries") }}',
                type: 'POST',
                data:{benificiaries:benificiaries},
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function () {
                },
                success: function (data) {
                    $('.benificiary_detail').html(data);
                },
                error: function () {
                    toastr.error('Something went wrong!', 'Oh No!');
                }
            });
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