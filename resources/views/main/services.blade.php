<link rel="stylesheet" href="{{ asset('sass/main/services/services.css') }}">

@extends('template')

@section('content')
    <section class="services">
        <div class="services-details">
            <div class="services-details-img">
                <img src="{{ asset('images/main/services/logo_design.jpg') }}" alt="logo design image">
            </div>
            <div class="services-details-text">
                <h3>Logo Design</h3>
            </div>
        </div>
        <div class="services-details">
            <div class="services-details-img">
                <img src="{{ asset('images/main/services/character_creation.jpg') }}" alt="character creation image">
            </div>
            <div class="services-details-text">
                <h3>Character Creation</h3>
            </div>
        </div>
        <div class="services-details">
            <div class="services-details-img">
                <img src="{{ asset('images/main/services/custom_artwork.jpg') }}" alt="custom artwork image">
            </div>
            <div class="services-details-text">
                <h3>Custom Artwork</h3>
            </div>
        </div>
    </section>
    <section class="services-cta">
        <div class="services-cta-text">
            <p>
                Get in touch
                and we can discuss details in social platforms of your preference.
                My abilities are not limited to these three sections and can
                go above and beyond innovative ideas that you can think of.
                I am truly looking forward to be working with you.
            </p>
            <a href="{{ URL::to('/contact') }}">Get in Touch</a>
        </div>
    </section>
@endsection