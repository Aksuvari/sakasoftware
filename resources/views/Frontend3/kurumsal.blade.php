@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')

    <div class="seventy-percent-bg-gray">
        <div class="container">
            <div class="py-lg-8 py-md-7 py-6">
                <div class="row gx-5">
                    @foreach($contents as $content)
                    <div class="col-lg-6 mb-lg-0 mb-md-5 mb-5 order-lg-1"><img src="{{get_picture('content',$content->image)}}" ></div>
                    <div class="col-lg-6 my-auto">

                        <h2 class="mb-4">{{$content->title}}</h2>
                        <div class="mb-5"><i class="fas fa-quote-left display-6 text-light-red mb-4"></i>
                            <p class="lead mb-4">{!! $content->description !!}</p>
                            <h6 class="text-gray-suit">Saka Software</h6>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
