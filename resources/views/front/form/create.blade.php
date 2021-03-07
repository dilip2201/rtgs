@extends('layouts.app')
@section('pageTitle', 'Create a new form')
@section('content')


<!--begin::Card-->
<div class="card card-custom">.
      
    <div class="card-body p-0"  style="padding-top: 30px!important; padding-bottom: 30px!important">
        <!--begin: Wizard-->
        <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
            <!--begin: Wizard Nav-->
            <div class="wizard-nav border-right py-6 px-6 px-lg-6" style="padding-right: 32px!important;">
                <!--begin::Wizard Step 1 Nav-->
                <div class="wizard-steps">
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon" style="font-size: 25px;   line-height: 43px;">
                                <span class="number" style="padding: 9px 19px;    border-radius: 50%;     font-size: 18px;">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/General/User.svg-->
                                    1
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title" style="font-size: 14px; ">Create form</h3>
                                <div class="wizard-desc" style="font-size: 14px; ">Setup the form details</div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                 <span class="number" style="padding: 9px 17px;    border-radius: 50%;       font-size: 18px;    color: #fff;">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/General/User.svg-->
                                    2
                                    <!--end::Svg Icon-->
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
            <div class="wizard-body py-6 px-6  px-lg-6" style="padding-right: 32px!important;">
                <!--begin: Wizard Form-->
                <div class="row">
                    <div class="offset-xxl-2 col-xxl-8">
                        <form class="form formsubmit" action="{{ route('company.form.store') }}" id="kt_form" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="type" value="{{$type}}">
                                
                                <input type="hidden" name="transaction_id" value="@if(!empty($transaction)) {{ encrypt($transaction->id) }} @endif">
                                
                            <!--begin: Wizard Step 1-->
                            <div class="pb-3" data-wizard-type="step-content" data-wizard-state="current">
                                
                                
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b class="clrblck">Remitter / Transferor</b> <span style="color: red">*</span></label>
                                             <select class="form-control remmiter remmiter_id"  name="remmiter_id">
                                                <option value="">Select a Remmiter</option>
                                                    @if(!empty($remmiters))
                                                        @foreach($remmiters as $remmiter)
                                                        <option value="{{ $remmiter->id }}" @if(!empty($transaction) && $transaction->remmiter_id == $remmiter->id) {{ 'selected' }} @endif>{{ $remmiter->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="loadbanificiaty" style="display: none;">
                                    <option value="">Select a Beneficiary</option>
                                        @if(!empty($benificiaries))
                                            @foreach($benificiaries as $benificiary)
                                            <option value="{{ $benificiary->id }}" >{{ $benificiary->nickname }}</option>
                                            @endforeach
                                        @endif
                                </div>
                                <div class="row benificiariesrow">
                                    @if(empty($transaction))
                                    <div class="remove1" style="width:100%; float:left;">
                                        <div class="col-xl-4" style="float: left;">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label><b class="clrblck">Beneficiary 1</b> <span style="color: red">*</span></label>
                                                <div class="form-group ">
                                                    <select class="form-control benificiaries beneficiary_id"  name="beni[1][benificiar]">
                                                        <option value="">Select a Beneficiary</option>
                                                        @if(!empty($benificiaries))
                                                            @foreach($benificiaries as $benificiary)
                                                            <option value="{{ $benificiary->id }}" >{{ $benificiary->nickname }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                        </div>


                                        <div class="col-xl-4" style="float: left;">
                                            
                                            <div class="form-group">
                                              <label><b class="clrblck">Amount 1</b> <span style="color: red">*</span></label>
                                                <input type="text" class="form-control form-control-solid form-control-lg culculateamount" maxlength="10" name="beni[1][amount]" placeholder="Amount"  required />
                                                
                                            </div>
                                            
                                        </div>

                                         <div class="col-xl-4" style="float: left;">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                              <label><b class="clrblck">Remark 1</b> <span style="color: red">*</span></label>
                                                <input type="text" class="form-control form-control-solid form-control-lg amount" maxlength="10" name="beni[1][remark]" placeholder="Remark"  required />
                                                
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    @endif
                                    @if(!empty($transaction))
                                        @php $trans =  gettransaction($transaction->id,$id); $i = 1; @endphp
                                        
                                        @if(!empty($trans))
                                            @foreach($trans as $tran)
                                                <div class="remove{{ $tran->id }}" style="width:100%; float:left;">
                                                    <div class="col-xl-4" style="float: left;">
                                                        <!--begin::Input-->
                                                        <div class="form-group">
                                                            <label><b class="clrblck">Beneficiary {{ $i }}</b> <span style="color: red">*</span></label>
                                                            <div class="form-group ">
                                                                <select class="form-control benificiaries beneficiary_id"  name="beni[{{ $tran->id }}][benificiar]">
                                                                    <option value="">Select a Beneficiary</option>
                                                                    @if(!empty($benificiaries))
                                                                        @foreach($benificiaries as $benificiary)
                                                                        <option value="{{ $benificiary->id }}" @if($tran->beneficiary_id == $benificiary->id) selected @endif>{{ $benificiary->nickname }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>


                                                    <div class="col-xl-4" style="float: left;">
                                                        
                                                        <div class="form-group">
                                                          <label><b class="clrblck">Amount {{ $i }}</b> <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg culculateamount" maxlength="10" name="beni[{{ $tran->id }}][amount]" value="{{ $tran->amount }}" placeholder="Amount"  required />
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                     <div class="@if($loop->first) col-xl-4 @else col-xl-3 @endif" style="float: left;">
                                                        <!--begin::Input-->
                                                        <div class="form-group">
                                                          <label><b class="clrblck">Remark {{ $i }}</b> <span style="color: red">*</span></label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg amount" maxlength="10" name="beni[{{ $tran->id }}][remark]" value="{{ $tran->remarks }}" placeholder="Remark"  required />
                                                            
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    @if(!$loop->first)
                                                    <div class="col-xl-1" style="float:left;">
                                                        <a href="javascript:void(0)" class="removerowvisa" data-id="{{ $tran->id }}"  style="background: #ed90ae;    padding: 3px 8px;    border-radius: 53%;    color: #fff;    margin-top: 35px;    float: left;"><i class="fa fa-minus" style="color:#fff;"></i></a>
                                                    </div>
                                                    @endif
                                                </div>
                                                @php $i++; @endphp
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                                    <div class="row">
                                         <div class="col-xl-12">
                                            <a class="addrow" style="float: left; cursor:pointer;  margin-bottom: 13px;    margin-top: -10px;"><i style="font-size: 24px;    color: #3699ff;    float: left;" class="fa fa-plus-circle"></i> <span style="    font-size: 12px;    color: #000;    margin-top: 4px;    float: left;    margin-left: 6px;">Add another beneficiary </span> </a> <i data-toggle="tooltip" title="By clicking on Add another beneficiary, it will add another row for adding beneficiary detail. You can remove it too." class="fa fa-info-circle" style="color: #000; margin-top: -3px; cursor: pointer;  float: left; margin-left: 5px;"></i>
                                         </div>
                                    </div>
                                    <h4 class="mb-3 font-weight-bold text-dark">Enter the transaction's details</h4>
                                    <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b class="clrblck">Amount</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg finalamount" maxlength="10" name="amount" value="@if(!empty($transaction)){{ $transaction->amount }}@endif"  placeholder="Amount"  required />
                                            <span class="form-text text-muted new-textmute">Fill in the amount to be transferred</span>
                                        </div>
                                    </div>
                                    @php
                                    $cheque_number = '';
                                    @endphp 
                                    @if(!empty($transaction) && $type == 'create')
                                    @php
                                    $cheque_number = $transaction->cheque_number 
                                    @endphp
                                    @endif
                                    @if(!empty($transaction) && $type == 'copy')
                                    @php
                                    $cheque_number = $transaction->cheque_number  + 1;
                                    @endphp 
                                    @endif
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b class="clrblck">Cheque No</b> <span style="color: red">*</span></label>
                                            <input type="text" maxlength="6" class="form-control form-control-solid form-control-lg cheque_number" name="cheque_number"  placeholder="Cheque No" value="{{ $cheque_number }}" required />
                                            <span class="form-text text-muted new-textmute">Fill in the cheque number</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b class="clrblck">Transaction method</b> <span style="color: red">*</span></label>
                                            <div class="radio-inline">
                                                            <label class="radio">
                                                            <input type="radio" class="transaction_method" name="transaction_method" @if(empty($transaction)) checked @endif @if(!empty($transaction->transaction_method) && $transaction->transaction_method == 'neft') checked @endif value="neft" />
                                                            <span></span>NEFT</label>
                                                            <label class="radio">
                                                            <input type="radio" value="rtgs" class="transaction_method" name="transaction_method" @if(!empty($transaction->transaction_method) && $transaction->transaction_method == 'rtgs') checked @endif/>
                                                            <span></span>RTGS</label>
                                                           
                                                        </div>
                                            <span class="form-text text-muted new-textmute">Select the mode</span>
                                        </div>
                                    </div>
                                    @php
                                        $date = date('Y-m-d');
                                    @endphp
                                    @if(!empty($transaction) && $type == 'create')
                                    @php
                                        $date = $transaction->transaction_date;
                                    @endphp
                                    @endif
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b class="clrblck">Date</b> <span style="color: red">*</span></label>
                                            <input type="date" class="form-control form-control-solid form-control-lg transaction_date" name="transaction_date" value="{{ $date }}"  placeholder="Date" value="" required />
                                            <span class="form-text text-muted new-textmute">Edit the date if neccessary</span>
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
                                        <div class="form-group remmiter_detail">
                                            @if(!empty($transaction))
                                            @php $benificiary = getbenificiary($transaction->remmiter_id)  @endphp

                                            <label><b style="color: #000; font-size: 14px;">Remmiter details</b></label><br>
                                            <span class="benificiary_name" style="color: #9f9f9f;">{{ $benificiary->name ?? '-' }}</span><br>
                                            <span class="benificiary_state" style="color: #9f9f9f;">{{ $benificiary->city ?? '-' }}, {{ $benificiary->state ?? '-' }}</span><br>
                                            <span class="benificiary_citybank" style="color: #9f9f9f;">{{ $benificiary->bank_name ?? '-' }}</span><br>
                                            <span class="benificiary_citybank" style="color: #9f9f9f;">{{ $benificiary->ifsc ?? '-' }}</span><br>
                                            <span class="benificiary_citybank" style="color: #9f9f9f;">{{ $benificiary->account_number ?? '-' }}</span><br>
                                            @endif
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-4">
                                        <!--begin::Input-->
                                        <div class="form-group benificiary_detail" >
                                            @if(!empty($transaction))
                                            {!! gethtml($transaction->id,$id) !!}
                                            @endif
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-4">
                                        <!--begin::Input-->
                                        <div class="form-group transaction_detail">
                                            @if(!empty($transaction))
                                                <label><b style="color: #000; font-size: 14px;">Transaction details</b></label><br>
                                                
                                                <span class="cheque_number_class" style="color: #9f9f9f;">{{ $transaction->cheque_number }}</span><br>
                                                <span class="amount_class" style="color: #9f9f9f;">{{ $transaction->amount }}</span><br>
                                                <span class="transaction_mode_class" style="color: #9f9f9f;">{{ strtoupper($transaction->transaction_method) }}</span><br>
                                                <span class="date_class" style="color: #9f9f9f;">{{ date('d M Y',strtotime($transaction->amount)) }}</span><br>

                                            @else
                                                <label><b style="color: #000; font-size: 14px;">Transaction details</b></label><br>
                                                
                                                <span class="cheque_number_class" style="color: #9f9f9f;">31-343456677878</span><br>
                                                <span class="amount_class" style="color: #9f9f9f;">1200$</span><br>
                                                <span class="transaction_mode_class" style="color: #9f9f9f;">NEFT</span><br>
                                                <span class="date_class" style="color: #9f9f9f;">31/01/201</span><br>

                                            @endif
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Remarks</label>
                                            <textarea required="" class="form-control form-control-solid form-control-lg remarks" name="remarks">@if(!empty($transaction)){{ $transaction->remarks }}@endif</textarea>
                                            <span class="form-text text-muted new-textmute">Enter payment reference / Narration</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                </div>
                                <div>

                                    <a href="#" class="btn btn-success printsection font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev" data-toggle="modal" data-target=".printmodal">Preview & Print</a>
                                    @if($type == 'create')
                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                    @endif
                                    @if($type == 'copy')
                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Copy</button>
                                    @endif
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



<div class="modal fade printmodal" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
        <div class="modal-body printmodaldata" style="padding: 0px;">

          
                
                  
        </div>
        
    </div>
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
<link href="{{ URL::asset('public/css/pages/form.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('script')
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script src="{{ URL::asset('public/assets/js/pages/crud/forms/widgets/select2afa4.js') }}"></script>
<script type="text/javascript">
    function generaterandomnumber() {
          
      var rendomnumber = Math.floor((Math.random() * 1000000) + 1);
      return rendomnumber;
    }

    function calculatetotal(){
    

        var sum = 0;
        $(".culculateamount").each(function(){
            sum += +$(this).val();
        });
        $('.finalamount').val(sum);

    }
    var incrementvalue = 1;

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
                })), a.push(FormValidation.formValidation(t, {
                   fields: {
                        
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
    
    
	$(document).ready(function(){
        $('body').on('keyup','.culculateamount',function(){
            calculatetotal();
        })
        $('[data-toggle="tooltip"]').tooltip();
        $('body').on('click','.addrow',function(){
                incrementvalue++;
                rendomnumber = generaterandomnumber();
                var options = $('.loadbanificiaty').get(0).outerHTML;
                var html = `<div class="remove`+rendomnumber+`" style="width:100%; float:left;">
                                    <div class="col-xl-4" style="float:left;">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>Beneficiary `+incrementvalue+`</b> <span style="color: red">*</span></label>
                                            <div class="form-group ">
                                                <select class="form-control benificiaries beneficiary_id"  name="beni[`+rendomnumber+`][benificiar]">
                                                   `+options+`
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Input-->
                                    </div>


                                    <div class="col-xl-4" style="float:left;">
                                        
                                        <div class="form-group">
                                          <label><b>Amount `+incrementvalue+`</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg culculateamount" maxlength="10" name="beni[`+rendomnumber+`][amount]" placeholder="Amount"  required />
                                            
                                        </div>
                                        
                                    </div>

                                     <div class="col-xl-3" style="float:left;">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                          <label><b>Remark `+incrementvalue+`</b> <span style="color: red">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg amount" maxlength="10" name="beni[`+rendomnumber+`][remark]"  placeholder="Remark"  required />
                                            
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-1" style="float:left;">
                                        <a href="javascript:void(0)" class="removerowvisa" data-id="`+rendomnumber+`"  style="background: #ed90ae;    padding: 3px 8px;    border-radius: 53%;    color: #fff;    margin-top: 35px;    float: left;"><i class="fa fa-minus" style="color:#fff;"></i></a>
                                    </div>
                            </div>`;
                $('.benificiariesrow').append(html);
                $('.benificiaries').select2({
                     placeholder: "Select a beneficiary",
                });
            })

        $('body').on('click','.removerowvisa',function(){
            var id = $(this).data('id');
            $('.remove'+id).remove();
            calculatetotal();
        })

        var furl = "{{ url('public/spinner1.gif') }}";
        $('body').on('click','.printsection',function(){
                var remmiter_id = $('.remmiter_id').val();
                var beneficiary_id = $('.beneficiary_id').val();
                var cheque_number = $('.cheque_number').val();
                var transaction_date = $('.transaction_date').val();
                var amount = $('.amount').val();
                var transaction_method = $('.transaction_method').val();
                var remarks = $('.remarks').val();


                $.ajax({
                url: "{{ route('company.form.printsectionmodal')}}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {remmiter_id:remmiter_id,beneficiary_id:beneficiary_id,cheque_number:cheque_number,transaction_date:transaction_date,amount:amount,transaction_method:transaction_method,remarks:remarks},
                beforeSend: function () {
                    $('.printmodaldata').html(`<div class=" loaderspin" style="height: 200px;vertical-align: middle;line-height: 200px;text-align: center;"><img src="`+furl+`" style="height: 90px; width: auto;"></div>`);
                    
                },
                success: function (data) {
                    $(".modal-content").css("height", "auto");
                    $('.printmodaldata').html(data);
                },
            });
            
        })
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