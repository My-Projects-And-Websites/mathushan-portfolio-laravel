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
            <a href="{{ asset('images/main/index/img1.jpg') }}" class="img1">
                <img src="{{ asset('images/main/index/img1.jpg') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img2.jpg') }}" class="img2">
                <img src="{{ asset('images/main/index/img2.jpg') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img3.jpg') }}" class="img3">
                <img src="{{ asset('images/main/index/img3.jpg') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img4.png') }}" class="img4">
                <img src="{{ asset('images/main/index/img4.png') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img5.png') }}" class="img5">
                <img src="{{ asset('images/main/index/img5.png') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img6.png') }}" class="img6">
                <img src="{{ asset('images/main/index/img6.png') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img7.jpeg') }}" class="img7">
                <img src="{{ asset('images/main/index/img7.jpeg') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img8.jpeg') }}" class="img8">
                <img src="{{ asset('images/main/index/img8.jpeg') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img9.jpeg') }}" class="img9">
                <img src="{{ asset('images/main/index/img9.jpeg') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img10.jpeg') }}" class="img10">
                <img src="{{ asset('images/main/index/img10.jpeg') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img11.png') }}" class="img11">
                <img src="{{ asset('images/main/index/img11.png') }}" alt="">
            </a>
            <a href="{{ asset('images/main/index/img12.png') }}" class="img12">
                <img src="{{ asset('images/main/index/img12.png') }}" alt="">
            </a>
        </div>
    </section>
@endsection