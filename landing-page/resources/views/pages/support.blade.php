@extends('layouts.landing')

@section('title', 'EdKey | Support Technique')

@section('content')
    @include('partials.landing.header')

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1"></div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Support & Assistance</h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('/') }}"><i
                                    class="bi bi-house icon "></i>Présentation</a></li>
                        <li class="breadcrumb-item active">Support</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->

    <!-- Start Support Section -->
    <section class="support-section mega-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="sec-heading">
                        <div class="content-area">
                            <span class="pre-title">Assistance</span>
                            <h2 class="title">Comment pouvons-nous vous <span class="hollow-text">aider ?</span></h2>
                        </div>
                    </div>

                    <div class="support-content wow fadeInUp" data-wow-delay=".4s">
                        <p class="mb-5">Notre équipe d'assistance dédiée est là pour vous garantir une utilisation optimale
                            de la plateforme EdKey. Que vous ayez besoin d'une aide technique ou de conseils d'utilisation,
                            nous sommes à votre disposition.</p>

                        <div class="row g-4 mb-5">
                            <div class="col-md-6">
                                <div class="info-card p-4 h-100 border rounded-4 shadow-sm"
                                    style="background: rgba(var(--clr-main-rgb), 0.03);">
                                    <div class="icon-box mb-3">
                                        <i class="bi bi-headset fs-1 text-primary"></i>
                                    </div>
                                    <h4>Assistance Technique</h4>
                                    <p>Rencontrez-vous un problème technique ? Nos experts interviennent rapidement pour
                                        résoudre vos blocages.</p>
                                    <a href="mailto:support@edkey.com"
                                        class="btn btn-link p-0 text-primary fw-bold text-decoration-none">Ouvrir un ticket
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-card p-4 h-100 border rounded-4 shadow-sm"
                                    style="background: rgba(var(--clr-main-rgb), 0.03);">
                                    <div class="icon-box mb-3">
                                        <i class="bi bi-book fs-1 text-primary"></i>
                                    </div>
                                    <h4>Base de Connaissances</h4>
                                    <p>Consultez nos guides détaillés et tutoriels vidéo pour maîtriser toutes les
                                        fonctionnalités d'EdKey.</p>
                                    <a href="{{ url('/') }}#portfolio"
                                        class="btn btn-link p-0 text-primary fw-bold text-decoration-none">Voir les
                                        ressources <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="contact-methods p-4 rounded-4 shadow-sm">
                            <h4 class="mb-4">Autres moyens de nous contacter</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-circle bg-primary text-white p-2 rounded-circle me-3"
                                            style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Téléphone (Urgence)</h6>
                                            <p class="mb-0">+229 01 95 62 19 19</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-circle bg-primary text-white p-2 rounded-circle me-3"
                                            style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0">Email Direct</h6>
                                            <p class="mb-0">akasi-group@akasigroup.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 mt-5 mt-lg-0">
                    <div class="sidebar p-4 rounded-4 border shadow-sm">
                        <h5 class="mb-4">Questions Fréquentes</h5>
                        <div class="faq-mini-list">
                            @foreach(array_slice($faqs, 0, 3) as $faq)
                                <div class="faq-item mb-4 pb-3 border-bottom">
                                    <h6 class="fw-bold">{{ $faq['question'] }}</h6>
                                    <p class="small mb-0">{{ Str::limit($faq['answer'], 80) }}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ url('/faq') }}" class="btn-solid btn-small w-100">Voir toute la FAQ</a>
                        </div>
                    </div>

                    <div class="cta-box mt-4 p-4 rounded-4 bg-primary text-white text-center">
                        <i class="bi bi-chat-dots fs-1 mb-3 d-block"></i>
                        <h5>Besoin d'une démo ?</h5>
                        <p class="small opacity-75">Demandez une présentation personnalisée pour votre établissement.</p>
                        <a href="{{ url('/contact-us') }}"
                            class="btn-outline btn-small w-100 border-white text-white">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Support Section -->

    @include('partials.landing.footer')
@endsection