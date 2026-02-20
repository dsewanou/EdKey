@extends('layouts.landing')

@section('title', 'EdKey | Politique des Cookies')

@section('content')
    @include('partials.landing.header')

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1"></div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Politique des Cookies</h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('/') }}"><i
                                    class="bi bi-house icon "></i>Présentation</a></li>
                        <li class="breadcrumb-item active">Cookies</li>
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
                        <h3 class="mb-4">Qu'est-ce qu'un Cookie ?</h3>
                        <p>Un cookie est un petit fichier texte déposé sur votre terminal (ordinateur, tablette, smartphone)
                            lors de la visite d'un site web. Il permet au site de mémoriser des informations sur votre
                            visite.</p>

                        <h3 class="mt-5 mb-4">Utilisation des Cookies sur EdKey</h3>
                        <p>Nous utilisons des cookies pour :</p>
                        <ul>
                            <li>Assurer le bon fonctionnement technique du site.</li>
                            <li>Mémoriser vos préférences d'affichage.</li>
                            <li>Analyser l'audience et l'utilisation du site afin de l'améliorer.</li>
                        </ul>

                        <h3 class="mt-5 mb-4">Gestion des Cookies</h3>
                        <p>Vous pouvez à tout moment choisir de désactiver les cookies via les paramètres de votre
                            navigateur. Notez cependant que cela pourrait altérer votre expérience utilisateur sur notre
                            plateforme.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.landing.footer')
@endsection