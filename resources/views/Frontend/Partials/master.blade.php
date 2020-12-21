<!doctype html>
<html lang="tr">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title  ======-->
    <title>Saka Software</title>

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


<!--====== GO TO TOP PART ENDS ======-->
@include('Frontend.Partials.script')

</body>

</html>
