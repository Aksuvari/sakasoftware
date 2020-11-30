<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Saka Software || @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    @include('Backend.Partials.css')
    @yield('css')
</head>

<body data-layout="detached" data-topbar="colored">

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

       @include('Backend.Partials.header')

        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">@yield('page_title')</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Welcome to Qovex Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                @yield('content')

            </div>


            @include('Backend.Partials.footer')
        </div>


    </div>


</div>

@include('Backend.Partials.script')
@yield('script')
@include('Toastr.toastr')
</body>

</html>
