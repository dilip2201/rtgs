<div class="card card-custom">
    <div class="card-body p-0">
        <!--begin: Wizard-->
        <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
            <!--begin: Wizard Nav-->
            <div class="wizard-nav border-right py-8 px-8 px-lg-10">
                <!--begin::Wizard Step 1 Nav-->
                <div class="wizard-steps">
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo13/dist/assets/media/svg/icons/General/User.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title" style="font-size: 14px;">Create a new beneficiary</h3>
                                <div class="wizard-desc" style="font-size: 14px;">Setup your new beneficiary details</div>
                            </div>
                        </div>
                    </div>
                    <div class="wizard-step" data-wizard-type="step">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
                                            <rect fill="#000000" x="2" y="8" width="20" height="3" />
                                            <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title">Enter bank details</h3>
                                <div class="wizard-desc">Setup the beneficiary bank details</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Wizard Step 1 Nav-->
                </div>
            </div>
            <!--end: Wizard Nav-->
            <!--begin: Wizard Body-->
            <div class="wizard-body py-8 px-8  px-lg-10">
                <!--begin: Wizard Form-->
                <div class="row">
                    <div class="offset-xxl-2 col-xxl-8">
                        <form class="form formsubmit" action="{{ route('company.users.store') }}" id="kt_form" method="post">
                                {{ csrf_field() }}
                                @if(isset($user) && !empty($user->id) )
                                    <input type="hidden" name="companyid" value="{{ encrypt($user->id) }}">
                                @endif
                            <!--begin: Wizard Step 1-->
                            <div class="pb-3" data-wizard-type="step-content" data-wizard-state="current">
                                <h4 class="mb-3 font-weight-bold text-dark">Enter your new beneficiary / remmiter details</h4>
                                
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Name</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="Name" value="" required />
                                            <span class="form-text text-muted">Fill in the user name and surname.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Nickname</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="nickname" value="@if(!empty($user)){{ $user->nickname }}@endif"  placeholder="Nickname" value="" required />
                                            <span class="form-text text-muted">Fill in the nickname.</span>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>E-mail</b></label>
                                            <input type="email" value="@if(!empty($user)){{ $user->email }}@endif" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email" />
                                            <span class="form-text text-muted">Fill in the email.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>


                                     <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>Phone No</b></label>
                                            <input type="text" name="phone" class="form-control form-control-solid form-control-lg"  placeholder="phone" value="@if(!empty($user)){{ $user->phone }}@endif"  />
                                            <span class="form-text text-muted">Enter his phone number.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group ">
                                            <label><b>Is a beneficiary?</b></label>
                                            <span class="switch">
                                                <label>
                                                    <input type="checkbox" name="select">
                                                    <span></span>
                                                </label>
                                            </span>
                                           <span class="form-text text-muted">Turn on if is a beneficiary only.</span>
                                        </div>
                                    </div>
                                    </div>
                                    <h4 class="mb-3 font-weight-bold text-dark">Enter the beneficiary / remmiter address</h4>
                                    <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Address</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="Address" value="" required />
                                            <span class="form-text text-muted">Fill in the mail address.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Address 2</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="Address 2" value="" required />
                                            <span class="form-text text-muted">Fill in the address details.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Pin</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="Pin" value="" required />
                                            <span class="form-text text-muted">Enter the pin.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>Area</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="user_name" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="Area" value="" required />
                                            <span class="form-text text-muted">Fill in the area.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>City</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="city" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="City" value="" required />
                                            <span class="form-text text-muted">Enter the city.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label><b>State</b></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="city" value="@if(!empty($user)){{ $user->name }}@endif"  placeholder="State" value="" required />
                                            <span class="form-text text-muted">Enter in the state.</span>
                                        </div>
                                    </div>
                                    </div>
                                   
                            </div>
                            <div class="pb-5" data-wizard-type="step-content">
                                <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Address Line 1</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="address1" placeholder="Address Line 1" value="Address Line 1" />
                                            <span class="form-text text-muted">Please enter your Address.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="address2" placeholder="Address Line 2" value="Address Line 2" />
                                            <span class="form-text text-muted">Please enter your Address.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Postcode</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="postcode" placeholder="Postcode" value="3000" />
                                            <span class="form-text text-muted">Please enter your Postcode.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="city" placeholder="City" value="Melbourne" />
                                            <span class="form-text text-muted">Please enter your City.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="VIC" />
                                            <span class="form-text text-muted">Please enter your State.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--end: Wizard-->
                </div>
                <!--end: Wizard Form-->
            </div>
            <!--end: Wizard Body-->
        </div>
        <!--end: Wizard-->
    </div>
</div>



