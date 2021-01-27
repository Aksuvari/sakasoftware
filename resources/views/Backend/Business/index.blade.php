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
                    <h4 class="card-title">İş Takip Yönetimi</h4>
                    <p class="card-title-desc">Yönetim Panelinden Eklemiş Olduğunuz İşlerin Listesi
                    </p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="{{route('business.create')}}" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <thead>
                            <tr>
                                <th class="text-center"> <i class="bx bx-menu"></i> </th>
                                <th class="text-center">Proje Adı</th>
                                <th class="text-center">Müşteri Adı</th>
                                <th class="text-center">Müşteri Tel no</th>
                                <th class="text-center">İlgilenen Kişi</th>
                                <th class="text-center">Yapan Kişi</th>
                                <th class="text-center">İş Baş</th>
                                <th class="text-center">İş Son</th>
                                <th class="text-center">Not</th>
                                <th class="text-center">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sayac=0;
                                ?>
                                @foreach($business as $busines)
                                 @csrf
                            <tr>
                                <th  class="text-center" scope="row">{{$busines->id}}</th>
                                <td class="text-center">{{$busines->title}}</td>
                                <td class="text-center">{{$busines->costumer_name}}</td>
                                <td class="text-center">{{$busines->costumer_contact}}</td>
                                <td class="text-center">{{$busines->aut_name}}</td>
                                <td class="text-center">{{$busines->aut_maker_name}}</td>
                                <td class="text-center">{{$busines->start_date}}</td>
                                <td class="text-center">{{$busines->due_date}}</td>
                                <td class="text-center">

                                        <div class=" text-center">
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-outline-warning waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Not Detay</button>
                                        </div>

                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="mySmallModalLabel">Not Detayı</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{$busines->contentt}}</p>

                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                </td>

                                <td>
                                    <div class=" row text-center">
                                        <div class="col-lg-4">
                                            <a href="{{route('business.edit',$busines->id)}}" title="Düzenle" class="btn btn-outline-primary waves-effect waves-light btn-sm"> Düzenle</a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="{{route('delete',$busines->id)}}" title="Sil" class="btn btn-outline-danger waves-effect waves-light btn-sm"> Sil</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                                 <?php
                                 $sayac++;
                                 ?>
                            @endforeach
                            @if($sayac==0)
                                <tr>

                                    <td colspan="10" class="text-center">
                                        <div class="alert alert-danger" role="alert"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    KAYITLAR BULUNAMADI!! Lütfen Yeni Kayıt Yapınız.
                                                </font></font></div>
                                    </td>
                                </tr>
                                @endif
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
