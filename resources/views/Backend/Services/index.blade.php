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
                    <h4 class="card-title">Hizmet Listeleri</h4>
                    <p class="card-title-desc">Yönetim Panelinden Eklemiş Olduğunuz Hizmetlerimiz Listesi
                    </p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="{{route('Services.create')}}" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-striped table-hover content-container" >

                            <thead>
                            <tr>
                                <th class="text-center"> <i class="bx bx-menu"></i> </th>
                                <th class="text-center">Başlık</th>
                                <th class="text-center">Durumu</th>
                                <th class="text-center">Anasayfa'da Gözüksün</th>
                                <th class="text-center">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="sortable" data-url="{{route('Services.rankSetter')}}">

                            <form action="{{route('Services.rankSetter')}}" method="post">
                                @csrf
                                @foreach($services as $service)

                                    <tr>
                                        <td class="ordericon">
                                            #{{$service->id}}
                                        </td>
                                        <td class="text-center">{{$service->title}}</td>

                                        <td class="text-center">
                                            <form action="{{ route('Services.isActiveSetter',$service->id)}}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{route('Services.isActiveSetter',$service->id) }}"
                                                    class="isActive"
                                                    type="checkbox"
                                                    id="switch{{$service->id}}"
                                                    switch="bool"
                                                    {{($service->isActive) ? "checked" : ""}}
                                                />
                                                <label for="switch{{$service->id}}" data-on-label="Aktif" data-off-label="Pasif"></label>
                                            </form>
                                        </td>

                                        <td class="text-center">
                                            <form action="{{ route('Services.homePageView',$service->id) }}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{ route('Services.homePageView',$service->id) }}"
                                                    class="homePageView"
                                                    type="checkbox"
                                                    id="anasayfa{{$service->id}}"
                                                    switch="bool"
                                                    {{($service->anasayfa) ? "checked" : ""}}
                                                />
                                                <label for="anasayfa{{$service->id}}" data-on-label="Aktif"
                                                       data-off-label="Pasif"></label>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <div class="button-items">
                                                <form action="{{route('Services.edit',$service->id)}}"  class="icform">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light btn-sm" >Düzenle</button>
                                                </form>
                                                <button onclick="deleteConfirmation({{$service->id}})"
                                                        class="btn btn-outline-danger waves-effect waves-light btn-sm">Sil
                                                </button>
                                            </div>

                                        </td>

                                    </tr>
                                @endforeach
                            </form>
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
        function deleteConfirmation(id) {
            swal.fire({
                title: "Veri Silinecek?",
                icon: 'question',
                text: "Emin misiniz?!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Evet!",
                cancelButtonText: "İptal",
                reverseButtons: !0
            }).then(function (e) {
                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        type: 'POST',
                        url: "{{url('manager/service/delete')}}/" + id,
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (results) {
                            if (results.success === true) {
                                swal.fire("Başarılı!", results.message, "success");
                                setTimeout(function(){
                                    location.reload();
                                },1000);
                            } else {
                                swal.fire("Error!", results.message, "error");
                            }
                        }
                    });
                } else {
                    e.dismiss;
                }
            }, function (dismiss) {
                return false;
            })
        }
    </script>
@endsection
