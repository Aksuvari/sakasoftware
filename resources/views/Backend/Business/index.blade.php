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
                                <th>#</th>
                                <th>Proje Adı</th>
                                <th>Müşteri Adı</th>
                                <th>İlgilenen Kişi</th>
                                <th>Yapan Kişi</th>
                                <th>Müşteri Tel no</th>
                                <th>Not</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($business as $busines)
                                 @csrf
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$busines->title}}</td>
                                <td>{{$busines->costumer_name}}</td>
                                <td>{{$busines->costumer_contact}}</td>
                                <td>{{$busines->aut_name}}</td>
                                <td>{{$busines->aut_maker_name}}</td>
                                <td class="text-center">

                                        <div class=" text-center">
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-outline-warning waves-effect waves-light btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">Not Detay</button>
                                        </div>

                                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0" id="mySmallModalLabel">Small modal</h5>
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
                            @endforeach
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
