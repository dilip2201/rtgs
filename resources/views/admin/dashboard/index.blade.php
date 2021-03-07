@extends('admin.layouts.app')
@section('content')
@section('pageTitle', 'Dashboard')

<div class="container" style="max-width:100%; padding: 0px 20px; margin-top: 25px;">
   <!-- Info boxes -->
   <div class="row">
    
      <div class="col-lg-3 col-6">
         <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $companies }}</h3>

                <p>Total Companies</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('admin.companies.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      </div>

   </div>
</div>
@endsection