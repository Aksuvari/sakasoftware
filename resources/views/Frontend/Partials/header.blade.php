<div class="offcanvas_menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="offcanvas-social">
                        <ul class="text-center">
                            <li><a href="{{ \App\Models\SettingModel::first()->facebook }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="{{\App\Models\SettingModel::first()->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{\App\Models\SettingModel::first()->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ \App\Models\SettingModel::first()->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Anasayfa</a>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="#">Firmamiz</a>
                                <ul class="sub-menu">
                                    <li><a href="events.html">Misyonumuz</a></li>
                                    <li><a href="single-event.html">Vizyonumuz</a></li>
                                    <li><a href="single-event.html">Kurumsal</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="#">Hizmetlerimiz </a>
                                <ul class="sub-menu">
                                    <li><a href="events.html">Sunucu Ve Paket Yönetimi</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="#">Referanslarımız</a>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="#">Blog</a>
                            </li>
                            <li class="menu-item-has-children active">
                                <a href="#">İletişim</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="mailto:{{ \App\Models\SettingModel::first()->email }}"><i class="flaticon-message"></i>{{ \App\Models\SettingModel::first()->email }}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-top">
                        <ul>
                           <li> <a href="mailto:{{ \App\Models\SettingModel::first()->email }}"><i class="flaticon-message"></i>{{ \App\Models\SettingModel::first()->email }}</a></li>
                            <li><a href="tel:{{ \App\Models\SettingModel::first()->phone_1 }}"><i class="flaticon-phone-call"></i> {{ \App\Models\SettingModel::first()->phone_1 }}</a></li>
                          <li><a href="#"><i class="flaticon-placeholder"></i>{{\App\Models\SettingModel::first()->address}}</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-item d-flex justify-content-between align-items-center">
                        <div class="main-header-menus  d-flex">
                            <div class="header-logo">
                                <a href="index.html"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo"></a>
                            </div>
                            <div class="header-menu d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a class="" href="#">Anasayfa</a>
                                    </li>

                                    <li>
                                        <a href="#">Firmamız  <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Misyonumuz</a></li>
                                            <li><a href="single-event.html">Vizyonumuz</a></li>
                                            <li><a href="single-event.html">Kurumsal</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Hizmetlerimiz  <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Sunucu Ve Paket Yönetimi</a></li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="#">Referanslarımız</a>

                                    </li>
                                    <li>
                                        <a href="#">Blog </a>
                                    </li>

                                    <li><a href="contact.html">İletişim</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-social d-flex align-items-center">
                            <ul class="d-none d-lg-block">
                                <li><a href="{{ \App\Models\SettingModel::first()->facebook }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="{{\App\Models\SettingModel::first()->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{\App\Models\SettingModel::first()->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ \App\Models\SettingModel::first()->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            <div class="toggle-btn ml-30 canvas_open d-lg-none d-block">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



