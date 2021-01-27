@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <br> <br> <br> <br> <br>

    <section class="main-content">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4 col-sm-6">
                        <article class="main-post">
                            <div class="featured-post">
                                <a href="#" title="">
                                    <img src="{{asset('frontend/fnc')}}/images/blog/blog.jpeg" alt="">
                                </a>
                            </div><!-- /.featured-post -->
                            <div class="entry-content">
                                <h2>
                                    {{$service->title}}

                                </h2>
                                <h4>
                                <a href="{{route('hizmetdetay',$service->slug)}}">

                                  {!! \Illuminate\Support\Str::limit($service->description,75,'..') !!}


                                    <p> Devamı <i class="fa fa-arrow-right"></i></p>
                                </a>
                                </h4>
                            </div><!-- /.entry-content -->
                        </article>
                    </div>
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


  <!--  <section class="write-massage-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="write-massage-content">
                        <div class="write-massage-title">
                            <h3 class="title">Talep Edin Biz Size Ulaşalım</h3>
                        </div>
                        <div class="write-massage-input">
                            <form action="https://sakasoftware.com/request" method="post">
                                <input type="hidden" name="_token" value="AniI1pD4vPC3ZCmAf5ZQYBHtPakKVLLMywmqNqsk">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input type="text" name="name" placeholder="İsim Soyisim">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input type="text" name="phone" placeholder="Telefon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input type="text" name="subject" placeholder="Konu">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input type="text" name="app_area" placeholder="Uygulama Alanı">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input type="text" name="company_name" placeholder="Şirket İsmi(Opsiyonel)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-box mt-10">
                                            <textarea name="app_details" id="app_details" cols="30" rows="10" placeholder="Talebiniz hakkında detay"></textarea>
                                            <button type="submit" class="main-btn main-btn-2">G Ö N D E R</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="book-a-tour-info">
                        <span>Bize telefon ile ulaşmak isterseniz?</span>
                        <p>Yardımcı olabileceğimiz telefon numaralarımız aşağıdadır. İlgilinizi için teşekkür ederiz. <br>Saka Software</p>
                        <h3 class="title">+90 505 563 9 849 <br> +90 544 923 0 666</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->

@endsection

@section('script')

@endsection
