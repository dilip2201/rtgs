@extends('layouts.app')
@section('pageTitle', 'Transactions')
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
    }.font-size-lg {
      font-size: 13px;
    }
     .dataTables_length{
        width: 50%;
        float: left;
        font-size: 11px;
        margin-top: -26px;
    }
    .dataTables_info{
        
        text-align: center;
    }
    .dataTables_paginate {
        width: 50%!important;
        float: right;
        margin-top: -26px!important;
    }
    .card-header{
        border-bottom: 0px!important;
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color:  #3699ff!important;
      opacity: 1; /* Firefox */
      font-weight: 600;
    }
    #employee_wrapper{
        margin-top: -30px;
    }
    #employee_filter input{
        color:  #3699ff!important;
        font-weight: 600;
    }
    input{
      color:  #3699ff!important;
      font-weight: 600!important;
    }
    .select2-selection__placeholder{
      font-weight: 600;
    }
    .select2-selection.select2-selection--single{
      border-color: #3699ff;
    }
    .select2-selection__placeholder{
      color: #3699ff!important;
    }
    .select2-selection__rendered{
     color: #3699ff!important; 
     font-weight: 600;
    }
</style>
@section('button')
<a href="{{ route('company.form.create') }}"  data-id="" class="btn btn-primary font-weight-bolder" >New Form<i style="font-size: 10px;
    margin-left: 6px;" class="flaticon2-right-arrow"></i></a> 
    <a href="{{ route('company.benificiaries.create') }}"  style="margin-left: 15px;" data-id="" class="btn btn-light-primary font-weight-bold mr-2" >New beneficiary / remmiter<i style="font-size: 10px;
    margin-left: 6px;" class="flaticon2-right-arrow"></i></a> 
@endsection
@if(session()->has('status'))
    <div class="alert alert-success" style="background-color: snow;    border-color: #4a99ff;    color: #4a99ff;">
        {{ session()->get('status') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger" style="background-color: snow;    border-color: #4a99ff;    color: #4a99ff;">
        {{ session()->get('error') }}
    </div>
@endif

<!--begin::Card-->
<div class="card card-custom">
   
   <div style="float: left; width: 100%; padding:15px 30px;">
            
            <div style="width: 50%; float: left;">
             <span style="width: 100%; float: left; font-weight: 600; font-size: 17px; color: #000;">Transactions</span>
             <span style="width: 100%; float: left;">Here you can see and filter by transactions</span>
            </div>
            <div style="width: 50%; float: right; text-align: right; ">
                
             <a href="{{ route('company.form.create') }}"  class="btn btn-light-primary font-weight-bolder ">New form</a>
            </div>
        </div>
   <div class="card-body" style="padding-top: 0px;">
      
     <div class="row align-items-center">
        <div class="col-md-12">
           <div class="row align-items-center">
              <div class="col-md-3 my-2 my-md-0">
                 <div class="d-flex align-items-center">
                    <div class="input-group daternge" id="kt_daterangepicker_2">
                       <input type="text" class="form-control daternge" readonly="readonly" placeholder="Select date range">
                       <input type="hidden" name="startdate" class="startdate">
                       <input type="hidden" name="enddate" class="enddate">
                       <div class="input-group-append">
                          <span class="input-group-text" style="background: none;">
                          <i class="fa fa-calendar-o" aria-hidden="true" style="font-size: 13px; color: #3699ff;"></i>
                          </span>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-2 my-2 my-md-0">
                 <div class="d-flex align-items-center">
                    <select class="form-control remmiter"  name="remmiter">
                       <option value="">Select a Remmiter</option>
                       @if(!empty($remmiters))
                       @foreach($remmiters as $remmiter)
                       <option value="{{ $remmiter->id }}" @if(!empty($transaction) && $transaction->remmiter_id == $remmiter->id) {{ 'selected' }} @endif>{{ $remmiter->nickname }}</option>
                       @endforeach
                       @endif
                    </select>
                 </div>
              </div>
             
              <div class="col-md-2 my-2 my-md-0">
                 <div class="d-flex align-items-center">
                    <select class="form-control mode"  name="mode">
                       <option value="">Select Mode</option>
                       <option value="rtgs">RTGS</option>
                       <option value="neft">NEFT</option>
                    </select>
                 </div>
              </div>
              <div class="col-md-2 my-2 my-md-0">
                     
                      <a href="#" class="btn btn-secondary font-weight-boldest resetdata"  style="border-color: #3699ff; background-color: #fff; color: #3699ff;"><i class="flaticon2-refresh" style="padding-right: 0px; color: #3699ff; font-weight: 600;"></i></a>
              </div>
           </div>
        </div>
     </div>
      
      <!--begin: Datatable-->
      <table class="table table-bordered table-hover table-checkable" id="employee" style="margin-top: 13px !important">
         <thead>
            <tr>
               <th>#</th>
               <th>Form ID</th>
               <th>User</th>
               <th>Beneficiary</th>
               <th>Remmiter</th>
               <th>Bank</th>
               <th>Date</th>
               <th>Mode</th>
               <th>Amount</th>
               <th>Actions</th>
            </tr>
         </thead>
      </table>
      <!--end: Datatable-->
   </div>
</div>
<!--end::Card-->


<div class="modal fade add_modal" id="exampleModalSizeSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
      
        <div class="modal-body addholidaybody" style="padding: 0px;">
            
        </div>
        
    </div>
    </div>
</div>

@push('script')
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.rtlafa4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.css?v=7.2.0') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.js') }}"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ URL::asset('public/assets/js/pages/crud/forms/widgets/bootstrap-daterangepickerafa4.js') }}"></script>
<script src="{{ URL::asset('public/assets/js/pages/crud/forms/widgets/select2afa4.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){

        $('.remmiter').select2({
             placeholder: "Select a remmiter",
        });
        $('.mode').select2({
             placeholder: "Select a Mode",
             minimumResultsForSearch: -1
        });
        $('.beneficiary').select2({
             placeholder: "Select a Beneficiary",
        });
        $('.resetdata').click(function () {
            event.preventDefault();

            $('.daternge').val('').trigger('change');
            $('.remmiter').val('').trigger('change');
            $('.beneficiary').val('').trigger('change');
            $('.mode').val('').trigger('change');
       
            location.reload(true);
        });


        $('body').on('click', '.delete_record', function () {
            var id = $(this).data('id');

            Swal.fire({
                title: "Do you want to delete this Transaction?",
                text: "By deleting, you would no longer be able to access it, and the information will be lost.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                    url: '{{ url("company/transaction/delete") }}/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    beforeSend: function () {
                    },
                    success: function (data) {
                        if (data.status == 400) {
                            toastr.error(data.msg, 'Oh No!');
                        }
                        if (data.status == 200) {
                            Swal.fire(
                                "Deleted!",
                                "Transaction has been deleted successfully",
                                "success"
                            )
                            $("#employee").DataTable().ajax.reload();
                        }
                    },
                    error: function () {
                        toastr.error('Something went wrong!', 'Oh No!');
                    }
                });
                    
                    // result.dismiss can be "cancel", "overlay",
                    // "close", and "timer"
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "Cancelled",
                        "Your Transaction is safe :)",
                        "error"
                    )
                }
            });
           
        });

        


		$('body').on('click', '.openaddmodal', function () {
            var id = $(this).data('id');
          
            $.ajax({
                url: "{{ route('company.transaction.getmodal')}}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {id: id},
                success: function (data) {
                    $('.addholidaybody').html(data);
                    $(".formsubmit").validate({
                        rules: {
                            address: {
                                required: true,
                            },
                            phone: {
                                maxlength: 15,
                                number: true,
                            },
                            c_name: {
                                maxlength: 30,
                            },
                            user_name: {
                                maxlength: 30,
                            },
                            email: {
                                required: true,
                                email: true,
                            }
                        },

                    });

                },
            });
        });

		$("#employee").DataTable({
            "responsive": true,
            "autoWidth": false,
            processing: true,
            serverSide: true,
            "dom": '<"top"f>rt<"bottom"ilp><"clear">',
            
            ajax: {
                'url': "{{ route('company.transaction.getall') }}",
                'type': 'POST',
                'data': function (d) {
                    d._token = "{{ csrf_token() }}";
                    d.status = $("#status").val();
                    d.startdate = $('.startdate').val();
                    d.enddate = $('.enddate').val();
                    d.remmiter = $('.remmiter').val();
                    d.beneficiary = $('.beneficiary').val();
                    d.mode = $('.mode').val();
                }
            },
            columns: [
                {data: 'DT_RowIndex', "orderable": false},
                {data: 'form_id'},
                {data: 'user'},
                {data: 'beneficiary'},
                {data: 'remmiter'},
                {data: 'bank'},
                {data: 'date'},
                {data: 'mode'},
                {data: 'amount'},
                {data: 'actions'},
            ]
        });

        $('body').on('click', '.applyBtn', function () {
            $("#employee").DataTable().ajax.reload()
        })


        $('body').on('change', '.remmiter', function () {
            $("#employee").DataTable().ajax.reload()
        })

        $('body').on('change', '.beneficiary', function () {
            $("#employee").DataTable().ajax.reload()
        })

        $('body').on('change', '.mode', function () {
            $("#employee").DataTable().ajax.reload()
        })

        $('body').on('click', '.changestatus', function () {
            var id = $(this).data('id');
            var status = $(this).data('status');
            if(status == 0){
                var text = "disable";
            }else{
                var text = "enable";
            }

            Swal.fire({
                title: "Confirmation Needed",
                text: "Are you sure you wants to "+ text +" this user?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, "+text+" it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: '{{ route("company.benificiaries.changestatus") }}',
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: {id: id, status: status},
                        success: function (data) {
                            $("#employee").DataTable().ajax.reload();
                            Swal.fire(
                                    text+"d",
                                    "User has been "+text+"d.",
                                    "success"
                                )
                        },
                        error: function () {
                            toastr.error('Something went wrong!', 'Oh No!');

                        }
                    });
                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "Cancelled",
                        "Your User is safe :)",
                        "error"
                    )
                }
            });
        });
                
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
                        toastr.success(data.msg,'Success!')
                    }
                },
            });
        });
       

var KTBootstrapDaterangepicker = {
    init: function() {
        ! function() {
            $("#kt_daterangepicker_1, #kt_daterangepicker_1_modal").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary"
            }), $("#kt_daterangepicker_2").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary"
            }, (function(a, t, e) {
                $("#kt_daterangepicker_2 .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
                 $('.startdate').val(a.format('D-MMM-YYYY'));
                    $('.enddate').val(t.format('D-MMM-YYYY'));
            })), $("#kt_daterangepicker_2_modal").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary"
            }, (function(a, t, e) {
                $("#kt_daterangepicker_2 .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
            })), $("#kt_daterangepicker_3").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary"
            }, (function(a, t, e) {
                $("#kt_daterangepicker_3 .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
            })), $("#kt_daterangepicker_3_modal").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary"
            }, (function(a, t, e) {
                $("#kt_daterangepicker_3 .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
            })), $("#kt_daterangepicker_4").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary",
                timePicker: !0,
                timePickerIncrement: 30,
                locale: {
                    format: "MM/DD/YYYY h:mm A"
                }
            }, (function(a, t, e) {
                $("#kt_daterangepicker_4 .form-control").val(a.format("MM/DD/YYYY h:mm A") + " / " + t.format("MM/DD/YYYY h:mm A"))
            })), $("#kt_daterangepicker_5").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary",
                singleDatePicker: !0,
                showDropdowns: !0,
                locale: {
                    format: "MM/DD/YYYY"
                }
            }, (function(a, t, e) {
                $("#kt_daterangepicker_5 .form-control").val(a.format("MM/DD/YYYY") + " / " + t.format("MM/DD/YYYY"))
            }));
            var a = moment().subtract(29, "days"),
                t = moment();
            $("#kt_daterangepicker_6").daterangepicker({
                buttonClasses: " btn",
                applyClass: "btn-primary",
                cancelClass: "btn-secondary",
                startDate: a,
                endDate: t,
                ranges: {
                    Today: [moment(), moment()],
                    Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
                    "Last 7 Days": [moment().subtract(6, "days"), moment()],
                    "Last 30 Days": [moment().subtract(29, "days"), moment()],
                    "This Month": [moment().startOf("month"), moment().endOf("month")],
                    "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
                }
            }, (function(a, t, e) {
                $("#kt_daterangepicker_6 .form-control").val(a.format("MM/DD/YYYY") + " / " + t.format("MM/DD/YYYY"))
            }))
        }(), $("#kt_daterangepicker_1_validate").daterangepicker({
            buttonClasses: " btn",
            applyClass: "btn-primary",
            cancelClass: "btn-secondary"
        }, (function(a, t, e) {
            $("#kt_daterangepicker_1_validate .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
        })), $("#kt_daterangepicker_2_validate").daterangepicker({
            buttonClasses: " btn",
            applyClass: "btn-primary",
            cancelClass: "btn-secondary"
        }, (function(a, t, e) {
            $("#kt_daterangepicker_3_validate .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
        })), $("#kt_daterangepicker_3_validate").daterangepicker({
            buttonClasses: " btn",
            applyClass: "btn-primary",
            cancelClass: "btn-secondary"
        }, (function(a, t, e) {
            $("#kt_daterangepicker_3_validate .form-control").val(a.format("YYYY-MM-DD") + " / " + t.format("YYYY-MM-DD"))
        }))
    }
};
jQuery(document).ready((function() {
    KTBootstrapDaterangepicker.init()
}));








	})
</script>
@endpush

@endsection