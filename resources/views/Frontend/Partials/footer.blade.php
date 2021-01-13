<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-6 pr-lg-10">
                    <div class="footer-widget footer-widget-1">
                        <h2 class="mb-4 text-ebony-clay">{{\App\Models\SettingModel::first()->company_name}}</h2>
                        <p class="text-abbey pr-6">Saka Software teknolojik olarak müşterisine en iyi hizmeti sağlamayı hedeflemiş bir şirkettir.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row gx-lg-5">
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget-3">
                                <div class="text-abbey">
                                    <p class="mb-0">{{\App\Models\SettingModel::first()->address}}</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget-4">
                                <ul>
                                    <li><a href="mailto:{{\App\Models\SettingModel::first()->email}}">{{\App\Models\SettingModel::first()->email}}</a></li>
                                    <li><a href="tel:{{\App\Models\SettingModel::first()->phone_1}}">{{\App\Models\SettingModel::first()->phone_1}}</a></li>
                                    <li><a href="tel:{{\App\Models\SettingModel::first()->phone_2}}">{{\App\Models\SettingModel::first()->phone_2}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-widget footer-widget-2">
                                <ul>

                                    <li><a href="{{route('homepage')}}">Anasayfa</a></li>
                                    <li><a href="$#" >Hakkımızda</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">İletisim</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-md-6">
                    <div class="footer-widget">
                        <p class="m-md-0">© 2020 Saka Software</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-widget">
                        <ul class="list-inline m-0 p-0 text-md-right footer-nav">

                            <li class="list-inline-item py-2 pl-5 pr-2"><a href="{{\App\Models\SettingModel::first()->facebook}}" target="_blank"><i class="fab fa-facebook icon"></i></a></li>
                            <li class="list-inline-item py-2 pr-2"><a href="{{\App\Models\SettingModel::first()->instagram}}" target="_blank"><i class="fab fa-instagram icon"></i></a></li>
                            <li class="list-inline-item py-2 pr-2"><a href="{{\App\Models\SettingModel::first()->twitter}}" target="_blank"><i class="fab fa-twitter icon"></i></a></li>
                            <li class="list-inline-item py-2 pr-2"><a href="{{\App\Models\SettingModel::first()->youtube}}" target="_blank"><i class="fab fa-youtube icon"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
