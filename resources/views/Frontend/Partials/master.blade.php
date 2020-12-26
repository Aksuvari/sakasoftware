<!doctype html>
<html lang="tr">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="site" content="@yield('pageurl')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title  ======-->
    <title>Saka Software</title>

    <!--- Saka Software Metaları ---->

{{--    <meta charset="utf-8">--}}
{{--    <title>@yield("pageTitle")</title>--}}
{{--    @if(\Illuminate\Support\Facades\Route::is('home'))--}}
{{--        <meta name="description" content="{{ \App\Models\webSettingModel::find(1)->description }}">--}}
{{--        <meta name="keywords" content="{{ convertTag(\App\Models\webSettingModel::find(1)->keywords) }}">--}}
{{--    @else--}}
{{--        <meta name="description" content="@yield('description')">--}}
{{--        <meta name="keywords" content="@yield('keywords')">--}}
{{--    @endif--}}
{{--    <meta name="author" content="Saka Software">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="apple-mobile-web-app-capable" content="yes">--}}
{{--    <meta name="apple-mobile-web-app-status-bar-style" content="white">--}}
{{--    <meta name="apple-mobile-web-app-title" content="{{ \App\Models\webSettingModel::first()->company_name }}">--}}
{{--    <meta name="mobile-web-app-capable" content="yes">--}}
{{--    <meta name="theme-color" content="#fff">--}}
{{--    <meta name="application-name" content="{{ \App\Models\webSettingModel::first()->company_name }}">--}}
{{--    <meta name="copyright" content="Copyright Saka Software Internetagentur & Kommunikationsagentur 2020">--}}
{{--    <!-- Open Graph Meta -->--}}
{{--    <meta property="og:title" content="{{ \App\Models\webSettingModel::first()->company_name }}"/>--}}
{{--    <meta property="og:type" content="website"/>--}}
{{--    <meta property="og:url" content="@yield('pageurl')"/>--}}
{{--    <meta property="og:image" content="{{asset("frontend/img/icon180x180.png")}}"/>--}}
{{--    <meta property="og:locale" content="de-DE"/>--}}
{{--    <meta property="og:site_name" content="{{ \App\Models\webSettingModel::first()->company_name }}"/>--}}
{{--    <meta property="og:description"--}}
{{--          content="Facility & Avaition Services erarbeitet für seine Kunden maßgeschneiderte Reinigungskonzepte. Erfahren Sie mehr zu unseren Cleaning-Services!"/>--}}
{{--    <!-- Twitter Meta -->--}}
{{--    <meta name="twitter:card" content="summary"/>--}}
{{--    <meta name="twitter:title" content="{{ \App\Models\webSettingModel::first()->company_name }}"/>--}}
{{--    <meta name="twitter:url" content="@yield('pageurl')">--}}
{{--    <meta name="twitter:site" content="@yield('pageurl')"/>--}}
{{--    <meta name="twitter:description" content=""/>--}}
{{--    <meta name="twitter:creator" content="Copyright Saka Software Internetagentur & Kommunikationsagentur 2020">--}}
{{--    <meta name="twitter:domain" content="@yield('pageurl')"/>--}}
{{--    <meta name="twitter:image" content="{{asset("frontend/img/icon180x180.png")}}"/>--}}
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("frontend/img/icon180x180.png")}}">--}}
{{--    <link rel="shortcut icon" href="{{asset("frontend/img/icon16x16.png")}}" type="image/x-icon">--}}
{{--    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset("frontend/img/icon64x64.png")}}">--}}






    @include('Frontend.Partials.css')
    @yield('page_css')
</head>

<body>

@include('Frontend.Partials.header')
@if(request()->is('/'))
    @include('Frontend.Partials.banner')

@else
    <div class="page-title-area bg_cover" style="background-image: url(https://sakasoftware.com/uploads/category/1894x352/1596028363.jpeg); width:1894px; height:352px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="https://sakasoftware.com">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Misyonumuz</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

@yield('content')

@include('Frontend.Partials.footer')


@include('Frontend.Partials.script')

</body>

</html>
