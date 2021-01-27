@extends('Frontend.Partials.master')
@section('pagetitle')

@endsection

@section('page_css')

@endsection

@section('content')


    <div class="mb-6">
        <h2>Projelerimiz</h2>
        <div class="row gx-5 mt-lg-5 mt-md-4 mt-3">

            @foreach($projects as $project)

                <div class="col-lg-3">
                    <img src="{{get_picture('portfolio',$project->image)}}" alt="{{$project->title}}">

                    <h4 class="my-4">{{$project->title}}</h4>
                    <p>{!! $project->description  !!}</p>
                </div>
            @endforeach

        </div>

    </div>

    <div class="row justify-content-lg-center">
        <div class="col-lg-8">

            <div class="comments comments-area container-small mt-4" id="comments">
                <div class="comment-respond" id="respond">
                    <h3 class="comment-reply-title mt-3" id="reply-title">İstek ve Şikayet</h3>
                    <p>Bizimle İletişime Geçin</p>
                    <form class="comment-form" id="commentform" action="{{route('deneme')}}" method="post"
                          novalidate="">
                        @csrf
                        <p class="comment-form-comment form-group">
                            <label for="comment">Mesaj Yaz</label>
                            <textarea class="form-control input-outline" id="comment" name="message" cols="45" rows="7"
                                      required="required"></textarea>
                        </p>
                        <p class="comment-form-author form-group">
                            <label for="author">Name <span class="required">*</span></label>
                            <input class="form-control input-outline" id="name" name="name" type="text" value=""
                                   size="30" maxlength="245" required="required">
                        </p>
                        <p class="comment-form-email form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input class="form-control input-outline" id="email" name="subject" type="email" value=""
                                   size="30" maxlength="100" aria-describedby="email-notes" required="required">
                        </p>
                        <p class="comment-form-checkbox form-group">
                            <input id="checkbox" type="checkbox" name="subject" value="Email">
                            <label for=""> Tanıtım</label>
                            <br>
                            <input id="checkbox" type="checkbox" name="subject" value="Email">
                            <label for=""> Mobil Uygulama</label>
                            <br>
                            <input id="checkbox" type="checkbox" name="subject" value="Email">
                            <label for=""> Eticaret Uygulamaları</label>
                            <br>
                            <input id="checkbox" type="checkbox" name="subject" value="Email">
                            <label for=""> Otomasyon Sistemleri</label>
                            <br>

                            <input id="izin_1" type="checkbox" name="izin" value="1" data-validation="required"
                                   data-validation-error-msg="Onay zorunludur. ">
                            <label for="izin_1"><a data-fancybox data-touch="false" href="#izin1">Bilgilendirme yazısını
                                    okudum kabul ediyorum.</a></label>
                        {{--<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="mySmallModalLabel">Not Detayı</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>asdasdsa</p>

                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>--}}

                        <p class="form-submit">
                            <button class="btn btn-outline" type="submit">Formu Gönder</button>
                        </p>


                    </form>
                </div>
                <!-- #respond-->
            </div>
            <!-- End Comments Area-->
        </div>
    </div>
    </div>


@endsection

@section('script')

@endsection
