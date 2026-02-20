@extends('layouts.landing')

@section('title', 'EdKey | Conditions d\'Utilisation')

@section('content')
    @include('partials.landing.header')

    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero inner-page-hero " id="page-hero">
        <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}"
            data-bg-opacity="1"></div>
        <div class="overlay-color" data-bg-opacity=".75"></div>
        <div class="container">
            <div class="hero-text-area centerd">
                <h1 class="hero-title wow fadeInUp" data-wow-delay=".2s">Conditions d'Utilisation</h1>
                <nav aria-label="breadcrumb ">
                    <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ url('/') }}"><i
                                    class="bi bi-house icon "></i>Présentation</a></li>
                        <li class="breadcrumb-item active">Conditions d'Utilisation</li>
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
                        <h3 class="mb-4">Acceptation des Conditions</h3>
                        <p>L'accès et l'utilisation du site EdKey sont soumis à l'acceptation pleine et entière des
                            présentes conditions d'utilisation par l'utilisateur.</p>

                        <h3 class="mt-5 mb-4">Utilisation du Service</h3>
                        <p>L'utilisateur s'engage à utiliser les services d'EdKey conformément aux lois en vigueur et aux
                            présentes conditions. Toute utilisation abusive ou frauduleuse pourra entraîner la suspension de
                            l'accès au service.</p>

                        <h3 class="mt-5 mb-4">Responsabilité</h3>
                        <p>AKASI GROUP s'efforce de maintenir le site accessible, mais ne peut garantir une disponibilité
                            ininterrompue. Nous ne saurions être tenus responsables des dommages directs ou indirects
                            résultant de l'utilisation ou de l'impossibilité d'utiliser le site.</p>

                        <h3 class="mt-5 mb-4">Modification des Conditions</h3>
                        <p>Nous nous réservons le droit de modifier les présentes conditions à tout moment. Il est conseillé
                            aux utilisateurs de les consulter régulièrement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.landing.footer')
@endsection