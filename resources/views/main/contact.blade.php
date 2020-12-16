<link rel="stylesheet" href="{{ asset('sass/main/contact/contact.css') }}">

@extends('template')

@section('content')
    <section class="contact-intro" data-aos="fade-up" data-aos-duration="1500">
        <h1>Get in Touch</h1>
        <!-- <p>Send me a message. Or details for a project.</p> -->
    </section>
    <section class="contact-form"data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
        <form action="{{ URL::to('/message') }}" method="POST" class="form-submit-query">
            <div class="form-name">
                <label for="userName">Name:</label>
                <input type="text" placeholder="" name="userName">
            </div>
            <div class="form-email">
                <label for="userEmail">Email:</label>
                <input type="text" placeholder="" name="userEmail">
            </div>
            <div class="form-query">
                <label for="userQuery">Message:</label>
                <textarea placeholder="" name="userQuery"></textarea>
            </div>
            <div class="form-submit">
                <input type="submit" value="Submit">
            </div>
            @csrf
        </form>
    </section>
@endsection