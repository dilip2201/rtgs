@extends('layouts.app')
@section('pageTitle', 'Users')
@section('content')
<style type="text/css">
	.error{
		color: #a51010!important;
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
    .dataTables_wrapper{
        margin-top: -30px;
    }
    #employee_filter input{
        color:  #3699ff!important;
        font-weight: 600;
    }
    
</style>
@section('button')
<a href="{{ route('company.form.create') }}"  class="btn btn-primary font-weight-bolder" >New Form<i style="font-size: 10px;
    margin-left: 6px;" class="flaticon2-right-arrow"></i></a> 
<a href="{{ route('company.benificiaries.create') }}"  style="margin-left: 15px;" data-id="" class="btn btn-light-primary font-weight-bold mr-2" >New beneficiary / remmiter<i style="font-size: 10px;
    margin-left: 6px;" class="flaticon2-right-arrow"></i></a> 
@endsection
<!--begin::Card-->
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
<div class="card card-custom">
	
    <div style="float: left; width: 100%; padding:15px 30px;">
            
            <div style="width: 50%; float: left;">
             <span style="width: 100%; float: left; font-weight: 600; font-size: 17px; color: #000;">User</span>
             <span style="width: 100%; float: left;">Here you can see and filter by users</span>
            </div>
            <div style="width: 50%; float: right; text-align: right; ">
                
             <a data-toggle="modal" data-target="#exampleModalSizeSm"  class="btn btn-light-primary font-weight-bolder openaddmodal">New User</a>
            </div>
        </div>
	<div class="card-body">
		<!--begin: Datatable-->
		<table class="table table-bordered table-hover table-checkable" id="employee" style="margin-top: 13px !important">
			<thead>
				<tr>
					<th>#</th>
                    <th>Image</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Email Address</th>
					<th>Active?</th>
					<th>Action</th>
					
				</tr>
			</thead>
		</table>
		<!--end: Datatable-->
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
<link href="{{ URL::asset('public/css/pages/user.css') }}" rel="stylesheet" type="text/css" />
@endpush
@push('script')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.rtlafa4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.css?v=7.2.0') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.js') }}"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

         $('body').on('click', '.delete_record', function () {
            var id = $(this).data('id');

            Swal.fire({
                title: "Do you want to delete this user?",
                text: "By deleting this form, you would no longer be able to access it, and the information will be lost.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                    url: '{{ url("company/users/delete") }}/' + id,
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
            if (id == '') {
                $('.modal-title').text('Add User');
            } else {
                $('.modal-title').text('Edit User');
            }
            $.ajax({
                url: "{{ route('company.users.getmodal')}}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {id: id},
                success: function (data) {
                    $('.addholidaybody').html(data);
                    $(".formsubmit").validate({
                        rules: {
                            phone: {
                                required: true,
                                maxlength: 10,
                                number: true,
                            },
                            c_name: {
                                required: true,
                                maxlength: 30,
                            },
                            user_name: {
                                required: true,
                                maxlength: 30,
                            },
                            email: {
                                required: true,
                                email: true,
                            },
                            
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
                'url': "{{ route('company.users.getall') }}",
                'type': 'POST',
                'data': function (d) {
                    d._token = "{{ csrf_token() }}";
                    d.status = $("#status").val();
                }
            },
            columns: [
                {data: 'DT_RowIndex', "orderable": false},
                {data: 'image'},
                {data: 'user_name'},
                {data: 'phone_number'},
                {data: 'email'},
                {data: 'status'},
                {data: 'action'},
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
                        url: '{{ route("company.users.changestatus") }}',
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