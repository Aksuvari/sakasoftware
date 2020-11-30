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
                    <p class="card-title-desc">Yönetim Panelinden Eklemiş Olduğunuz Blog Listesi
                    </p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="{{route('Blogs.create')}}" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
                    </div>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-striped table-hover content-container" >

                            <thead>
                            <tr>
                                <th> <i class="bx-menu"></i> </th>
                                <th>Başlık</th>
                                <th>İçerik</th>
                                <th>Durumu</th>
                                <th>Slider Gözüksün</th>
                                <th>Anasayfa'da Gözüksün</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody class="sortable" data-url="{{route('Blogs.rankSetter')}}">

                            <form action="{{route('Blogs.rankSetter')}}" method="post">
                                @csrf
                                @foreach($blog as $blogs)

                                    <tr>
                                        <td class="ordericon">
                                            #{{$blogs->id}}
                                        </td>
                                        <td class="text-center">{{$blogs->title}}</td>
                                        <td class="text-center">{!! $blogs->description !!}</td>
                                        <td class="text-center">
                                            <form action="{{ route('Blogs.isActiveSetter',$blogs->id)}}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{route('Blogs.isActiveSetter',$blogs->id) }}"
                                                    class="isActive"
                                                    type="checkbox"
                                                    id="switch{{$blogs->id}}"
                                                    switch="bool"
                                                    {{($blogs->isActive) ? "checked" : ""}}
                                                />
                                                <label for="switch{{$blogs->id}}" data-on-label="Aktif" data-off-label="Pasif"></label>
                                            </form>
                                        </td>

                                        <td class="text-center">
                                            <input  class="switch" d="toggle-one" type="checkbox" checked data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger">
                                        </td>

                                        <td class="text-center">
                                            <form action="{{ route('Blogs.homePageView',$blogs->id) }}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{ route('Blogs.homePageView',$blogs->id) }}"
                                                    class="homePageView"
                                                    type="checkbox"
                                                    id="anasayfa{{$blogs->id}}"
                                                    switch="bool"
                                                    {{($blogs->anasayfa) ? "checked" : ""}}
                                                />
                                                <label for="anasayfa{{$blogs->id}}" data-on-label="Aktif"
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
                                                    <form action="{{route('Blogs.edit',$blogs->id)}}" >
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-primary waves-effect waves-light btn-sm" >Düzenle</button>
                                                    </form>
                                                     <form action="{{route('Blogs.delete',$blogs->id)}}" method="post" >
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
