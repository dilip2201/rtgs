@extends('layouts.app')
@section('pageTitle', 'Dashboard')
@section('content')

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
