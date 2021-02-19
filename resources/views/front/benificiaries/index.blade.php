@extends('layouts.app')
@section('pageTitle', 'Benificiaries')
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
   <div class="card-header">
      <div class="card-title">
         <span class="card-icon">
         <i class="flaticon-avatar text-primary"></i>
         </span>
         <h3 class="card-label">Benificiaries</h3>
      </div>
      <div class="card-toolbar">
         <a href="{{ route('company.benificiaries.create') }}"  class="btn btn-primary font-weight-bolder">
         <i class="la la-plus"></i>New beneficiary / remmiter</a>
         <!--end::Button-->
      </div>
   </div>
   <div class="card-body">
      <div class="mb-7">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-9 col-sm-12">
               <div class="input-group" id="kt_daterangepicker_2">
                  <input type="text" class="form-control" readonly="readonly" placeholder="Select date range">
                  <input type="hidden" name="startdate" class="startdate">
                  <input type="hidden" name="enddate" class="enddate">
                  <div class="input-group-append">
                     <span class="input-group-text">
                     <i class="la la-calendar-check-o"></i>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--begin: Datatable-->
      <table class="table table-bordered table-hover table-checkable" id="employee" style="margin-top: 13px !important">
         <thead>
            <tr>
               <th>#</th>
               <th>Beneficiary Name </th>
               <th>Nickname</th>
               <th>Bank Name </th>
               <th>Account No.</th>
               <th>Is Remitter</th>
               <th>Enabled / Disabled </th>
               <th>Action</th>
            </tr>
         </thead>
      </table>
      <!--end: Datatable-->
   </div>
</div>
<!--end::Card-->
<div class="modal fade" id="exampleModalSizeLg" tabindex="-1" aria-labelledby="exampleModalSizeLg" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i aria-hidden="true" class="ki ki-close"></i>
            </button>
         </div>
         <div class="modal-body addholidaybody" style="    padding: 0px!important;">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
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
<script src="{{ URL::asset('public/assets/js/pages/custom/wizard/wizard-2afa4.js') }}"></script>
<script src="{{ URL::asset('public/assets/js/pages/crud/forms/widgets/bootstrap-daterangepickerafa4.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){

        

         $('body').on('click', '.delete_record', function () {
            var id = $(this).data('id');

            Swal.fire({
                title: "Do you want to delete this user?",
                text: "By deleting, you would no longer be able to access it, and the information will be lost.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                    url: '{{ url("company/benificiaries/delete") }}/' + id,
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
                                "User has been deleted.",
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
                        "Your User is safe :)",
                        "error"
                    )
                }
            });
           
        });

        


		$('body').on('click', '.openaddmodal', function () {
            var id = $(this).data('id');
            $('.modal-title').text('Benificiaries Detail');
            $.ajax({
                url: "{{ route('company.benificiaries.getmodal')}}",
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
            stateSave: true,
            ajax: {
                'url': "{{ route('company.benificiaries.getall') }}",
                'type': 'POST',
                'data': function (d) {
                    d._token = "{{ csrf_token() }}";
                    d.status = $("#status").val();
                    d.startdate = $('.startdate').val();
                    d.enddate = $('.enddate').val();
                }
            },
            columns: [
                {data: 'DT_RowIndex', "orderable": false},
                {data: 'name'},
                {data: 'nickname'},
                {data: 'bank_name'},
                {data: 'account_number'},
                {data: 'is_remitter'},
                {data: 'status'},
                {data: 'action'},
            ]
        });

        /*filter*/
        $('body').on('click', '.applyBtn', function () {
            $("#employee").DataTable().ajax.reload()
        })
    
        $('.searchdata').click(function () {
            event.preventDefault();
            $("#employee").DataTable().ajax.reload()
        })

        $('body').on('click', '.changestatus', function () {
            var id = $(this).data('id');
            var status = $(this).data('status');
            if(status == 'disabled'){
                var text = "Disabled";
            }else{
                var text = "Enabled";
            }

            Swal.fire({
                title: "Confirmation Needed",
                text: "Are you sure you wants to "+ text +" this Benificiary?",
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
                                    "Benificiary has been "+text+"d.",
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
                        "Your Benificiary is safe :)",
                        "error"
                    )
                }
            });
        });
                

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