@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <section class="upcoming-events-area events-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upcoming-events-item">
                        @foreach($projects as $project)
                        <div class="item mt-20">
                            <div class="row align-items-center">
                                <div class="col-lg-9">
                                    <div class="upcoming-events-content d-block d-md-flex align-items-center">
                                        <div class="thumb">
                                            <img src="https://sakasoftware.com/uploads/portfolyo/130x128/1603975654.png" alt="">
                                        </div>

                                        <div class="content ml-65">
                                            <h4 class="title">{{$project->title}}</h4>
                                            <p>{!! $project->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="events-btn text-left text-lg-right">
                                        <a class="main-btn main-btn-2" href="{{$project->project_url}}">İncele</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
