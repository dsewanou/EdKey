<section class="portfolio mega-section   " id="portfolio">
    <div class="container">
        <div class="sec-heading  ">
            <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">portfolio</span>
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Awesome <span
                        class='hollow-text'>portfolio</span></h2>
            </div>
            <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    "
                    href="portfolio-grid.html">see more <i class="bi bi-arrow-right icon "></i></a></div>
        </div>
        <div class="portfolio-wrapper  ">
            <!--a menu of links to show the photos users needs   -->
            <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
                <li class="portfolio-btn active " data-filter="*">All</li>
                @foreach($portfolioCategories as $category)
                    <li class="portfolio-btn" data-filter=".{{ $category['slug'] }}">{{ $category['name'] }}</li>
                @endforeach
            </ul>
            <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
                <div class="row ">
                    @foreach($portfolioItems as $item)
                        <div class="col-12  col-md-6  col-lg-4  portfolio-item {{ $item['category_slug'] }} ">
                            <div class="item   "><a class="portfolio-img-link" href="#"><img
                                        class="portfolio-img   img-fluid " loading="lazy" src="{{ asset($item['image']) }}"
                                        alt="portfolio item photo" /></a>
                                <div class="item-info ">
                                    <h3 class="item-title">{{ $item['title'] }}</h3><i class="bi bi-arrow-right icon "></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>