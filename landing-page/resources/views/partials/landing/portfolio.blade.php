<section class="portfolio mega-section   " id="portfolio">
    <div class="container">
        <div class="sec-heading centered">
            <div class="content-area"><span class=" pre-title       wow fadeInUp "
                    data-wow-delay=".2s">Ressources</span>
                <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Nos <span class='hollow-text'>Ressources</span>
                </h2>
            </div>
        </div>
        <div class="portfolio-wrapper  ">
            <!--a menu of links to show the photos users needs   -->
            <ul class="portfolio-btn-list wow fadeInUp" data-wow-delay=".2s">
                <li class="portfolio-btn active " data-filter="*">Tout</li>
                @foreach($portfolioCategories as $category)
                    <li class="portfolio-btn" data-filter=".{{ $category['slug'] }}">{{ $category['name'] }}</li>
                @endforeach
            </ul>
            <div class="portfolio-group wow fadeIn" data-wow-delay=".4s">
                <div class="row ">
                    @foreach($portfolioItems as $item)
                        <div class="col-12 col-md-6 col-lg-4 portfolio-item {{ $item['category_slug'] }} mb-4">
                            <div class="item resource-card h-100 p-4 d-flex flex-column align-items-center text-center"
                                style="border-radius: 1.25rem; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); backdrop-filter: blur(10px); position: relative; overflow: visible;">
                                <div class="resource-icon mb-4 d-flex align-items-center justify-content-center"
                                    style="width: 70px; height: 70px; background: rgba(var(--clr-main-rgb), 0.1); border-radius: 50%; transition: all 0.4s ease;">
                                    <i class="{{ $item['icon'] }}" style="font-size: 2.2rem; color: var(--clr-main);"></i>
                                </div>
                                <div class="item-info p-0 mb-4 flex-grow-1"
                                    style="position: relative; width: 100%; height: auto; bottom: auto; transform: none; visibility: visible; opacity: 1; pointer-events: auto;">
                                    <h3 class="item-title resource-card-title mb-0"
                                        style="font-size: 1.4rem; font-weight: 700; transform: none; position: relative; padding: 0; background: transparent; height: auto; text-align: center; display: block;">
                                        {{ $item['title'] }}
                                    </h3>
                                </div>
                                <div
                                    class="card-footer-action p-0 pt-3 border-top border-secondary border-opacity-10 w-100 mt-auto">
                                    <a class="cta-link h-100 d-inline-flex align-items-center justify-content-center"
                                        href="{{ $item['url'] ?? '#' }}"
                                        style="color: var(--clr-main); font-weight: 600; text-decoration: none; transition: all 0.3s ease;">
                                        En savoir plus <i class="bi bi-arrow-right ms-2 mt-1 cta-arrow"
                                            style="transition: transform 0.3s ease;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>