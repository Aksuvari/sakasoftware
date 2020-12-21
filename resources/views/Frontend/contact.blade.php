@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <section class="contact-info-area">
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-content">
                            <h3 class="title">Bizimle İletişime Geçin..</h3>
                            <ul>
                                <li><img src="https://sakasoftware.com/site/assets/images/icon/icon-1.png" alt=""> Yenidoğan Mah. Oğulcuklu Cad. Bina No : 15 Mina Apt. Kat : 5 No: 10 Talas / KAYSERİ </li>
                                <li><img src="https://sakasoftware.com/site/assets/images/icon/icon-2.png" alt=""> info@sakasoftware.com </li>
                                <li><img src="https://sakasoftware.com/site/assets/images/icon/icon-3.png" alt=""> +90 505 563 9 849 </li>
                                <li><img src="https://sakasoftware.com/site/assets/images/icon/icon-3.png" alt=""> +90 544 923 0 666 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-thumb">
                            <img src="https://sakasoftware.com/site/assets/images/middle-logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-text">
                            <p>Bazen hayal kurmak insanların zihinlerde oluşturdukları güzel düşüncelerden ibarettir. Ya o düşenceyi gerçekleştirdiğinde sana kattığı gurur verici his işte oda bu işi başardığının kanıtıdır.</p>
                            <p class="text">Saka Software kurmaktaki amacımızda hayallerimizi gerçekleştirmek ve onun vermiş olduğu gurur verici hissi müşterilerimizle paylaşmak.</p>
                            <img src="https://sakasoftware.com/site/assets/images/cesing.png" alt="">
                            <img src="https://sakasoftware.com/site/assets/images/seysigin.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="write-massage-area pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="write-massage-content">
                        <div class="write-massage-title text-center">
                            <h3 class="title">Bize mesaj yaz.</h3>
                        </div>
                        <div class="write-massage-input">
                            <form action="https://sakasoftware.com/sendmail" method="post">
                                <input type="hidden" name="_token" value="AniI1pD4vPC3ZCmAf5ZQYBHtPakKVLLMywmqNqsk">                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input name="name" type="text" placeholder="Adınız Soyadınız">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input name="email" type="text" placeholder="E-Posta Adresiniz">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input name="phone" type="text" placeholder="Telefon Numaranız">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box mt-10">
                                            <input name="subject" type="text" placeholder="Konu">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-box mt-10 text-center">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Mesajınız"></textarea>
                                            <button class="main-btn main-btn-2">Mesajı Gönder</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.9498150830373!2d35.489993315612374!3d38.718961165046764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b120fa645f87d%3A0x6e48fff489dbfc13!2zS0FZLUZBIMSwTsWeQUFU!5e0!3m2!1str!2str!4v1595242062528!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection

@section('script')

@endsection
