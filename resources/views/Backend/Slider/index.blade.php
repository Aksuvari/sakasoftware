@extends('Backend.Partials.adminmaster')
@section('title')
    Manager Panel
@endsection
@section('page_css')

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
                    <p class="card-title-desc">Yönetim Panelinden Eklemiş Olduğunuz Slider Listesi</p>
                    <div class="col-lg-12 text-right m-b-10">
                        <a href="{{route('Sliders.create')}}" class="btn btn-success "><i class="bx bx-plus"></i> Yeni Ekle</a>
                    </div>
                    <div class="table-rep-plugin">
                        <div class="table-wrapper">
                            <div class="btn-toolbar">
                                </table>
                                </div>
                                <table id="form" class="table table-striped sortable table-bordered content-container" >
                                    <thead>
                                    <tr>
                                        <th  class="text-center"> <i class="bx bx-menu"></i> </th>
                                        <th  class="text-center" >Başlık</th>
                                        <th class="text-center" >Görseller</th>
                                        <th  class="text-center">Durumu</th>
                                        <th class="text-center" >İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tbody  class="sortable" data-url="{{route('Sliders.rankSetter')}}">
                                    <form action="{{route('Sliders.rankSetter')}}" method="post">

                                    @csrf
                                    @foreach($sliders as $slider)
                                    <tr id="ord-{{$slider->id}}">
                                        <td class="text-center">
                                           <i class="bx bx-menu"></i>
                                        </td>
                                        <td class="text-center">
                                            {{$slider->title}}
                                        </td>
                                        <td class="text-center">
                                            {!! $slider->description !!}
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('Sliders.isActiveSetter',$slider->id)}}" method="post">
                                                @csrf
                                                <input
                                                    type="checkbox"
                                                    data-url="{{route('Sliders.isActiveSetter',$slider->id) }}"
                                                    class="isActive"
                                                    type="checkbox"
                                                    id="switch{{$slider->id}}"
                                                    switch="bool"
                                                    {{($slider->isActive) ? "checked" : ""}}
                                                />
                                                <label for="switch{{$slider->id}}" data-on-label="Aktif" data-off-label="Pasif"></label>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <div class="button-items">
                                                <a href="{{route('Sliders.edit',$slider->id)}}" class="btn btn-outline-primary waves-effect waves-light btn-sm">Düzenle</a>
                                                <form action="{{route('Sliders.delete',$slider->id)}}" method="post" onclick="confirmDelete()"  class="icform">
                                                    @csrf
                                                    <button type="submit"  class="btn btn-outline-danger waves-effect waves-light btn-sm">Sil</button>
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
        </div>
        <!-- end col -->
    </div>
@endsection

@section('script')
<script src="{{asset('backend/assets/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>
    <script>

    </script>
@endsection
