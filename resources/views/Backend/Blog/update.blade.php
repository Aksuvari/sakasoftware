@extends('Backend.Partials.adminmaster')
@section('title')
    Manager Panel
@endsection
@section('css')
@endsection
@section('page_title')
    Saka Software Yönetim Paneline Hoş Geldiniz.
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Yönetimi Yönetimi</h4>
                    <p class="card-title-desc">Sitemizde bulunan blog'a ait içerikler</p>
                    <form action="{{route('Blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Başlık</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" value="{{$blog->title}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">İçerik</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="description" placeholder="" name="description" rows="10"> {!! $blog->description !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Etiketler</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="">
                            </div>
                        </div>

                        <div class="form-group row text-right">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"> Ekle</button>
                                <a href="{{route('Blogs.index')}}" class="btn btn-danger"> İptal </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
@endsection

@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
