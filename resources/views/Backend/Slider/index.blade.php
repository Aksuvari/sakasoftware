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
                    <h4 class="card-title">Slide Listeleri</h4>
                    <p class="card-title-desc">Yönetim Panelinden Eklemiş Olduğunuz Slide Listesi</p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
                    </div>
                    <div class="table-rep-plugin">
                        <div class="table-wrapper">
                            <div class="btn-toolbar">
                                </table>
                                </div>
                                <table id="tech-companies-1" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th id="tech-companies-1-col-0">Başlık</th>
                                        <th data-priority="1" id="tech-companies-1-col-1">Görseller</th>
                                        <th data-priority="3" id="tech-companies-1-col-2">Durumu</th>
                                        <th data-priority="1" id="tech-companies-1-col-3">İşlemler</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tbody>
                                    <tr>
                                        <th class="text-center">GOOG <span class="co-name">Google Inc.</span></th>
                                        <td class="text-center">
                                            <img src="">
                                        </td>
                                        <td class="text-center">
                                            <input  class="switch" id="toggle-one" type="checkbox" checked data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger"> </td>
                                        <td class="text-center">
                                            <div class="row text-center">
                                                <div class="col-lg-4 ">
                                                    <a href="" title="Düzenle" class="btn btn-outline-primary waves-effect waves-light btn-sm"> Düzenle</a>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="" title="Sil" class="btn btn-outline-danger waves-effect waves-light btn-sm"> Sil</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
@endsection

@section('script')
<script src="{{asset('backend')}}/assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>
@endsection
