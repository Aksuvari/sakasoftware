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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Site Ayarları</h4>
                    <p class="card-title-desc">Bu kısımda firma bilgileri ve ayarları yapılmaktadır.</p>

                    <form method="post" action="{{route('setting_update',$setting->id)}}" enctype="multipart/form-data">
                        @csrf
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Firma Bilgileri </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">İletişim Bİlgileri</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Sosyal Medya Bilgileri</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">Logolar</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home1" role="tabpanel">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Firma Adı</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="company_name" value="{{$setting->company_name}}" id="example-text-input" placeholder="Firma Adı">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Firma Bilgileri</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="description" value="{{$setting->description}}" id="example-text-input"  placeholder="Firma Bilgileri">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Keywords</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="keywords" value="{{$setting->keywords}}" id="example-text-input">
                                    </div>
                                </div>

                            </div>
                        <div class="tab-pane" id="profile1" role="tabpanel">
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" name="email" value="{{$setting->email}}" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-2 col-form-label">Telefon</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="tel" name="phone_1" value="{{$setting->phone_1}}" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-md-2 col-form-label">Telefon 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="tel" name="phone_2" value="{{$setting->phone_2}}" id="">
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Adres</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="address" value="{{$setting->address}}" id="">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="messages1" role="tabpanel">

                                <div class="form-group row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Facebook</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="url" name="facebook" value="{{$setting->facebook}}" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Twitter</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="url" name="twitter" value="{{$setting->twitter}}" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Instagram</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="url" name="instagram" value="{{$setting->instagram}}" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-md-2 col-form-label">Youtube</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="url" name="youtube" value="{{$setting->youtube}}" id="">
                                    </div>
                                </div>

                        </div>
                        <div class="tab-pane" id="settings1" role="tabpanel">

                            <div class="form-group row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Site Üst Logo</label>
                                <div class="col-md-10">
                                    <input  type="file"   class="form-control"name="logo" value="{{$setting->logo}}" multiple="multiple">
                                </div>
                             </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Site Alt Logo</label>
                                <div class="col-md-10">
                                    <input  type="file"  class="form-control" name="logo2" value="{{$setting->logo2}}" multiple="multiple">
                                </div>
                             </div>
                            <div class="form-group row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Site Icon Logo</label>
                                <div class="col-md-10">
                                    <input  type="file" class="form-control" name="icon" value="{{$setting->icon}}" multiple="multiple">
                                </div>
                             </div>

                    </div>

                    <div class="col-lg-12 text-lg-right">
                        <button class="btn btn-primary btn-lg" type="submit">Güncelle</button>
                        <a class="btn btn-danger btn-lg" href="">İptal</a>
                    </div>
                </div>

                    </form>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection
