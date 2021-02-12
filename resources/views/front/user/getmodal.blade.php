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
                                <h3 class="wizard-title">Create a new user</h3>
                                <div class="wizard-desc">Setup the user account</div>
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
                        <form class="form formsubmit" action="{{ route('company.users.store') }}" method="post">
                                {{ csrf_field() }}
                                @if(isset($user) && !empty($user->id) )
                                    <input type="hidden" name="companyid" value="{{ encrypt($user->id) }}">
                                @endif
                            <!--begin: Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h4 class="mb-10 font-weight-bold text-dark">Enter your new user details</h4>
                                
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
                                            <label><b>Password</b></label>
                                            <input type="password" class="form-control form-control-solid form-control-lg" name="lname" placeholder="Password"  @if(empty($user)) required @endif/>
                                            <span class="form-text text-muted">Fill in the user's password.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>Email</b></label>
                                            <input type="email" value="@if(!empty($user)){{ $user->email }}@endif" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email" />
                                            <span class="form-text text-muted">Fill in the user's email.</span>
                                            <input id="password-confirm" type="password" placeholder="Confirm Password"
                                 name="asaspassword_confirmation" autocomplete="new-password" style="display: none;">
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label><b>Phone</b></label>
                                            <input type="text" name="phone" class="form-control form-control-solid form-control-lg"  placeholder="phone" value="@if(!empty($user)){{ $user->phone }}@endif"  />
                                            <span class="form-text text-muted">Enter his phone number.</span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control form-control-solid form-control-lg" name="address" placeholder="Address" required>@if(!empty($user)){{ $user->address }}@endif</textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                         <button type="submit" class="btn btn-success " >Submit <span class="spinnermm"></span></button>
                                    </div>
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




