<link rel="stylesheet" href="{{ asset('sass/main/about/about.css') }}">

@extends('template')

@section('content')
    <main>
        <ul class="timeline-base">
            <li class="timeline-container">
                <section class="timeline-content row-1-intro">
                    <div class="intro-img" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <img src="{{ asset('images/main/about/me.jpg') }}" alt="Mathushan Suthakaran">
                    </div>
                    <div class="intro-text" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Who Am I</h2>
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
                    <div class="prof-img" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                        <img src="{{ asset('images/main/about/chess-game-img.jpeg') }}" alt="Sample Image">
                    </div>
                    <div class="prof-text" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Profession</h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit ab incidunt 
                            eligendi consectetur? Voluptate, sit velit, recusandae consectetur consequuntur 
                            beatae libero sunt pariatur non fugit voluptatem. Mollitia minima voluptatum 
                            tempora non ducimus exercitationem dolorum ratione perferendis. Amet ut dignissimos 
                            asperiores accusantium, nemo vel obcaecati maxime nobis libero quo molestiae minima 
                            cum ad architecto. Voluptatum voluptates fugit inventore eum reprehenderit ad 
                            excepturi sapiente enim voluptatem dolorem pariatur incidunt corporis placeat magni 
                            eligendi, ipsum aperiam suscipit et totam asperiores neque in qui laborum nobis. Officia 
                            sed iure explicabo aut perferendis, recusandae quae commodi repellat sunt dolorum ipsum 
                            impedit fuga. Delectus, labore excepturi.
                        </p>
                    </div>
                </section>
            </li>
        </ul>
    </main>
@endsection