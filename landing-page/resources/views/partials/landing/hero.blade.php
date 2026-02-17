<section class="page-hero hero-swiper-slider slide-effect  d-flex align-items-center" id="page-hero">
    <div class="particles-js  bubels" id="particles-js"></div>
    <!--Start  Swiper JS slider-->
    <div class="slider swiper-container">
        <div class="swiper-wrapper ">
            @foreach($heroSlides as $slide)
                <!-- slide-->
                <div class="swiper-slide">
                    <div class="slide-bg-img" data-bg-img="{{ asset($slide['bg_img']) }}">
                        <div class="overlay-gradient-color"></div>
                    </div>
                    <div class="container">
                        <div class="hero-text-area  content-always-light   ">
                            <div class="row g-0">
                                <div class="col-12 col-lg-8 ">
                                    <div class="row ">
                                        <div class="col-12   ">
                                            <div class="hero-social-icons mb-3 ">
                                                <div class="sc-wrapper dir-row sc-flat">
                                                    <ul class="sc-list">
                                                        <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"
                                                                title="social media icon"><i
                                                                    class="fab fa-facebook-f sc-icon"></i></a></li>
                                                        <li class="sc-item " title="youtube"><a class="sc-link" href="#0"
                                                                title="social media icon"><i
                                                                    class="fab fa-youtube sc-icon"></i></a></li>
                                                        <li class="sc-item " title="instagram"><a class="sc-link" href="#0"
                                                                title="social media icon"><i
                                                                    class="fab fa-instagram sc-icon"></i></a></li>
                                                        <li class="sc-item " title="X"><a class="sc-link" href="#0"
                                                                title="social media icon"><i
                                                                    class="fab fa-x-twitter sc-icon"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12     ">
                                            <div class="pre-title">{{ $slide['pre_title'] }}</div>
                                            <h1 class="slide-title  ">{!! $slide['title'] !!}</h1>
                                        </div>
                                        <div class="col-10 ">
                                            <p class="slide-subtitle ">{{ $slide['subtitle'] }}</p>
                                        </div>
                                        <div class="col-12   ">
                                            <div class="cta-links-area ">
                                                @foreach($slide['ctas'] as $cta)
                                                    <a class="{{ $cta['class'] }}"
                                                        href="{{ $cta['url'] }}">{{ $cta['text'] }}</a>
                                                @endforeach
                                                @if(isset($slide['video_url']))
                                                    <div class="play-btn-row-dir  inverted-colors">
                                                        <a class="video-link" href="{{ $slide['video_url'] }}" role="button"
                                                            title="play" data-fancybox="data-fancybox">
                                                            <div class="play-video-btn">
                                                                <div class="play-btn"> <i class="fas fa-play icon"></i></div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="slides-state h-align  ">
            <div class="slide-num curent-slide  "></div>
            <!--Add Pagination-->
            <div class="swiper-pagination"></div>
            <div class="slide-num slides-count  "></div>
        </div>
        <!--Add Arrows -->
        <div class="slider-stacked-arrows">
            <div class="swiper-button-prev   ">
                <div class="left-arrow"><i class="bi bi-chevron-left icon "></i>
                </div>
            </div>
            <div class="swiper-button-next  ">
                <div class="right-arrow"><i class="bi bi-chevron-right icon "></i>
                </div>
            </div>
        </div>
    </div>
</section>