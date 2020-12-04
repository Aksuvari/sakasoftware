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
                    <h4 class="card-title">İş Takip Yönetimi</h4>
                    <p class="card-title-desc">Firmamız da bulunan yaptığımız işlere ait içerikler</p>

                    <form action="{{route('business.update',$business->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Proje Adı</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="title" id="title" value="{{$business->title}}">
                                @error('title')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Müsteri Adı</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="costumer_name" id="costumer_name" value="{{$business->costumer_name}}">
                                @error('costumer_name')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-md-2 col-form-label">Müşteri Tel No</label>
                            <div class="col-md-10">
                                <input class="form-control" type="tel" value="{{$business->costumer_contact}}" name="costumer_contact" id="costumer_contact">
                                @error('costumer_contact')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">İlgilenen Kişi</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="aut_name" value="{{$business->aut_name}}" id="aut_name">
                                @error('aut_name')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Yapan Kişi</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="aut_maker_name" id="aut_maker_name" value="{{$business->aut_maker_name}}">
                                @error('aut_maker_name')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <label for="example-tel-input" class="col-md-2 col-form-label">Not</label>
                            <div>
                                <textarea  class="form-control" rows="5" name="contentt" id="contentt" >{!!$business->contentt !!}}</textarea>
                                @error('contentt')
                                <div class="alert alert-danger"> {{$message}}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row text-right">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"> Ekle</button>
                                <a href="{{route('business.index')}}" class="btn btn-danger"> İptal </a>
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
