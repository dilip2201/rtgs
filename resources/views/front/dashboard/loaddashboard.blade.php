<style type="text/css">
   .symbol.symbol-50 .symbol-label {
   width: 35px;
   height: 35px;
   }
   #kt_footer{
   display: none!important;
   }
</style>
<div class="row">
   <div class="col-xl-7">
      <!--begin::Mixed Widget 15-->
      <!--end::Mixed Widget 15-->
   </div>
   <div class="col-xl-5">
      <!--begin::Advance Table Widget 1-->
      <div class="card card-custom card-stretch gutter-b">
         <!--begin::Header-->
         <div class="card-header border-0 ">
            <h3 class="card-title align-items-start flex-column" style="padding: 23px 0px 0px 16px;">
               <span class="card-label font-weight-bolder text-dark">Users</span>
            </h3>
            <div class="card-toolbar">
               <a href="{{ url('company/users') }}"  data-id="" class="btn btn-primary font-weight-bolder openaddmodal">
               View More</a>
               <!--end::Button-->
            </div>
         </div>
         <!--end::Header-->
         <!--begin::Body-->
         <div class="card-body py-0">
            <!--begin::Table-->
            <div class="table-responsive">
               <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                  <thead>
                     <tr class="text-left">
                        <th></th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     @if(!empty($users))
                     @foreach($users as $user)
                     <tr>
                        <td class="pr-0">
                           <div class="symbol symbol-50 symbol-light mt-1">
                              <span class="symbol symbol-35 symbol-light-success">
                                 @php
                                 if(!empty($user->image)){
                                 $image = $user->image;
                                 }else{
                                 $image = 'default.png';
                                 }
                                 @endphp
                                 <div class="symbol-label" style="background-image: url({{ URL::asset('public/company/employee/'.$image) }})"></div>
                              </span>
                           </div>
                        </td>
                        <td class="pl-0">
                           <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $user->name }}</a>
                           <span class="text-muted font-weight-bold text-muted d-block">{{ $user->phone }}</span>
                        </td>
                        <td>
                           <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $user->email }}</span>
                           {{--                                <span class="text-muted font-weight-bold">Web, UI/UX Design</span>--}}
                        </td>
                        <td class="pr-0 text-center">
                           @if($user->status == '1')
                           <span class="label label-success label-dot mr-2"></span><span style="color:#1bc5bd!important; cursor:pointer;" class="font-weight-bold changestatus">Active </span>
                           @else
                           <span class="label label-danger label-dot mr-2"></span><span style="color:#1bc5bd!important; cursor:pointer;" class="font-weight-bold changestatus">Active </span>
                           @endif
                        </td>
                     </tr>
                     @endforeach
                     @endif
                  </tbody>
               </table>
            </div>
            <!--end::Table-->
         </div>
         <!--end::Body-->
      </div>
      <!--end::Advance Table Widget 1-->
   </div>
</div>