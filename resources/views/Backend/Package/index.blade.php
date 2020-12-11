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
                    <h4 class="card-title">Paketler Listeleri</h4>
                    <p class="card-title-desc">Yönetim Panelinden Eklemiş Olduğunuz Paketler Listesi</p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="{{route('Packages.create')}}" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
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
                            <tbody class="sortable" data-url="{{route('Packages.rankSetter')}}">

                            <form action="{{route('Packages.rankSetter')}}" method="post">
                                @csrf
                                @foreach($packages as $package)

                                    <tr id="{{$package->id}}">
                                        <td class="text-center">
                                            <i class="bx-menu"></i>
                                        </td>
                                        <td class="text-center">{{$package->title}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('Packages.isActiveSetter',$package->id)}}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{route('Packages.isActiveSetter',$package->id) }}"
                                                    class="isActive"
                                                    type="checkbox"
                                                    id="switch{{$package->id}}"
                                                    switch="bool"
                                                    {{($package->isActive) ? "checked" : ""}}
                                                />
                                                <label for="switch{{$package->id}}" data-on-label="Aktif" data-off-label="Pasif"></label>
                                            </form>
                                        </td>

                                        <td class="text-center">
                                            <form action="{{ route('Packages.homePageView',$package->id) }}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{ route('Packages.homePageView',$package->id) }}"
                                                    class="homePageView"
                                                    type="checkbox"
                                                    id="anasayfa{{$package->id}}"
                                                    switch="bool"
                                                    {{($package->anasayfa) ? "checked" : ""}}
                                                />
                                                <label for="anasayfa{{$package->id}}" data-on-label="Aktif"
                                                       data-off-label="Pasif"></label>
                                            </form>
                                        </td>

                                        {{--   <td>
                                               <div class=" row text-center">

                                                   <div class="col-lg-4">
                                                       <a href="{{route('Blogs.edit'),$blogs->id}}" title="Düzenle" class="btn btn-outline-primary waves-effect waves-light btn-sm"> Düzenle</a>
                                                   </div>
                                                   <div class="col-lg-2">
                                                       <a href="{{route('Blogs.delete',$blogs->id)}}" title="Sil" class="btn btn-outline-danger waves-effect waves-light btn-sm"> Sil</a>
                                                   </div>
                                               </div>
                                           </td> --}}
                                        <td class="text-center">
                                            <div class="button-items">
                                                <form action="{{route('Packages.edit',$package->id)}}" >
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-primary waves-effect waves-light btn-sm" >Düzenle</button>
                                                </form>
                                                <form action="{{route('Packages.delete',$package->id)}}" method="post" >
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
