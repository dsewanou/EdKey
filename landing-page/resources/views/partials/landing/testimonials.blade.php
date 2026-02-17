<section class="testimonials testimonials-1-col   has-dark-bg  mega-section " id="testimonials-img-bg">
    <div class="overlay-photo-image-bg parallax " data-bg-img="{{ asset('assets/images/sections-bg-images/1.jpg') }}"
        data-bg-opacity=".25"> </div>
    <div class="container">
        <div class="sec-heading  centered ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp "
                    data-wow-delay=".2s">testimonials</span>
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">customers <span
                        class='hollow-text'>testmonials</span></h2>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-10  mx-auto">
                <div class="swiper-container  wow fadeInUp  " data-wow-delay="0.2s">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testmonial-card d-flex align-items-center justify-content-center">
                                    <div class="testimonial-content">
                                        <div class="customer-img "><img class="img-fluid " loading="lazy"
                                                src="{{ asset($testimonial['image']) }}" alt="Slide "></div>
                                        <div class="customer-testimonial">
                                            <div class="content">
                                                <p class="testimonial-text "> {{ $testimonial['text'] }}</p>
                                            </div>
                                        </div>
                                        <div class="customer-info ">
                                            <div class="customer-details">
                                                <p class="customer-name">{{ $testimonial['name'] }}</p>
                                                <p class="customer-role">{{ $testimonial['role'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--navigation buttons-->
                    <div class="swiper-button-prev">
                        <div class="left-arrow"><i class="bi bi-chevron-left icon "></i></div>
                    </div>
                    <div class="swiper-button-next">
                        <div class="right-arrow"><i class="bi bi-chevron-right icon "></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>