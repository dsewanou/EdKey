<section class="services services-boxed mega-section  " id="services">
    <div class="container">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Nos
                    fonctionnalités</span>
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>Nos fonctionnalités
                </h2>
                <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">EdKey incarne la nouvelle ère de la
                    digitalisation éducative : un écosystème numérique complet et innovant conçu pour structurer,
                    optimiser et sublimer l’ensemble des établissements d’enseignement, du primaire à l’université.</p>
            </div>
            <!-- <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    ">Toutes les
                    fonctionnalités
                    <i class="bi bi-arrow-right icon "></i></a></div> -->
        </div>
        <div class="row gx-4 gy-4 services-row text-center">
            @foreach($services as $index => $service)
                <div class="col-12 col-md-6  col-lg-4 mx-auto ">
                    <!--Start service box-->
                    <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0"
                        data-wow-delay=".{{ $index + 1 }}s">
                        <div class="service-icon"><i class="{{ $service['icon'] }} font-icon"></i></div><span
                            class="service-num hollow-text">{{ $index + 1 }} </span>
                        <div class="service-content">
                            <h3 class="service-title">{{ $service['title'] }}</h3>
                            <p class="service-text">{{ $service['text'] }}</p>
                        </div>
                        <!-- <a class="read-more" href="{{ $service['url'] }}">Découvrir<i
                                class="bi bi-arrow-right icon "></i></a> -->
                    </div>
                    <!-- End service box-->
                </div>
            @endforeach
        </div>
    </div>
</section>