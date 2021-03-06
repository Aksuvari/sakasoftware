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
                    <h4 class="card-title">Portfölyö Yönetimi</h4>
                    <p class="card-title-desc">Sitemizde bulunan portfolyöye ait içerikler</p>
                    <form action="{{route('Ports.update',$projects->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kategoriler</label>
                            <div class="col-md-10">
                                <select class="form-control" name="type">
                                    <option value="">Seçim Yapınız</option>
                                    @foreach($types as $type)
                                        <option @if($projects->project_type_id==$type->id) selected @endif value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                    @error('type')
                                    <div class="alert alert-danger"> {{$message}}</div>
                                    @enderror
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Başlık</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" value="{{$projects->title}}" required>
                                @error('title')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-md-2 col-form-label">Proje Url</label>
                            <div class="col-md-10">
                                <input class="form-control" type="url" value="{{$projects->project_url}}" name="project_url" id="">
                                @error('project_url')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">İçerik</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="description" placeholder="" name="description" rows="10">{!! $projects->description !!}</textarea>
                                @error('description')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-url-input" class="col-md-2 col-form-label">Resim</label>
                            <div class="col-md-10">
                                <img src="{{get_picture('portfolio',$projects->image)}}">
                                <input  type="file"   class="form-control" name="image" value="{{get_picture('portfolio',$projects->image)}}">
                            </div>
                        </div>

                        <div class="form-group row text-right">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"> Ekle</button>
                                <a href="{{route('Ports.index')}}" class="btn btn-danger"> İptal </a>
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
        tinymce.init({selector:'textarea'});
    </script>
@endsection
