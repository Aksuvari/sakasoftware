@extends('Frontend.Partials.master')
@section('pagetitle')

@endsection

@section('page_css')

@endsection

@section('content')


    <div class="container mb-6">
        <h2>Projelerimiz</h2>
        <div class="row gx-5 mt-lg-5 mt-md-4 mt-3">

            @foreach($projects as $project)
            <div class="col-lg-3 col-lg-3 mt-lg-0 mt-md-5 mt-4">
                <img src="{{asset('frontend')}}/assets/images/services/s1.jpg" alt="services">
                <h4 class="my-4">{{$project->title}}</h4>
                <p>{!! $project->description  !!}</p>
            </div>
            @endforeach

        </div>

    </div>


    <div class="seventy-percent-bg-gray mb-lg-8 pt-lg-8 pb-lg-1 pt-md-7 pb-md-7 pb-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 order-lg-1 subscription"></div>
                <div class="col-lg-7 mt-lg-0 mt-md-7 mt-7">
                    <div class="pt-lg-5 pr-lg-9">
                        <h2 class="mt-2 mb-4">Subscribe to Our Newsletter</h2>
                        <p class="mb-5">Phasellus rutrum, turpis vel eleifend egestas, lorem sem cursus enim, non ullamcorper sapien arcu eu sem. Nullam viverra mi ut facilisis consectetur. Nam tincidunt sapien tellus.</p>
                        <form href="#">
                            <div class="form-group row gx-2">
                                <div class="col-lg-6 col-md-9">
                                    <input class="form-control input-outline" id="form_email" type="text" name="lname" placeholder="Email" required>
                                </div>
                                <div class="col-lg-2 col-md-3">
                                    <div class="btn btn-outline d-block btn-top-0 rounded-0"><i class="fa fa-paper-plane"> Submit</i></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
