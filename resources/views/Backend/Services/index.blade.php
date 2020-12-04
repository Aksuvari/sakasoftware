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
                                <th> <i class="bx-menu"></i> </th>
                                <th>Başlık</th>
                                <th>Durumu</th>
                                <th>Anasayfa'da Gözüksün</th>
                                <th>İşlemler</th>
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
                                                <form action="{{route('Services.edit',$service->id)}}" >
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light btn-sm" >Düzenle</button>
                                                </form>
                                                <form action="{{route('Services.delete',$service->id)}}" method="post" >
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger waves-effect waves-light btn-sm">Sil</button>
                                                </form>
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
        $(function() {
            $('#toggle-one').bootstrapToggle();
        })
    </script>
@endsection
