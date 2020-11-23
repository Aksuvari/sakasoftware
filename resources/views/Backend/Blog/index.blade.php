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
                    <h4 class="card-title">Blog Listeleri</h4>
                    <p class="card-title-desc">YYönetim Panelinden Eklemiş Olduğunuz Blog Listesi
                    </p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>İçerik Başlık</th>
                                <th>Durumu</th>
                                <th>Slider Gözüksün</th>
                                <th>Anasayfa'da Gözüksün</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td class="text-center">
                                    <input  class="switch" d="toggle-one" type="checkbox" checked data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                                </td>
                                <td class="text-center">
                                    <input  class="switch" d="toggle-one" type="checkbox" checked data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                                </td>
                                <td class="text-center">
                                    <input  class="switch" id="toggle-one" type="checkbox" checked data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                                </td>

                                <td>
                                    <div class=" row text-center">
                                        <div class="col-lg-4">
                                            <a href="" title="Düzenle" class="btn btn-outline-primary waves-effect waves-light btn-sm"> Düzenle</a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="" title="Sil" class="btn btn-outline-danger waves-effect waves-light btn-sm"> Sil</a>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td class="text-center">
                                      <div class="button-items">
                                          <a href=""
                                             class="btn btn-outline-primary waves-effect waves-light btn-sm">Düzenle</a>
                                          <form action="" method="post" >
                                              <button type="submit" class="btn btn-outline-danger waves-effect waves-light btn-sm">Sil</button>
                                          </form>
                                      </div>

                                  </td>--}}

                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('#toggle-one').bootstrapToggle();
        })
    </script>
@endsection
