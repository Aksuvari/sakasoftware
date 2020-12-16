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
                                <th class="text-center"> <i class="bx bx-menu"></i></th>
                                <th class="text-center">Proje Adı</th>
                                <th class="text-center">Proje Türü</th>
                                <th class="text-center">Proje Url</th>
                                <th class="text-center">Durumu</th>
                                <th class="text-center">İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="sortable" data-url="{{route('Ports.rankSetter')}}">

                            <form action="{{route('Ports.rankSetter')}}" method="post">
                                @csrf
                                @foreach($projects as $project)

                                    <tr id="{{$project->id}}">
                                        <td class="text-center">
                                            <i class="bx bx-menu"></i>
                                        </td>
                                        <td class="text-center">{{$project->title}}</td>
                                        <td class="text-center">{{$project->getProject->name}}</td>
                                        <td class="text-center">{{$project->project_url}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('Ports.isActiveSetter',$project->id)}}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{route('Ports.isActiveSetter',$project->id) }}"
                                                    class="isActive"
                                                    type="checkbox"
                                                    id="switch{{$project->id}}"
                                                    switch="bool"
                                                    {{($project->isActive) ? "checked" : ""}}
                                                />
                                                <label for="switch{{$project->id}}" data-on-label="Aktif" data-off-label="Pasif"></label>
                                            </form>
                                        </td>

                                        <td class="text-center">
                                            <div class="button-items">
                                                <form action="{{route('Ports.edit',$project->id)}}"  class="icform" >
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light btn-sm" >Düzenle</button>
                                                </form>
                                                <form action="{{route('Ports.delete',$project->id)}}" method="post"  class="icform" >
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
