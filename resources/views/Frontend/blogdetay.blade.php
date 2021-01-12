@extends('Frontend.Partials.master')
@section('pagetitle')
    Blog
@endsection
@section('page_css')

@endsection

@section('description')
    {{ strip_tags(\Illuminate\Support\Str::limit($blogs->description,100,'')) }}
@endsection

@section('keywords')
    @php
    $keys = explode('-',convertToSEO(strip_tags(\Illuminate\Support\Str::limit($blogs->description,100,''))));
    $key = implode(',',$keys);

    @endphp
    {{ $key }}
@endsection

@section('pageurl')
    {{ url('blog') }}/{{ $blogs->slug }}
@endsection

@section('content')

    @php

        $etiket = explode(',', $blogs->label);

    @endphp


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
                                <h3 >{{$blogs->title}}</h3>
                                <p> Etiket : @foreach($etiket as $item) <a href="{{ url('search/postistegi',$item) }}">{{ $item }}</a>, @endforeach</p>
                                <p>{!! $blogs->description !!}</p>
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
