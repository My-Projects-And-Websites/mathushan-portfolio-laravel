<link rel="stylesheet" href="{{ asset('sass/main/index/index.css') }}">

@extends('template')

@section('content')
    <section class="intro-text" data-aos="fade-up" data-aos-duration="1400">
        <div class="intro-text-heading">
            <h1>Introducing Mathushan Suthakaran</h1>
        </div>
        <div class="intro-text-par">
            <p>
                I’ve had the opportunity to work on a number of 
                incredible projects that I’m pleased to share. 
                Not only do I enjoy showcasing my work, but also 
                sharing details about the creative process behind 
                each project. Feel free to browse through my portfolio, 
                and get in touch if you have a project in mind that you’d 
                like to explore together.
            </p>
        </div>
        <div class="intro-text-cta">
            <a href="{{ URL::to('/services') }}">Explore</a>
        </div>
    </section>
    <section class="gallery">
        <div class="gallery-img">
            @foreach($images as $image)
            <a href="{{ $image->image }}" class="{{ $image->classNo }}">
                <img src="{{ $image->image }}" alt="{{ $image->title }}">
                <span>{{ $image->title }}</span>
            </a>
            @endforeach
        </div>
    </section>
    <section class="contact">
        <div class="contact-text">
            <h2>Get in Touch</h2>
            <p>
                Need something that I could be of help with?
                Send me questions, details or feedbacks and I'll
                respond to you as soon as I can.
            </p>
        </div>
        <div class="contact-link">
            <a href="{{ URL::to('/contact') }}">Contact</a>
        </div>
    </section>
@endsection