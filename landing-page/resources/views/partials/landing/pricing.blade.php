<section class="pricing mega-section  " id="pricing-1">
    <div class="container">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Nos
                    Tarifs</span>
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Des solutions <span
                        class='hollow-text'>adaptées</span> à vos <span class='featured-text'>besoins</span></h2>
                <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Choisissez la formule qui correspond le mieux à
                    la taille et aux objectifs de votre établissement.</p>
            </div>
            <!-- <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    " href="#">Voir
                    tous les tarifs<i class="bi bi-arrow-right icon "></i></a></div> -->
        </div>
        <div class="row">
            @foreach($pricingPlans as $plan)
                <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan mb-4">
                    <div class="plan {{ $plan['featured'] ? 'featured' : '' }} wow fadeInUp h-100 d-flex flex-column text-center"
                        data-wow-delay=".{{ $loop->index + 1 }}s">
                        <div class="plan-head"><i class="{{ $plan['icon'] }} plan-icon"></i>
                            <h4 class="plane-name">{{ $plan['name'] }}</h4>
                            <div class="plan-price">
                                <h3 class="price" style="font-size: 2rem;">{{ $plan['price'] }} <span style="font-size: 1rem; vertical-align: baseline;">FCFA</span></h3>
                                <span class="per">{{ $plan['per'] }}</span>
                            </div>
                        </div>
                        <div class="plan-details flex-grow-1">
                            <ul class="plan-list list-unstyled">
                                @foreach($plan['features'] as $feature)
                                    <li class="plan-feat ">
                                        <span class="feat-text {{ $loop->index < 2 ? 'fw-bold' : '' }}">
                                            {{ $feature }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="plan-cta mt-auto"><a class="cta-btn btn-outline " href="#0">Choisir cette formule</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>