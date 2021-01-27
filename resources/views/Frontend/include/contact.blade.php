
    <section class="cospo-page" id="contact">

        <div class="background">
            <img src="{{ asset('frontend/img/artist/bg/bg-6.jpg') }}" alt=""/>
        </div>

        <div class="wrapper-scroll">
            <div class="scroll">

                <div class="content row">
                    <div class="col-md-5">

                        <h2>Contact</h2>
                        <p>ADDRESS:
                            <br/>
                            12th Street, Berge 50 60 NORWAY
                            <button data-action="show-map" class="show-map">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 18 23" style="enable-background:new 0 0 18 23;" xml:space="preserve" fill="#ffffff">
                      <path
                              style="fill-rule:evenodd;clip-rule:evenodd;"
                              d="M9,0C4.029,0,0,4.183,0,9.344S9,23,9,23s9-8.496,9-13.656S13.97,0,9,0z
                    	 M9,17.25c-4.206,0-7.616-3.54-7.616-7.906S4.794,1.437,9,1.437c4.206,0,7.615,3.54,7.615,7.906S13.205,17.25,9,17.25z"/>
                                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M9,7.906c0.765,0,1.385,0.644,1.385,1.438c0,0.794-0.62,1.438-1.385,1.438
                    	c-0.765,0-1.385-0.644-1.385-1.438C7.615,8.55,8.235,7.906,9,7.906z"/>
                    </svg>
                            </button>
                        </p>

                        <p>MAIL:
                            <br/>
                            contact@yourcompany.com</p>

                        <p>PHONE:
                            <br/>
                            +0(800)-123-654, +0(800)-123-654</p>

                        <h4>Your Message</h4>
                        <form action="{{ route('deneme') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" placeholder="Email" name="email">
                                </div>

                                <div class="col-md-3">
                                    <input type="text" placeholder="subject" name="subject">
                                </div>
                            </div>
                            <textarea placeholder="Message" class="single-line" name="message"></textarea>
                            <div class="form-message"></div>
                           <button>G ö n d e r</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Google map API -->
        <div class="map">
            <div class="map-canvas"></div>
        </div>

    </section>

