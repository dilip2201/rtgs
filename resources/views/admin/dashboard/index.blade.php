@extends('admin.layouts.app')
@section('content')
@section('pageTitle', 'Dashboard')

<div class="container">
   <!-- Info boxes -->
   <div class="row">
    
      <div class="col-lg-3 col-6">
         <div class="small-box bg-info">
            <div class="inner">
                <h3>15</h3>

                <p>Total Registered Super Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
            <div class="inner">
                <h3>10</h3>

                <p>Total Active Super Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
            <div class="inner">
                <h3>5</h3>

                <p>Total Active Bank Forms</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
          </div>
         <div class="col-lg-3 col-6">
         <div class="small-box bg-danger">
            <div class="inner">
                <h3>13</h3>

                <p>Total Registered Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
          </div>
         <div class="col-lg-3 col-6">
         <div class="small-box bg-secondary">
            <div class="inner">
                <h3>43</h3>

                <p>Total Active Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
          </div>
      </div>

   </div>
</div>
@endsection