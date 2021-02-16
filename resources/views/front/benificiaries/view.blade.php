
<style type="text/css">
   .circledot {
   height: 50px;
   width: 50px;
   background-color: #bbb;
   border-radius: 26%;
   display: inline-block;
   text-align: center;
   padding-top: 14px;
   color: #fff!important;
   font-size: initial;
   }
</style>
<div class="card-body">
   <!--begin::Accordion-->
   <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
      <div class="card">
         <div class="card-header" id="headingOne6">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="false">
               <i class="icon-xl far fa-list-alt"></i>Beneficiary / Remmiter Details
            </div>
         </div>
         <div id="collapseOne6" class="collapse show" data-parent="#accordionExample6" style="">
            <div class="card-body" style="padding: 15px 15px 0px 15px;">
               <div class="d-flex">
                  <!--begin: Pic-->
                  <!--begin::Card-->
                  <!--begin::Body-->
                  <!--end::Toolbar-->
                  <!--begin::Desc-->
                  <!--end::Desc-->
                  <!--begin::Info-->
                  <!--end::Info-->
                  <!--end::Body-->
                  <!--end:: Card-->
                  <!--end: Pic-->
                  <!--begin: Info-->
                  <div class="flex-grow-1">
                     <!--begin: Title-->
                     <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="mr-3">
                           <!--begin::Name-->
                           <a href="#" class="d-flex align-items-center font-size-h5 mr-3 text-dark-75 font-weight-bolder font-size-sm">{{ strtoupper($benificiary->name) ?? ''}}
                           <i class="flaticon2-correct text-success icon-md ml-2" style="color: #3dc3d8;"></i></a>
                           <!--end::Name-->
                           <!--begin::Contacts-->
                           <div class="d-flex flex-wrap my-2">
                           	<div class="row">
                           	<div class="col-md-6" style="    margin-bottom: 10px;">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon2-calendar-3 font-size-lg">  </i>
                              </span>
                              <b style="color: #3F4254 !important">Nickname: </b>
                              
                             {{ ucfirst($benificiary->nickname) ?? 'N/A'}}
                              </a>
                          </div>

<div class="col-md-6" style="    margin-bottom: 10px;">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon2-new-email font-size-lg"></i>
                              </span>
                              <b style="color: #3F4254!important;"> Email : </b>
                           
                            {{ $benificiary->email ?? 'N/A'}}
                              </a>


                          </div>

                          <div class="col-md-6">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon-support font-size-lg"></i>
                              </span>
                              <b style="color: #3F4254!important;"> Phone : </b>
                             
                             {{ $benificiary->mobile_number ?? 'N/A' }}
                              </a>

                          </div>

                          <div class="col-md-6">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon-file-2 font-size-lg"></i>
                              </span>
                              <b style="color: #3F4254!important;">Is a remmiter ? : </b>
                              
                              {{ $benificiary->is_remitter ?? 'N/A' }}
                              </a>
                          </div>
                           </div>
                       </div>
                           <!--end::Contacts-->
                        </div>
                     </div>
                     <!--end: Title-->
                     <!--begin: Content-->
                     <div class="d-flex align-items-center flex-wrap justify-content-between">
                        <div class="d-flex flex-wrap align-items-center py-2">
                           <div class="d-flex align-items-center mr-10">
                           </div>
                        </div>
                     </div>
                     <!--end: Content-->
                  </div>
                  <!--end: Info-->
               </div>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="headingTwo6">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo6" aria-expanded="false">
               <i class="icon-xl far fa-building"></i>Beneficiary / Remmiter Address
            </div>
         </div>
         <div id="collapseTwo6" class="collapse" data-parent="#accordionExample6" style="">
            <div class="card-body" style="padding: 15px 15px 0px 15px;">
               <p class="text-dark-50 m-0  font-weight-normal"  style="    margin-bottom: 10px!important;"> <i class="font-size-lg flaticon-map-location"></i> <b style="color: #3F4254!important;"> Address 1 : </b>:  {{ $benificiary->address ?? 'N/A' }}</p>
               
               <p class="text-dark-50 m-0  font-weight-normal"  style="    margin-bottom: 10px!important;">  <i class="font-size-lg flaticon-map-location"></i> <b style="color: #3F4254!important;"> Address 2 : </b>:  {{ $benificiary->address2 ?? 'N/A' }}</p>
               
               <div class="d-flex flex-wrap my-2">
                           	<div class="row">
                           	<div class="col-md-6" style="    margin-bottom: 10px;">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="font-size-lg flaticon-map-location"></i>
                              </span>
                              <b style="color: #3F4254 !important">Pin: </b>
                             
                             {{ $benificiary->pin ?? 'N/A' }}
                              </a>
                          </div>

<div class="col-md-6" style="    margin-bottom: 10px;">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="font-size-lg flaticon-map-location"></i>
                              </span>
                              <b style="color: #3F4254!important;"> Area : </b>
                             
                            {{ $benificiary->area ?? 'N/A' }}
                              </a>


                          </div>

                          <div class="col-md-6">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="font-size-lg flaticon-map-location"></i>
                              </span>
                              <b style="color: #3F4254!important;">City : </b>
                              
                              {{ $benificiary->city ?? 'N/A' }}
                              </a>

                          </div>

                          <div class="col-md-6">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="font-size-lg flaticon-map-location"></i>
                              </span>
                              <b style="color: #3F4254!important;">State : </b>
                             
                              {{ $benificiary->state ?? 'N/A' }}
                              </a>
                          </div>
                           </div>
               </div>
               .
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="headingThree6">
            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree6">
               <i class="icon-xl la la-bank"></i>Beneficiary Bank Details
            </div>
         </div>
         <div id="collapseThree6" class="collapse" data-parent="#accordionExample6">
            <div class="card-body" style="padding: 15px 15px 0px 15px;">
               <div class="d-flex flex-wrap my-2">
                           	<div class="row">
                           	<div class="col-md-6" style="    margin-bottom: 10px;">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon2-calendar-3 font-size-lg"></i>
                              </span>
                              <b style="color: #3F4254 !important">Account Number : </b>
                             
                             {{ $benificiary->account_number ?? 'N/A' }}
                              </a>
                          </div>

<div class="col-md-6" style="    margin-bottom: 10px;">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon2-new-email font-size-lg"></i>
                              </span>
                              <b style="color: #3F4254!important;"> IFSC : </b>
                             
                            {{ $benificiary->ifsc ?? 'N/A' }}
                              </a>


                          </div>

                          <div class="col-md-6">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon-support font-size-lg"></i>
                              </span>
                              <b style="color: #3F4254!important;"> Branch Name  : </b>
                              
                              {{ $benificiary->branch_name ?? 'N/A' }}
                              </a>

                          </div>

                          <div class="col-md-6">
                              <a href="#" class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                              <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                              <i class="flaticon-support font-size-lg"></i>
                              </span>
                              <b style="color: #3F4254!important;">Bank Name : </b>
                              
                              {{ $benificiary->bank_name ?? 'N/A' }}
                              </a>
                          </div>
                           </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end::Code example-->
</div>
