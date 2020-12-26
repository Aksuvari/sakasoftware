<section class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="footer-about mt-30">
                    <div class="logo">
                        <a href="#"><img src="{{\App\Models\SettingModel::first()->logo2}}" alt="logo"></a>
                    </div>
                    <p>{{\App\Models\SettingModel::first()->description}}</p>
                    <ul>
                        <li> <a href="mailto:{{ \App\Models\SettingModel::first()->email }}">{{ \App\Models\SettingModel::first()->email }}</a></li>
                        <li><a href="tel:{{ \App\Models\SettingModel::first()->phone_1 }}">{{ \App\Models\SettingModel::first()->phone_1 }}</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-list mt-30">
                    <h4 class="title">Menü</h4>
                    <ul>
                        <li><a href="#">Anasayfa</a></li>
                        <li><a href="#">Firmamız</a></li>
                        <li><a href="#">Hizmetlerimiz</a></li>
                        <li><a href="#">Referanslarımız</a></li>
                        <li><a href="#">İletişim</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-address mt-30">
                    <h3 class="title">Adres</h3>
                    <p>{{\App\Models\SettingModel::first()->address}}</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14612.97540392891!2d90.497437!3d23.70298445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1590471441805!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <span><i class="fa fa-map-marker"></i> Find us on Map</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright d-block d-md-flex justify-content-between align-items-center">
                        <p>© Copyright 2020 by Saka Software</p>
                        <ul>
                            <li><a href="{{ \App\Models\SettingModel::first()->facebook }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="{{\App\Models\SettingModel::first()->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{\App\Models\SettingModel::first()->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ \App\Models\SettingModel::first()->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-pattern">
        <img src="assets/images/footer-pattern.png" alt="">
    </div>
    <div class="footer-logo">
        <img src="assets/images/footer-logo.png" alt="">
    </div>
</section>
<div class="go-top-area">
    <div class="go-top-wrap">
        <div class="go-top-btn-wrap">
            <div class="go-top go-top-btn">
                <i class="fa fa-angle-double-up"></i>
                <i class="fa fa-angle-double-up"></i>
            </div>
        </div>
    </div>
</div>
