<section class="about mega-section" id="about">
  <div class="container">
    <!-- Start first about div-->
    <div class="content-block">
      <div class="row">
        <div class="col-12 col-lg-6 d-flex align-items-center order-1 order-lg-0 about-col pad-end wow fadeInUp"
          data-wow-delay="0.6s">
          <div class="text-area">
            <div class="sec-heading light-title">
              <div class="content-area">
                <span class="pre-title wow fadeInUp" data-wow-delay=".2s">{{ $about['vision']['pre_title'] }}</span>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">{!! $about['vision']['title'] !!}</h2>
              </div>
            </div>
            <p class="about-text">{{ $about['vision']['text'] }}</p>
            <div class="info-items-list">
              <div class="row">
                @foreach($about['vision']['features'] as $feature)
                  <div class="col-9 col-xl-6">
                    <div class="info-item">
                      <i class="{{ $feature['icon'] }} info-icon"></i>
                      <div class="info-content">
                        <h5 class="info-title">{{ $feature['title'] }}</h5>
                        <p class="info-text">{{ $feature['text'] }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="cta-area">
              <a class="btn-solid reveal-start"
                href="{{ $about['vision']['cta_url'] }}">{{ $about['vision']['cta_text'] }}</a>
              <div class="signature">
                <div class="signature-name">{{ $about['vision']['signature_role'] }}</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center order-0 order-lg-1 about-col wow fadeInUp"
          data-wow-delay="0.2s">
          <div class="img-area" data-tilt>
            <div class="image"><img class="about-img img-fluid" loading="lazy"
                src="{{ asset($about['vision']['image']) }}" alt="Notre vision"></div>
          </div>
        </div>
      </div>
    </div>
    <!--End first about div-->
    <!-- Start second about div-->
    <div class="content-block">
      <div class="row">
        <div class="col-12 col-lg-6 d-flex align-items-center about-col wow fadeInUp" data-wow-delay="0.2s">
          <div class="img-area">
            <div class="image" data-tilt><img class="about-img img-fluid" loading="lazy"
                src="{{ asset($about['why_choose_us']['image']) }}" alt="Pourquoi EdKey"></div>
          </div>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center about-col pad-start wow fadeInUp" data-wow-delay="0.6s">
          <div class="text-area">
            <div class="sec-heading light-title">
              <div class="content-area">
                <span class="pre-title wow fadeInUp"
                  data-wow-delay=".2s">{{ $about['why_choose_us']['pre_title'] }}</span>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">{!! $about['why_choose_us']['title'] !!}</h2>
              </div>
            </div>
            <p class="about-text">{{ $about['why_choose_us']['text'] }}</p>
            <div class="info-items-list">
              <div class="row">
                @foreach($about['why_choose_us']['items'] as $item)
                  <div class="col-12">
                    <div class="info-item">
                      <span class="info-number">{{ $item['number'] ?? $item['name'] }}</span>
                      <div class="info-content">
                        <h5 class="info-title">{{ $item['title'] }}</h5>
                        <p class="info-text">{{ $item['text'] }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="cta-area">
              <a class="btn-solid"
                href="{{ $about['why_choose_us']['cta_url'] }}">{{ $about['why_choose_us']['cta_text'] }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End second about div-->
  </div>
</section>