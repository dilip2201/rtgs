<form  autocorrect="off" action="{{ route('admin.companies.store') }}" autocomplete="off" method="post" class="form-horizontal form-bordered
formsubmit">
    {{ csrf_field() }}

    @if(isset($company) && !empty($company->id) )
        <input type="hidden" name="companyid" value="{{ encrypt($company->id) }}">
    @endif
    <fieldset>
    <legend>Comapny Detail</legend>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label>Company name</label>
                <input type="text" class="form-control " name="c_name"
                       placeholder="Name"
                       value="@if(!empty($company)){{ $company->c_name }}@endif" required="" maxlength="30">
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label>Full name</label>
                <input type="text" class="form-control " name="user_name"
                       placeholder="Full name"
                       value="@if(!empty($company)){{ $company->name }}@endif" required="" maxlength="30">
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control " name="email"
                       placeholder="Email"
                       value="@if(!empty($company)){{ $company->email }}@endif" required="">
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label>Phone No.</label>
                <input type="text" class="form-control phone" name="phone"
                       placeholder="Mobile No."
                       value="@if(!empty($company)){{ $company->phone }}@endif" required="">
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address" placeholder="Address" required>@if(!empty($company)){{ $company->address }}@endif</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary  submitbutton pull-right"> Submit <span class="spinner"></span></button>
            </div>
        </div>
    </div>
</fieldset>
</form>
</form>

