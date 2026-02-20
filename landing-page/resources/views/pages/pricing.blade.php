@extends('layouts.landing')

@section('title', 'EdKey | Tarifs')

@section('content')

    @include('partials.landing.header')

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1"></div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Tarifs</h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('/') }}"><i
                                    class="bi bi-house icon "></i>Présentation</a></li>
                        <li class="breadcrumb-item active">Tarifs</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->

    <!-- Start  pricing Section-->
    @include('partials.landing.pricing')
    <!-- End  pricing Section-->

    <!-- Start  testimonials Section-->
    @include('partials.landing.testimonials')
    <!-- End  testimonials Section-->

    <!-- Start  our-clients Section-->
    @include('partials.landing.clients')
    <!-- End  our-clients Section-->

    <!-- Start  take-action Section-->
    <section class="take-action elf-section has-dark-bg" id="take-action">
        <div class="overlay-photo-image-bg  " data-bg-img="{{ asset('assets/images/sections-bg-images/2.jpg') }}"
            data-bg-opacity=".25"> </div>
        <div class="cta-wrapper">
            <div class="container">
                <div class="sec-heading  centered mb-0 ">
                    <div class="contentArea"><span class=" pre-title       wow fadeInUp "
                            data-wow-delay=".2s">Contactez-nous</span>
                        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Restons en contact</h2>
                        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Vous avez des questions ou besoin d'un
                            devis personnalisé ? <br>Notre équipe est là pour vous répondre.</p>
                    </div>
                </div>
                <!--Start .see-more-area-->
                <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link"
                        href="{{ url('/contact-us') }}">Contactez-nous</a></div>
                <!--End Of .see-more-area        -->
            </div>
        </div>
    </section>
    <!-- End  take-action Section-->

    @include('partials.landing.footer')

@endsection