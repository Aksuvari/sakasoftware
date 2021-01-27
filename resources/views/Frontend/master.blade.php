<!DOCTYPE html>
<html lang="en">
<head>
    @include('Frontend.include.css')
    @yield('css')
</head>
<body class="dark community">
<div class="main-preloader">
    <div class="ball-scale">
        <div></div>
    </div>
</div>
@include('Frontend.include.header')
<div class="main-overlay"></div>
<main>
    @include('Frontend.include.home')
    @include('Frontend.include.blog')
    @include('Frontend.include.about')
    @include('Frontend.include.services')
    @include('Frontend.include.ajax')
    @include('Frontend.include.say')
    @include('Frontend.include.price')
    @include('Frontend.include.contact')
</main>
@include('Frontend.include.script')
@yield('js')
</body>
</html>
