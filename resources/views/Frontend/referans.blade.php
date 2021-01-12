@extends('Frontend.Partials.master')
@section('pagetitle')
    Referanslarımız
@endsection
@section('page_css')

@endsection

@section('content')
    <section class="flat-iconbox style3">
        <div class="container">

            <div class="row">
                @foreach($projects as $project)
                    <div class="col-sm-4 col-lg-3">
                        <div class="iconbox style3">

                                <img src="{{asset('frontend/fnc')}}/images/blog/blog.jpeg" alt="">

                            <br>
                            <div class="iconbox-content">
                                <h3>{{$project->title}}</h3>
                                <p>{!! $project->description !!}</p>
                            </div>
                                    <div class="flat-title style1 center">
                                        <div class="btn-more">
                                            <a href="{{$project->project_url}}" title="">incele</a>
                                        </div>
                                    </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
