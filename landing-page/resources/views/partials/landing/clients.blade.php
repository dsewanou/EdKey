<section class="our-clients  mega-section   wow fadeInUp" id="our-clients" data-wow-delay="0.2s">
    <div class="container">
        <div class="sec-heading   centered ">
            <div class="content-area">
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">trusted by over 500 clients around the world
                </h2>
            </div>
        </div>
        <div class=" clients-logos ">
            <!--Swiper-->
            <div class="swiper-container">
                <div class="swiper-wrapper clients-logo-wrapper wow fadeIn " data-wow-delay=".02s">
                    @foreach($clients as $client)
                        <div class="swiper-slide">
                            <div class="client-logo  "><a href="#0"><img class="img-fluid logo " loading="lazy"
                                        src="{{ asset($client['logo']) }}" alt="{{ $client['name'] }}"></a></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>