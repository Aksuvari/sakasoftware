@extends('Frontend.Partials.master')
@section('pagetitle')
    BLOG
@endsection

@section('page_css')

@endsection

@section('content')
    <div class="container mt-lg-3">
        <!-- Blog-->
        <div class="row gx-lg-5 gy-lg-5 gy-3 gx-3 blog-post card-post-style">
            @foreach($blogs as $blog)
            <div class="col-lg-3">
                <article>
                    <figure class="entry-media">
                    <img class="lozad" src="{{get_picture('blog',$blog->image)}}" data-src="" alt="" data-loaded="true">
                    </figure>
                    <div class="entry-content-wrapper">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="{{route('blogdetay',$blog->slug)}}">{{$blog->title}}</a></h2>
                            <div class="entry-meta-top">
                                <span class="entry-meta-date"> <i class="far fa-clock"></i>{{$blog->created_at}}</span>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>{!!\Illuminate\Support\Str::limit ($blog->description,50) !!}</p>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <!-- End Blog-->
    </div>

@endsection

@section('script')

@endsection
