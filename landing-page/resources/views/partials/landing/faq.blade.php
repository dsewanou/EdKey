<!-- Start  faq-1 section-->
<section class="faq mega-section" id="faq">
    <div class="shape-top-left"></div>
    <div class="shape-bottom-right"></div>
    <div class="pattern-top-end-dir"></div>
    <div class="pattern-bottom-start-dir"></div>
    <div class="container">
        <div class="sec-heading centered">
            <div class="content-area">
                <span class="pre-title wow fadeInUp" data-wow-delay=".2s">FAQs</span>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">
                    <span class='hollow-text'>Questions </span> fréquemment posées
                </h2>
            </div>
        </div>
        <!--Start Accordion List For FAQ-->
        <div class="faq-accordion" id="accordion">
            <div class="row">
                @foreach(array_chunk($faqs, ceil(count($faqs) / 2)) as $chunk)
                    <div class="col-12 col-lg-6">
                        @foreach($chunk as $index => $faq)
                            @php $id = ($loop->parent->index * ceil(count($faqs) / 2)) + $index + 1; @endphp
                            <div class="card mb-2">
                                <div class="card-header" id="heading-{{ $id }}">
                                    <h5 class="mb-0 faq-title">
                                        <button class="btn btn-link faq-btn collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $id }}" aria-expanded="false"
                                            aria-controls="collapse-{{ $id }}">
                                            {{ $faq['question'] }}
                                        </button>
                                    </h5>
                                </div>
                                <div class="collapse" id="collapse-{{ $id }}" aria-labelledby="heading-{{ $id }}"
                                    data-bs-parent="#accordion">
                                    <div class="card-body">
                                        <p class="faq-answer">
                                            {{ $faq['answer'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End  faq-1 section-->