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
                    <h4 class="card-title">Slider Yönetimi</h4>
                    <p class="card-title-desc">Sitemizde bulunan slider</p>
                    <form  action="{{route('Sliders.update',$sliders->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Başlık</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" value="{{$sliders->title}}">
                                @error('title')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">İçerik</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="description" placeholder="" name="description" rows="10"> {!! $sliders->description !!}</textarea>
                                @error('description')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> Button İşlemleri </label>
                            <div class="col-sm-2">
                                <input
                                    type="checkbox"
                                    class="allowBtn button_usage_btn"
                                    id="switch"
                                    switch="bool"
                                    name="allowBtn"
                                />
                                <label for="switch" data-on-label="Aktif"
                                       data-off-label="Pasif"></label>
                            </div>
                        </div>
                        <div class="col-lg-7 button-information-container" style="border: 1px solid #ccc;border-radius: 10px;margin-top:20px;margin-bottom: 20px;padding:10px;display:none;">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Buton Başlık</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Slider Üstündeki Buton Yazısı" name="btnCaption"
                                           id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Button URL</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Slider Üzerindeki Buton Gideceği Link" name="btnUrl"
                                           id="example-text-input">
                                </div>
                            </div>

                        </div>



                        <div class="form-group row text-right">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"> Ekle</button>
                                <a href="{{route('Sliders.index')}}" class="btn btn-danger"> İptal </a>
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
