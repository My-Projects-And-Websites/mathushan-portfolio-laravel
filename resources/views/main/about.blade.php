<link rel="stylesheet" href="{{ asset('sass/main/about/about.css') }}">

@extends('template')

@section('content')
    <main>
        <ul class="timeline-base">
            <li class="timeline-container">
                <section class="timeline-content row-1-intro">
                    <div class="intro-img">
                        <img src="{{ asset('images/main/about/me.jpg') }}" alt="Mathushan Suthakaran">
                    </div>
                    <div class="intro-text">
                        <h2>This Is Me</h2>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi quos 
                            blanditiis neque, autem molestiae saepe modi? Hic eveniet, aperiam eius 
                            quos excepturi earum commodi, labore laudantium dolorem ratione alias 
                            aspernatur sequi maxime iure quasi incidunt velit neque quaerat tempore 
                            natus nihil minima illo, voluptatem dignissimos? Fugiat quod officiis 
                            sunt dolorum repellendus ea quia repudiandae soluta porro a placeat 
                            repellat laudantium consequuntur eligendi at, magnam harum voluptatem 
                            animi expedita! Esse libero incidunt recusandae laudantium nesciunt 
                            consequatur, beatae ab, rerum doloribus fugit est, voluptatum quasi 
                            quibusdam exercitationem debitis corporis perspiciatis tempora eos quisquam? 
                            Cupiditate accusamus expedita deleniti voluptate ipsam harum? Doloremque, illum.
                        </p>
                    </div>
                </section>
            </li>
            <li class="timeline-container">
                <section class="timeline-content row-2-prof">
                    <div class="prof-img">
                        <img src="" alt="Sample Image">
                    </div>
                    <div class="prof-text">
                        <h2>What Do I Do</h2>
                    </div>
                </section>
            </li>
        </ul>
    </main>
@endsection