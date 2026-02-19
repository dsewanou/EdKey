@extends('layouts.landing')

@section('title', 'EdKey | Contactez-nous')

@section('content')

    @include('partials.landing.header')

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1"></div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Contactez-nous</h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('/') }}"><i
                                    class="bi bi-house icon "></i>Accueil</a></li>
                        <li class="breadcrumb-item active">Contactez-nous</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->

    <!-- Start contact-us -->
    <section class="contact-us  mega-section  pb-0" id="contact-us">
        <div class="container">
            <section class="locations-section  mega-section ">
                <div class="sec-heading centered  ">
                    <div class="content-area">
                        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Nos bureaux <span class="hollow-text">à
                                travers</span> le <span class="featured-text">monde</span></h2>
                    </div>
                </div>
                <div class=" contact-info-panel ">
                    <div class="info-section ">
                        <div class="row">
                            @foreach ($offices as $office)
                                <div class="col-12 col-lg-4 mb-4">
                                    <div class="info-panel  wow fadeInUp" data-wow-delay="{{ $office['delay'] }}">
                                        <h4 class="location-title">{{ $office['city'] }}</h4>
                                        <div class="line-on-side "> </div>
                                        <p class="location-address">{{ $office['address'] }}</p>
                                        <div class="location-card  "><i class="bi bi-envelope icon"></i>
                                            <div class="card-content">
                                                <h6 class="content-title">E-mail :</h6><a class="email link"
                                                    href="mailto:{{ $office['email'] }}">{{ $office['email'] }}</a>
                                            </div>
                                        </div>
                                        <div class="location-card  "><i class="bi bi-telephone icon"></i>
                                            <div class="card-content">
                                                <h6 class="content-title">Téléphone :</h6><a class="tel link"
                                                    href="tel:{{ str_replace(' ', '', $office['phone']) }}">{{ $office['phone'] }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section class="map-section  elf-section">
                <div class="sec-heading  centered   ">
                    <div class="content-area">
                        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Retrouvez-nous sur <span
                                class="featured-text">Google Maps</span></h2>
                    </div>
                </div>
                <div class="map-box  wow fadeInUp" data-wow-delay=".6s">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="map-iframe" id="gmap_canvas"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15891.139622998188!2d2.3615286!3d6.3768853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023559385392e27%3A0xe546944883b4c9e7!2sAgla%2C%20Cotonou%2C%20Benin!5e0!3m2!1sen!2sbj!4v1700000000000!5m2!1sen!2sbj"></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact-us-form-section  mega-section  ">
                <div class="row">
                    <div class="col-12 ">
                        <div class="contact-form-panel">
                            <div class="sec-heading centered    ">
                                <div class="content-area">
                                    <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Une question ? <span
                                            class="hollow-text">Nous sommes</span> là pour vous <span
                                            class="featured-text">répondre</span></h2>
                                </div>
                            </div>
                            <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s">
                                <div class="custom-form-area input-boxed">
                                    <!--Form To have user messages-->
                                    <form class="main-form" id="contact-us-form" action="#" method="post"><span
                                            class="done-msg"></span>
                                        @csrf
                                        <div class="row ">
                                            <div class="col-12 col-lg-6">
                                                <div class="   input-wrapper">
                                                    <input class="text-input" id="user-name" name="UserName" type="text" />
                                                    <label class="input-label" for="user-name"> Nom <span
                                                            class="req">*</span></label><span class="b-border"></span><span
                                                        class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="   input-wrapper">
                                                    <input class="text-input" id="user-email" name="UserEmail"
                                                        type="email" />
                                                    <label class="input-label" for="user-email"> E-mail <span
                                                            class="req">*</span></label><span class="b-border"></span><span
                                                        class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="   input-wrapper">
                                                    <input class="text-input" id="msg-subject" name="subject" type="text" />
                                                    <label class="input-label" for="msg-subject"> Sujet <span
                                                            class="req">*</span></label><span class="b-border"></span><span
                                                        class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 ">
                                                <div class="   input-wrapper">
                                                    <textarea class=" text-input" id="msg-text" name="message"></textarea>
                                                    <label class="input-label" for="msg-text"> Votre message <span
                                                            class="req">*</span></label><span
                                                        class="b-border"></span><i></i><span class="error-msg"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 submit-wrapper">
                                                <button class=" btn-solid" id="submit-btn" type="submit"
                                                    name="UserSubmit">Envoyer le message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- End contact-us -->

    @include('partials.landing.footer')

@endsection