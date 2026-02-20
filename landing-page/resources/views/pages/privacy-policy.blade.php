@extends('layouts.landing')

@section('title', 'EdKey | Politique de Confidentialité')

@section('content')
    @include('partials.landing.header')

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1"></div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Politique de Confidentialité</h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('/') }}"><i
                                    class="bi bi-house icon "></i>Présentation</a></li>
                        <li class="breadcrumb-item active">Confidentialité</li>
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
                        <h3 class="mb-4">Introduction</h3>
                        <p>Chez EdKey, nous accordons une importance primordiale à la protection de vos données
                            personnelles. Cette politique de confidentialité vous informe sur la manière dont nous
                            collectons, utilisons et protégeons vos informations.</p>

                        <h3 class="mt-5 mb-4">Collecte des Données</h3>
                        <p>Nous collectons les informations que vous nous fournissez directement, notamment lors de
                            l'utilisation de nos formulaires de contact ou de l'inscription à nos services (nom, e-mail,
                            informations d'établissement).</p>

                        <h3 class="mt-5 mb-4">Utilisation des Données</h3>
                        <p>Vos données sont utilisées pour :</p>
                        <ul>
                            <li>Fournir et améliorer nos services de gestion éducative.</li>
                            <li>Répondre à vos demandes de support et d'information.</li>
                            <li>Garantir la sécurité de votre accès à la plateforme.</li>
                        </ul>

                        <h3 class="mt-5 mb-4">Vos Droits</h3>
                        <p>Conformément à la réglementation, vous disposez d'un droit d'accès, de rectification,
                            d'opposition et de suppression de vos données personnelles. Vous pouvez exercer ces droits en
                            nous contactant à : <a href="mailto:akasi-group@akasigroup.com">akasi-group@akasigroup.com</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.landing.footer')
@endsection