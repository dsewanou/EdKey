@extends('layouts.landing')

@section('title', 'EdKey | Mentions Légales')

@section('content')
    @include('partials.landing.header')

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1"></div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Mentions Légales</h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('/') }}"><i
                                    class="bi bi-house icon "></i>Présentation</a></li>
                        <li class="breadcrumb-item active">Mentions Légales</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End inner Page hero-->

    <section class="legal-content mega-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-wrapper p-4 p-md-5 rounded-4 border shadow-sm">
                        <h3 class="mb-4">1. Éditeur du Site</h3>
                        <p>Le site <strong>EdKey</strong> est édité par <strong>AKASI GROUP</strong>, société au capital de
                            [Montant du capital], dont le siège social est situé à Agla Cotonou, 4ème bâtiment derrière le
                            commissariat, Bénin.</p>
                        <p>Responsable de la publication : AKASI GROUP.</p>

                        <h3 class="mt-5 mb-4">2. Hébergement</h3>
                        <p>Le site est hébergé par [Nom de l'hébergeur], [Adresse de l'hébergeur].</p>

                        <h3 class="mt-5 mb-4">3. Propriété Intellectuelle</h3>
                        <p>L'ensemble de ce site relève de la législation internationale sur le droit d'auteur et la
                            propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les
                            documents téléchargeables et les représentations iconographiques et photographiques.</p>

                        <h3 class="mt-5 mb-4">4. Contact</h3>
                        <p>Pour toute question ou demande d'information concernant le site, ou toute notification de contenu
                            inapproprié ou illégal, l'utilisateur peut contacter l'éditeur à l'adresse suivante : <a
                                href="mailto:akasi-group@akasigroup.com">akasi-group@akasigroup.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.landing.footer')
@endsection