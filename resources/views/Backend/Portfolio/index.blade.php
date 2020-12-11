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
                    <h4 class="card-title">Portfolyo Listeleri</h4>
                    <p class="card-title-desc">Yönetim Panelinden Eklemiş Olduğunuz Portfolyoların Listesi</p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="{{route('Ports.create')}}" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <thead>
                            <tr>
                                <th> <i class="bx-menu"></i></th>
                                <th>Proje Adı</th>
                                <th>Proje Türü</th>
                                <th>Proje Url</th>
                                <th>Durumu</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="sortable" data-url="{{route('Ports.rankSetter')}}">

                            <form action="{{route('Ports.rankSetter')}}" method="post">
                                @csrf
                                @foreach($ports as $port)

                                    <tr id="{{$port->id}}">
                                        <td class="text-center">
                                            <i class="bx-menu"></i>
                                        </td>
                                        <td class="text-center">{{$port->title}}</td>
                                        <td class="text-center">{{$port->getType->name}}</td>
                                        <td class="text-center">{{$port->project_url}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('Ports.isActiveSetter',$port->id)}}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{route('Ports.isActiveSetter',$port->id) }}"
                                                    class="isActive"
                                                    type="checkbox"
                                                    id="switch{{$port->id}}"
                                                    switch="bool"
                                                    {{($port->isActive) ? "checked" : ""}}
                                                />
                                                <label for="switch{{$port->id}}" data-on-label="Aktif" data-off-label="Pasif"></label>
                                            </form>
                                        </td>

                                        <td class="text-center">
                                            <div class="button-items">
                                                <form action="{{route('Ports.edit',$port->id)}}" >
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light btn-sm" >Düzenle</button>
                                                </form>
                                                <form action="{{route('Ports.delete',$port->id)}}" method="post" >
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
