@extends('layouts.landing')

@section('title', 'flex-IT | Home')

@section('content')

    @include('partials.landing.header')

    <!-- Start Page hero-->
    @include('partials.landing.hero')
    <!-- End Page hero-->

    <!-- Start about Section-->
    @include('partials.landing.about')
    <!-- End about Section-->

    <!-- Start services Section-->
    @include('partials.landing.services')
    <!-- End services Section-->


    <!-- Start stats Section-->
    @include('partials.landing.stats')
    <!-- End stats Section-->

    <!-- Start portfolio-slider Section-->
    @include('partials.landing.portfolio')
    <!-- End portfolio-slider Section-->

    <!-- Start our-clients Section-->
    @include('partials.landing.clients')
    <!-- End our-clients Section-->

    <!-- Start pricing Section-->
    @include('partials.landing.pricing')
    <!-- End pricing Section-->

    <!-- Start testimonials Section-->
    @include('partials.landing.testimonials')
    <!-- End testimonials Section-->

    <!-- Start FAQ Section-->
    @include('partials.landing.faq')
    <!-- End FAQ Section-->

    <!-- Start blog Section-->
    @include('partials.landing.blog')
    <!-- End blog Section-->

    <!-- Start page-footer Section-->
    @include('partials.landing.footer')
    <!-- End page-footer Section-->

@endsection