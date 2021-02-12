<div id="kt_header" class="header header-fixed">
   <!--begin::Container-->
   <div class="container-fluid d-flex align-items-stretch justify-content-between">
      <!--begin::Header Menu Wrapper-->
      <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
         <!--begin::Header Menu-->
         <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
            <!--begin::Header Nav-->
            <ul class="menu-nav">
               <li class="menu-item" aria-haspopup="true" style="margin-right: 35px;">
                  <a href="index.html" class="menu-link">
                  <img src="{{ URL::asset('public/images/logo/Logo.svg') }}" style="width: 100px;">
                  </a>
               </li>
               <li class="menu-item {{ activeMenucompany('dashboard')}}" aria-haspopup="true">
                  <a href="{{ url('company/dashboard') }}" class="menu-link">
                  <span class="menu-text">Dashboard</span>
                  </a>
               </li>
               <li class="menu-item menu-item-submenu menu-item-rel {{ activeMenucompany('users')}}" data-menu-toggle="click" aria-haspopup="true">
                  <a href="{{ url('company/users') }}" class="menu-link ">
                  <span class="menu-text">Users</span>
                  </a>
               </li>
               <li class="menu-item menu-item-submenu menu-item-rel {{ activeMenucompany('benificiaries')}}" data-menu-toggle="click" aria-haspopup="true">
                  <a href="{{ url('company/benificiaries') }}" class="menu-link ">
                  <span class="menu-text">Benificiaries</span>
                  </a>
               </li>
               
            </ul>
            <!--end::Header Nav-->
         </div>
         <!--end::Header Menu-->
      </div>
      <!--end::Header Menu Wrapper-->
      <!--begin::Topbar-->
      <div class="topbar">
         <div class="topbar-item">
            <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
               <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
               <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ auth()->user()->name }}</span>
               <span class="symbol symbol-35 symbol-light-success">
               @php
               if(!empty(auth()->user()->image)){
               $image = auth()->user()->image;
               }else{
               $image = 'default.png';
               }
               @endphp
               <div class="symbol-label" style="background-image: url({{ URL::asset('public/company/employee/'.$image) }})"></div>
               </span>
            </div>
         </div>
         <!--end::User-->
      </div>
      <!--end::Topbar-->
   </div>
   <!--end::Container-->
</div>