<div class="site-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('homepage')}}"><img class="site-logo" src="{{asset('frontend')}}/assets/images/logo/logo.png" alt="Logo"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <ul class="navbar-nav mr-auto">
               </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('kurumsal')}}" >Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">İletisim</a></li>
                </ul>
              {{--  <ul class="nav-modules">
                    <!-- Social nav-->
                    <li class="d-flex align-items-center">
                        <span class="i fas fa-phone-alt"></span>
                        <a class="nav-link text-black text-light-red pr-0" href="tel:{{\App\Models\SettingModel::first()->phone_1}}">{{\App\Models\SettingModel::first()->phone_1}}</a></li>
                </ul>--}}
            </div>
        </div>
    </nav>
</div>
