<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white navmenu" style="padding: .5rem 0.2rem;">
    <div class="container" style="max-width: 100%;">
        <div class="navbar-brand">

            <a href="{{ url('admin/dashboard') }}">
                <!-- span class="fa fa-html5" style="margin-left: 10px;width: 100%;color: #fff; font-size: 25px;
                  "></span> -->
                  <img src="{{ URL::asset('public/images/logo/Logo.svg') }}" style="width: 100px;">
            </a>

        </div>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse" style="margin-left: 100px;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{activeMenu('dashboard')}}">Dashboard</a>
                </li>

        
            
                <li class="nav-item">
                    <a href="{{ route('admin.companies.index') }}" class="nav-link {{activeMenu('companies')}}">Company</a>
                </li>
               
         
                 

            </ul>
        </div>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

            <li class="nav-item dropdown profiledrop">
                @php
                if(!empty(auth()->user()->image)){
                $image =auth()->user()->image;
                }else{
                $image = 'default.png';
                }
                @endphp
                <a class="nav-link" data-toggle="dropdown" href="#" style="padding-top: 5px;">
                    <img src="{{ url('public/company/employee/'.$image) }}" style=" width: 30px;">

                </a>


                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                    style="top: 133%; min-width: 315px!important; border-radius: 10px;">
                    <div
                        style="width:100%; padding: 20px; background: url('{{ url('public/admin/user_profile_bg.jpg') }}');background-size: cover;">
                        <div class="m-card-user m-card-user--skin-dark" style="color: #fff;">
                            <div class="m-card-user__details">
                                <span
                                    style="font-size: 20px; width: 100%; display: block;">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</span>
                                <a href="#" class="m-card-user__email m--font-weight-300 m-link"
                                    style="color: #fff;">{{ auth()->user()->email }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>

                    <div class="buttonsection" style="padding: 15px;">
                        <a href="#" class="btn btnpopup"><i class="fa fa-user"
                                aria-hidden="true"></i> Profile</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="btn btnpopup"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </div>

            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->