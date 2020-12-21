@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <section class="get-to-know-area">
        <div class="container">
            @foreach($contents as $content)


            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="get-to-know-content">
                        <h3 class="title text-center">{{$content->title}}</h3>
                        <h3 class="title text-center">{{$content->getCategory->name}}</h3>
                        <p>{!! $content->description !!}<br></p>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection

@section('script')

@endsection
