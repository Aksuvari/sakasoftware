<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">

                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>



                <div class="dropdown d-inline-block">
                   <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('backend')}}/assets/images/users/avatar-2.jpg" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1">{{ Auth::user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                        <a class="dropdown-item" href="{{route('webSetting.index')}}"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> Site Ayarları </a>
                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> E-mail Ayarları</a>
                        <a class="dropdown-item" href="{{ route('profile.show') }}"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i>{{ __('Profile') }}</a>
                        <div class="dropdown-divider"></div>

                        <form method="post" action="{{route('logout')}}">
                            @csrf
                            <button class="dropdown-item text-danger" type="submit"><i class="mdi mdi-power text-danger"></i> Çıkış</button>
                        </form>
                    </div>
                </div>



            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{asset('backend')}}/assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                        <span class="logo-lg">
                                        <img src="{{asset('backend')}}/assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('backend')}}/assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                        <span class="logo-lg">
                                        <img src="{{asset('backend')}}/assets/images/sakalogo.png" alt="" height="50">
                                    </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-inline-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Arama...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>


            </div>

        </div>
    </div>
</header>
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{asset('backend/assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{ Auth::user()->name }}</a>


            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dash')}}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('business.index')}}" class="waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>İş Takip Yönetimi</span>
                    </a>

                </li>

                <li>
                    <a href="{{route('Contents.index')}}" class=" waves-effect">
                        <i class="mdi mdi-calendar-text"></i>
                        <span>İçerik Yönetimi</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('Emails.index')}}" class="waves-effect">
                        <i class="mdi mdi-inbox-full"></i>
                        <span>Email Yönetimi</span>
                    </a>

                </li>

                <li>
                    <a href="{{route('Ports.index')}}" class="waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Portfölyö Yönetimi</span>
                    </a>

                </li>

                <li>
                    <a href="{{route('Blogs.index')}}" class="waves-effect">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Blog Yönetimi</span>
                    </a>

                </li>

                <li>
                    <a href="{{route('Sliders.index')}}" class="waves-effect">
                        <i class="mdi mdi-checkbox-multiple-blank-outline"></i>
                        <span>Slider Yönetimi</span>
                    </a>

                </li>

                <li>
                    <a href="{{route('Services.index')}}" class="waves-effect">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Hizmet</span>
                    </a>

                </li>

                <li>
                    <a href="{{route('Packages.index')}}" class="waves-effect">
                        <i class="mdi mdi-clipboard-list-outline"></i>
                        <span>Paket Yönetimi</span>
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-chart-donut"></i>
                        <span>Sunucu YÖnetimi</span>
                    </a>

                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
