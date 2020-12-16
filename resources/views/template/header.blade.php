<header>
    <div class="header-logo">
        <div class="header-container">
            <a href="{{ URL::to('/') }}"><h2 id="header-logo-text">{{ config('app.name') }}</h2></a>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-container">
            <nav>
                <ul class="page-links">
                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="{{ URL::to('/about') }}">About</a></li>
                    <li><a href="{{ URL::to('/services') }}">Services</a></li>
                    <li><a href="{{ URL::to('/contact') }}">Contact</a></li>
                    <li><a href="{{ URL::to('/pg') }}">Paperless Games</a></li>
                </ul>
                <div class="social-links">
                    <a href="{{ URL::to('/twitter') }}"">
                        <div class="social-link-direct">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </div>
                    </a>
                    <a href="{{ URL::to('/linkedin') }}">
                        <div class="social-link-direct">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </div>
                    </a>
                    <a href="{{ URL::to('/instagram') }}">
                        <div class="social-link-direct">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </div>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>