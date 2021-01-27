<section class="cospo-page" id="about">

    <div class="background">
        <img src="{{ asset('frontend/img/community/bg/bg-2.jpg') }}" alt=""/>
    </div>

    <div class="wrapper-scroll">
        <div class="scroll">
            <div class="content">
                <div class="row">

                    <div class="col-md-6">
                        @foreach($contents as $item)
                            <h2>{{ $item->title }}</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    {!! $item->description !!}
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

            <div class="page-figure in-content">
                <div class="content-center">
                    <div>
                        <h3>Meet Our Team</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <ul class="gallery row" data-item="5">
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-1">
                                            <img src="{{ asset('frontend/img/team/worker-elements-1.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-2">
                                            <img src="{{ asset('frontend/img/team/worker-elements-2.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-3">
                                            <img src="{{ asset('frontend/img/team/worker-elements-3.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-4">
                                            <img src="{{ asset('frontend/img/team/worker-elements-4.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-5">
                                            <img src="{{ asset('frontend/img/team/worker-elements-5.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-6">
                                            <img src="{{ asset('frontend/img/team/worker-elements-6.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-7">
                                            <img src="{{ asset('frontend/img/team/worker-elements-7.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-8">
                                            <img src="{{ asset('frontend/img/team/worker-elements-8.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-9">
                                            <img src="{{ asset('frontend/img/team/worker-elements-9.jpg') }}" alt="">
                                        </a>
                                    </li>
                                    <li class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                        <a href="#about" data-action="team/project-10">
                                            <img src="{{ asset('frontend/img/team/worker-elements-10.jp') }}g" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

