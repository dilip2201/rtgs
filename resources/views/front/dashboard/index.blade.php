@extends('layouts.app')
@section('pageTitle', 'Dashboard')
@section('content')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container loaddashboard">
        <!--begin::Dashboard-->
    </div>
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
