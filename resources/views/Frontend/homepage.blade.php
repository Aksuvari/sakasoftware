@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <section class="benefits-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="benefits-thumb">
                        <img src="{{asset('frontend')}}/assets/images/ilke.jpg" alt="ilke">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="benefits-content">
                        <div class="benefits-title">
                            <h3 class="title">Çalışma İlkelerimiz.</h3>
                        </div>
                        <div class="faq-accordion">
                            <div class="accrodion-grp"  data-grp-name="faq-accrodion">
                                <div class="accrodion active  animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                                    <div class="accrodion-inner">
                                        <div class="accrodion-title">
                                            <h4>Misyonumuz</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div><!-- /.accrodion-inner -->
                                </div>
                                <div class="accrodion   animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="300ms">
                                    <div class="accrodion-inner">
                                        <div class="accrodion-title">
                                            <h4>Vizyonumuz</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div><!-- /.accrodion-inner -->
                                </div>
                                <div class="accrodion  animated wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="600ms">
                                    <div class="accrodion-inner">
                                        <div class="accrodion-title">
                                            <h4>Kurumsal</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div><!-- /.accrodion-inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits-pattern">
            <img src="{{asset('frontend')}}/assets/images/benefits-pattern.png" alt="">
        </div>
        <div class="benefits-dot">
            <img src="{{asset('frontend')}}/assets/images/benefits-dot.png" alt="">
        </div>
    </section>
    <div class="trusted-area bg_cover pt-120 pb-120" style="background-image: url({{'frontend'}}/assets/images/contact-b.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="trusted-item text-center">
                        <h3 class="title">Bizimle İletişime Geçin..</h3>
                        <a class="main-btn" href="book-a-tour.html">İletişim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="services-area pt-90 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="services-book mt-30">
                        <h3 class="title">Diğer Hizmetlerimiz için tıklayın</h3>
                        <a class="main-btn main-btn-2" href="">Hizmetlerimiz</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-pattern">
            <img src="{{asset('frontend')}}/assets/images/services-pattern.png" alt="pattern">
        </div>
        <div class="services-dot">
            <img src="{{asset('frontend')}}/assets/images/services-dot.png" alt="pattern">
        </div>
    </section>

    <section class="codesk-changing-area bg_cover" style="background-image: url({{asset('frontend')}}/assets/images/codesk-changing-bg.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="codesk-changing-text">
                        <h3 class="title">Saka Software ile Bakış Açınızı Değiştirin</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="codesk-changing-play text-left text-lg-right">
                        <a class="main-btn video-popup" href="https://www.youtube.com/watch?v=_9MEYFNyilQ"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="testimonial-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-title text-center">
                        <h2 class="title">BLOG</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="news-2-area news-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="news-item mt-30">
                        <div class="news-thumb">
                            <img src="" alt="Mobil Uygulamaların Şirketler İçin Önemi Nedir ?">
                        </div>
                        <div class="news-content content-container">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar"></i> 08 Ağu 2020
                                </li>
                                <li><i class="fa fa-eye"></i> 96 </li>
                            </ul>
                            <h3 class="title">Mobil Uygulamaların Şirketler İçin Önemi Nedir ?</h3>
                            <a href="">Devamı
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="news-item mt-30">
                        <div class="news-thumb">
                            <img src="" alt="Yazılım Nedir? Niye Önemlidir? Yazılım Çeşitleri Nelerdir?">
                        </div>
                        <div class="news-content content-container">
                            <ul>
                                <li>
                                    <i class="fa fa-calendar"></i> 29 Tem 2020
                                </li>
                                <li><i class="fa fa-eye"></i> 149 </li>
                            </ul>
                            <h3 class="title">Yazılım Nedir? Niye Önemlidir? Yazılım Çeşitleri Nelerdir?</h3>
                            <a href="https://sakasoftware.com/blog-detail/yazilim-nedir-niye-onemlidir-yazilim-cesitleri-nelerdir">Devamı
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
