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
   
@push('script')
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
    </script>
@endpush
@endsection
