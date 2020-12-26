@extends('Frontend.Partials.master')

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
    <section class="get-to-know-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="get-to-know-content">
                        <h3 class="title text-center">{{$blogs->title}}</h3>
                        <p> Etiket : @foreach($etiket as $item) <a href="{{ url('search/postistegi',$item) }}">{{ $item }}</a>, @endforeach</p>
                        <p>{!! $blogs->description !!}<br></p>
                    </div>
            </div>
        </div>

    </section>
@endsection

@section('script')

@endsection
