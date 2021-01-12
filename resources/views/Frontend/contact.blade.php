@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <section class="flat-row flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-title style1 center">
                        <h2>Get in touch</h2>
                    </div>
                    <div class="flat-contact-form">
                        <form id="contactform" method="post" action="{{route('deneme')}}" class="form-info">
                            @csrf
                            <div class="field-row">
                                <label for="Cleaning"><span>Cleaning</span></label>
                                  <input type="checkbox" name="322[]" id="Catering" value="Catering">
                                   <label for="Herr"><span></span>Kadın</label>
                                   <input type="radio" name="323[]" id="Frau" value="Frau">
                                   <label for="Herr"><span></span>Erkek</label>
                                   <input type="radio" name="323[]" id="Frau" value="Frau">
                                   <p class="input-info"><input placeholder="Ad *" required type="text" name="324" id="id_324" value="" ></p>
                                   <p class="input-info"><input type="email" name="your-email" id="email" value="" placeholder="Email Address *" required></p>
                                   <p class="input-info"><input type="text" name="your-phone" id="phone" value="" placeholder="Phone numbers *" required></p>
                                <label for="telephone">Telefon Numarınız</label>
                                <input type="telephone" name="telephone" id="telephone" placeholder="(555) 555-5555">

                           <div class="input-text">
                                <p class="input-info"> <textarea id="" name="your-message" placeholder="Message *" required></textarea></p>
                            </div>
                            </div>
                        </form> <!-- /.flat-form-info -->
                    </div>
                    {{--<form  method="post" action="{{route('deneme')}}">
                        @csrf
                        <button type="submit">hello MESSAGE</button>
                    </form> --}}
                </div> <!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row-iconbox -->

    <!-- map -->
    <section class="flat-row pdmap">
        <div class="flat-maps" data-address="Cornwall, Vermont, Hoa Kỳ" data-height="500" data-images="images/map/map-1.png" data-name="Themesflat Map"></div>
        <div class="gm-map">
            <div class="map"></div>
        </div>
    </section>
@endsection

@section('script')

@endsection
