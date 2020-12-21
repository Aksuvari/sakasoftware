@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <section class="news-2-area news-page">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="news-item mt-30">

                        <div class="news-thumb">
                            <img src="https://sakasoftware.com/uploads/blog/370x316/1596055195.jpeg" alt="Yazılım Nedir? Niye Önemlidir? Yazılım Çeşitleri Nelerdir?">
                        </div>
                        <div class="news-content content-container">
                            <ul>
                                <li><i class="fa fa-calendar"></i> {{$blog->created_at}}
                                </li>
                                <li><i class="fa fa-eye"></i> 149 </li>
                            </ul>
                            <h3 class="title">{{$blog->title}}</h3>

                            <a href="{{route('blogdetay',$blog->slug)}}">Devamı<i class="flaticon-right-arrow"></i>

                            </a>
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
