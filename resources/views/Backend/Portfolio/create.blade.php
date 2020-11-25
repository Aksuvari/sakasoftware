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
                    <form action="">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Proje Türü</label>
                        <div class="col-md-10">
                            <select class="form-control">
                                <option value="">Proje Türü</option>
                                <option>Tanıtım</option>
                                <option>Mobil Uygulama</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Başlık</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-md-2 col-form-label">Proje Url</label>
                        <div class="col-md-10">
                            <input class="form-control" type="url" value="" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">İçerik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="" value="Burayı ck5 editörü eklenecek">
                        </div>
                    </div>

                    <div class="form-group row text-right">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary"> Ekle</button>
                            <a href="https://sakasoftware.com/manager/content" class="btn btn-danger"> İptal </a>
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
@endsection