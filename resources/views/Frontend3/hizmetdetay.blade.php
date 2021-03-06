@extends('Frontend.Partials.master')
@section('pagetitle') Hizmet
@endsection
@section('page_css')

@endsection

@section('content')

    <section class="main-about">
        <div class="container">
            <div class="row">
                <div class="wrap-about">
                    <div class="about-content-tab">
                        <div class="content-inner over-view" style="display: block;">
                            <div class="images">
                                <img src="{{asset('frontend/fnc')}}/images/about/01.jpg" alt="">
                            </div>
                            <div class="text-about">
                                <h3 >{{$services->title}}</h3>
                                <p>{!! $services->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
