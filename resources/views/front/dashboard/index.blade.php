@extends('layouts.app')
@section('pageTitle', 'Dashboard')
@section('content')
@section('button')
<a href="{{ route('company.form.create') }}"  class="btn btn-primary font-weight-bolder" >New Form<i style="font-size: 10px;
    margin-left: 6px;" class="flaticon2-right-arrow"></i></a> 
<a href="{{ route('company.benificiaries.create') }}"  style="margin-left: 15px;" data-id="" class="btn btn-light-primary font-weight-bold mr-2" >New beneficiary / remmiter<i style="font-size: 10px;
    margin-left: 6px;" class="flaticon2-right-arrow"></i></a> 
@endsection
<!--begin::Dashboard-->
<div class="loaddashboard"> 
</div>
  <!--begin::Card-->
<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon-avatar text-primary"></i>
            </span>
            <h3 class="card-label">Transactions</h3>
        </div>
        <div class="card-toolbar">
            <a href="{{ route('company.form.create') }}"  class="btn btn-primary font-weight-bolder">
            <i class="la la-plus"></i>New Form</a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-bordered table-hover table-checkable" id="employee" style="margin-top: 13px !important">
            <thead>
                <tr>
                    <th>#</th>
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
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logs</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i aria-hidden="true" class="ki ki-close"></i>
            </button>
        </div>
        <div class="modal-body addholidaybody" style="padding: 0px;">
            
        </div>
        
    </div>
    </div>
</div>    
@push('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.rtlafa4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.css?v=7.2.0') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.js') }}"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script>
        function loaddashboard(){
            $.ajax({
                url: "{{ route('company.loaddashboard') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function () {
                },
                success: function (data) {
                    $('.loaddashboard').html(data);
                },
                error: function () {
                    toastr.error('Something went wrong!', 'Oh No!');
                }
            });
        }
        $(function (){
            loaddashboard();
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
            stateSave: true,
            ajax: {
                'url': "{{ route('company.transaction.getall') }}",
                'type': 'POST',
                'data': function (d) {
                    d._token = "{{ csrf_token() }}";
                    d.status = $("#status").val();
                }
            },
            columns: [
                {data: 'DT_RowIndex', "orderable": false},
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
       
    </script>
@endpush
@endsection
