<form  autocorrect="off" action="{{ route('company.users.store') }}" autocomplete="off" method="post" class="form-horizontal form-bordered formsubmit">
    {{ csrf_field() }}
    @if(isset($user) && !empty($user->id) )
        <input type="hidden" name="companyid" value="{{ encrypt($user->id) }}">
    @endif
    <fieldset>
    
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label>Company name</label>
                <input type="text" class="form-control " name="c_name"
                       placeholder="Name"
                       value="@if(!empty($user)){{ $user->c_name }}@else{{ auth()->user()->c_name }}@endif" required="" maxlength="30">
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control " name="user_name"
                       placeholder="User Name" value="@if(!empty($user)){{ $user->name }}@endif" required="" maxlength="30">
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control " name="email"
                       placeholder="Email"
                       value="@if(!empty($user)){{ $user->email }}@endif" required="">
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " name="password"
                       placeholder="Password" value="" @if(empty($user)) required @endif>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label>Phone No.</label>
                <input type="text" class="form-control " name="phone"
                       placeholder="Mobile No."
                       value="@if(!empty($user)){{ $user->phone }}@endif" required="">
                        <input id="password-confirm" type="password" placeholder="Confirm Password"
                                 name="asaspassword_confirmation" autocomplete="new-password" style="display: none;">
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address" placeholder="Address" required>@if(!empty($user)){{ $user->address }}@endif</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group" style="float: right;">
                <button type="submit" class="btn btn-primary  submitbutton pull-right"> Submit <span class="spinnermm"></span></button>
            </div>
        </div>
    </div>
</fieldset>
</form>
</form>

