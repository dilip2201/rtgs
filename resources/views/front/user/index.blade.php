@extends('layouts.app')
@section('pageTitle', 'Users')
@section('content')
<style type="text/css">
	.error{
		color: #a51010!important;
	}
</style>
<!--begin::Notice-->
<div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
	<div class="alert-icon">
		<span class="svg-icon svg-icon-primary svg-icon-xl">
			<!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/Tools/Compass.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect x="0" y="0" width="24" height="24" />
					<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
					<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<div class="alert-text">DataTables has the ability to read data from virtually any JSON data source that can be obtained by Ajax. This can be done, in its most simple form, by setting the ajax option to the address of the JSON data source. See official documentation 
	<a class="font-weight-bold" href="https://datatables.net/examples/data_sources/ajax.html" target="_blank">here</a>.</div>
</div>
<!--end::Notice-->
<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header">
		<div class="card-title">
			<span class="card-icon">
				<i class="flaticon-avatar text-primary"></i>
			</span>
			<h3 class="card-label">Users</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->
			<!-- <div class="dropdown dropdown-inline mr-2"> -->
				<!-- <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="la la-download"></i>Export</button> -->
				<!--begin::Dropdown Menu-->
				<!-- <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
					<ul class="nav flex-column nav-hover">
						<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon la la-print"></i>
								<span class="nav-text">Print</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon la la-copy"></i>
								<span class="nav-text">Copy</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon la la-file-excel-o"></i>
								<span class="nav-text">Excel</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon la la-file-text-o"></i>
								<span class="nav-text">CSV</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon la la-file-pdf-o"></i>
								<span class="nav-text">PDF</span>
							</a>
						</li>
					</ul>
				</div> -->
				<!--end::Dropdown Menu-->
			<!-- </div> -->
			<!--end::Dropdown-->
			<!--begin::Button-->
			<a href="#" data-toggle="modal" data-target="#exampleModalSizeSm" data-id="" class="btn btn-primary font-weight-bolder openaddmodal">
			<i class="la la-plus"></i>New User</a>
			<!--end::Button-->
		</div>
	</div>
	<div class="card-body">
		<!--begin: Datatable-->
		<table class="table table-bordered table-hover table-checkable" id="employee" style="margin-top: 13px !important">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Phone Number</th>
					<th>Email Address</th>
					<th>Address</th>
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
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">User</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i aria-hidden="true" class="ki ki-close"></i>
			</button>
		</div>
		<div class="modal-body addholidaybody">
			
		</div>
		
	</div>
    </div>
</div>
@push('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundle.rtlafa4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.css?v=7.2.0') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ URL::asset('public/admin/Pnotify/company/pnotify.custom.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/plugins/custom/datatables/datatables.bundleafa4.js') }}"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
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
                'url': "{{ route('company.users.getall') }}",
                'type': 'POST',
                'data': function (d) {
                    d._token = "{{ csrf_token() }}";
                    d.status = $("#status").val();
                }
            },
            columns: [
                {data: 'DT_RowIndex', "orderable": false},
                {data: 'user_name'},
                {data: 'phone_number'},
                {data: 'email'},
                {data: 'address'},
                {data: 'status'},
                {data: 'action'},
            ]
        });

                $('body').on('click', '.changestatus', function () {
            var id = $(this).data('id');
            var status = $(this).data('status');
            if(status == 0){
                var text = "disabled";
            }else{
                var text = "enabled";
            }
            (new PNotify({
                title: "Confirmation Needed",
                text: "Are you sure you wants to "+ text +" this company?",
                icon: 'glyphicon glyphicon-question-sign',
                hide: false,
                confirm: {
                    confirm: true
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                },
                addclass: 'stack-modal',
                stack: {
                    'dir1': 'down',
                    'dir2': 'right',
                    'modal': true
                }
            })).get().on('pnotify.confirm', function () {
                $.ajax({
                    url: '{{ route("company.users.changestatus") }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {id: id, status: status},
                    success: function (data) {
                        $("#employee").DataTable().ajax.reload();
                        toastr.success('Status changed successfully.', 'Success!');
                    },
                    error: function () {
                        toastr.error('Something went wrong!', 'Oh No!');

                    }
                });
            })

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
        $('body').on('click', '.delete_record', function () {
            var id = $(this).data('id');

            (new PNotify({
                title: "Confirmation Needed",
                text: "Are you sure you wants to delete?",
                icon: 'glyphicon glyphicon-question-sign',
                hide: false,
                confirm: {
                    confirm: true
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                },
                addclass: 'stack-modal',
                stack: {
                    'dir1': 'down',
                    'dir2': 'right',
                    'modal': true
                }
            })).get().on('pnotify.confirm', function () {
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
                            toastr.success(data.msg, 'Success!');
                            $("#employee").DataTable().ajax.reload();
                        }
                    },
                    error: function () {
                        toastr.error('Something went wrong!', 'Oh No!');
                    }
                });
            });
        });

	})
</script>
@endpush

@endsection