<section class="pricing mega-section  " id="pricing-1">
    <div class="container">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">pricing
                    plans</span>
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>affordable</span>
                    pricing plans</h2>
                <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit Omnis <br>id atque dignissimos repellat quae ullam.</p>
            </div>
            <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    " href="#">see all
                    plans<i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="row">
            @foreach($pricingPlans as $plan)
                <div class="col-12  col-md-6 col-xl-3  mx-auto price-plan ">
                    <div class="plan {{ $plan['featured'] ? 'featured' : '' }} wow fadeInUp"
                        data-wow-delay=".{{ $loop->index + 1 }}s">
                        <div class="plan-head"><i class="{{ $plan['icon'] }} plan-icon"></i>
                            <h4 class="plane-name">{{ $plan['name'] }}</h4>
                            <div class="plan-price">
                                <h3 class="price">{{ $plan['price'] }}<sup class="currency-symbol">$</sup></h3><span
                                    class="per">{{ $plan['per'] }}</span>
                            </div>
                        </div>
                        <div class="plan-details">
                            <ul class="plan-list">
                                @foreach($plan['features'] as $feature)
                                    <li class="plan-feat "> <span class="feat-text"> {{ $feature }} </span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="plan-cta"><a class="cta-btn btn-outline " href="#0">select plan </a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>