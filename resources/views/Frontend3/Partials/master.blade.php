<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon-->
    <link rel="shortcut icon" href="{{asset('frontend')}}/assets/images/favicon.ico">
    <!-- Site Title-->
    <title>@yield('page_title')Saka Software</title>
    <meta name="description" content="A Template for Architectural Interior Design company website.">
    @include('Frontend.Partials.css')
</head>
<body>
<!-- Navbar-->
@include('Frontend.Partials.header')
<!-- End Navbar-->
<article class="win">
    <div class="entry-content">
    @yield('content')

    </div>
</article>

@include('Frontend.Partials.footer')

@include('Frontend.Partials.script')
</body>
</html>
