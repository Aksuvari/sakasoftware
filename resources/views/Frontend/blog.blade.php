@extends('Frontend.Partials.master')
@section('pagetitle')
    BLOG
@endsection

@section('page_css')

@endsection

@section('content')
    <section class="main-content">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4 col-sm-6">
                    <article class="main-post">
                        <div class="featured-post">
                            <a href="#" title="">
                                <img src="{{asset('frontend/fnc/images/blog/blog.jpeg')}}" alt="">
                            </a>
                        </div><!-- /.featured-post -->
                        <div class="entry-content">
                            <div class="date">
                                {{$blog->created_at}}
                            </div>
                            <h3>
                                {{$blog->title}}

                            </h3>

                                  <a href="{{route('blogdetay',$blog->slug)}}"><p>  Devamı <i class="fa fa-arrow-right"></i></p>
                                </a>


                        </div><!-- /.entry-content -->
                    </article>
                </div>
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

@endsection

@section('script')

@endsection
