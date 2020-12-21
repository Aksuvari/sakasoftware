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
                    <h4 class="card-title">Paket Yönetimi</h4>
                    <p class="card-title-desc">Sitemizde bulunan paketlere ait içerikler</p>
                    <form action="{{route('Packages.update',$packages->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Başlık</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" value="{{$packages->title}}">
                                @error('title')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Paket Türü</label>
                            <div class="col-md-10">
                                <select class="form-control" name="type">
                                    <option value="">Paket Türü</option>
                                    @foreach($types as $type)
                                        <option @if($packages->package_id==$type->id) selected @endif value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                    @error('type')
                                    <div class="alert alert-danger"> {{$message}}</div>
                                    @enderror
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">İçerik</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="description" placeholder="" name="description" rows="10">{!! $packages->description !!}</textarea>
                                @error('description')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Etiketler</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="label"  value="{{$packages->label}}" data-role="tagsinput">
                                @error('label')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row text-right">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"> Ekle</button>
                                <a href="{{route('Packages.index')}}" class="btn btn-danger"> İptal </a>
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
