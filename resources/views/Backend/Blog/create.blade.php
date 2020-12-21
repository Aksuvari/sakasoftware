@extends('Backend.Partials.adminmaster')
@section('title')
    Manager Panel
@endsection
@section('page_css')

@endsection
@section('page_title')
    Saka Software Yönetim Paneline Hoş Geldiniz.
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Yönetimi</h4>
                    <p class="card-title-desc">Sitemizde bulunan blog'a ait içerikler</p>
                    <form action="{{route('Blogs.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Başlık</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="title" required>
                            @error('title')
                            <div class="alert alert-danger"> {{$message}}</div>
                            @enderror
                        </div>
                    </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">İçerik</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="description" placeholder="" name="description" rows="10"></textarea>
                                @error('description')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Etiketler</label>
                        <div class="col-md-10" >
                            <input class="form-control" type="text" name="label"  data-role="tagsinput" >
                            @error('label')
                            <div class="alert alert-danger"> {{$message}}</div>
                            @enderror
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
    <script src="{{asset('backend/assets/extra/Label/bootstrap-tagsinput.min.js')}}"></script>

@endsection
