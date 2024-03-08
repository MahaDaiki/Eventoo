
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evento</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
    
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/style.css')}}">
        <script src="{{ asset('assets/js/custom.js')}}"></script>
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json')}}">
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yV9pL/CSBFmssvE7BoHp1uSKnH4LbIbDkPjFq0Rzy3Qv50l5a1BJsbAcaZlS9fI" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6gD0NX6PTbhEJ6QF/WokGBR5dFZ1xM2" crossorigin="anonymous">

        

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"> --}}
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <main>
                {{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#10203F;">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">EvenTo</a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item d-none d-sm-block"><a class="nav-link" href="{{ url('/dashboard') }}"><i class="fas fa-user text-info me-2"></i></a></li>
                                    @else
                                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav> --}}
                <header class="site-header">
                    <div class="header-bar">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-10 col-lg-2 order-lg-1">
                                    <div class="site-branding">
                                        <div class="site-title">
                                            <a href="{{ '/' }}"><img src="assets/images/logo.png" alt="logo"></a>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col-2 col-lg-7 order-3 order-lg-2">
                                    <nav class="site-navigation">
                                        <div class="hamburger-menu d-lg-none">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div><!-- .hamburger-menu -->
                
                                        <ul>
                                            <li><a href="{{ '/' }}">Home</a></li>
                                            @if (Route::has('login'))
                                            @auth
                                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                            @else
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">register</a></li>
                                            @endif
                                            @endauth
                                        @endif
                                        </ul>
                                    </nav><!-- .site-navigation -->
                                </div><!-- .col -->
                
                                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                                    <div class="buy-tickets">
                                        <a class="btn gradient-bg" href="#">Buy Tickets</a>
                                    </div><!-- .buy-tickets -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container-fluid -->
                    </div><!-- .header-bar -->
                
                    <div class="swiper-container hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-date="2018/05/01" style="background: url('assets/images/header-bg.jpg') no-repeat">
                                <div class="hero-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col flex flex-column justify-content-center">
                                                <div class="entry-header">
                                                    <div class="countdown flex align-items-center">
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dday"></span>
                                                            <label>Days</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dhour"></span>
                                                            <label>Hours</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dmin"></span>
                                                            <label>Minutes</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dsec"></span>
                                                            <label>Seconds</label>
                                                        </div><!-- .countdown-holder -->
                                                    </div><!-- .countdown -->
                
                                                    <h2 class="entry-title">1 We have the best events. <br>Get your tiket now!</h2>
                                                </div><!--- .entry-header -->
                
                                                <div class="entry-footer">
                                                    <a class="btn gradient-bg" href="#">Order here</a>
                                                </div><!-- .entry-footer" -->
                                            </div><!-- .col -->
                                        </div><!-- .container -->
                                    </div><!-- .hero-content -->
                                </div><!-- .swiper-slide -->
                            </div><!-- .swiper-wrapper -->
                
                            <div class="swiper-slide" data-date="2019/05/01" style="background: url('assets/images/header-bg.jpg') no-repeat">
                                <div class="hero-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col flex flex-column justify-content-center">
                                                <div class="entry-header">
                                                    <div class="countdown flex align-items-center">
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dday"></span>
                                                            <label>Days</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dhour"></span>
                                                            <label>Hours</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dmin"></span>
                                                            <label>Minutes</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dsec"></span>
                                                            <label>Seconds</label>
                                                        </div><!-- .countdown-holder -->
                                                    </div><!-- .countdown -->
                
                                                    <h2 class="entry-title">2 We have the best events. <br>Get your tiket now!</h2>
                                                </div><!--- .entry-header -->
                
                                                <div class="entry-footer">
                                                    <a class="btn gradient-bg" href="#">Order here</a>
                                                </div><!-- .entry-footer" -->
                                            </div><!-- .col -->
                                        </div><!-- .container -->
                                    </div><!-- .hero-content -->
                                </div><!-- .swiper-slide -->
                            </div><!-- .swiper-wrapper -->
                
                            <div class="swiper-slide" data-date="2020/05/01" style="background: url('assets/images/header-bg.jpg') no-repeat">
                                <div class="hero-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col flex flex-column justify-content-center">
                                                <div class="entry-header">
                                                    <div class="countdown flex align-items-center">
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dday"></span>
                                                            <label>Days</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dhour"></span>
                                                            <label>Hours</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dmin"></span>
                                                            <label>Minutes</label>
                                                        </div><!-- .countdown-holder -->
                
                                                        <div class="countdown-holder flex align-items-baseline">
                                                            <span class="dsec"></span>
                                                            <label>Seconds</label>
                                                        </div><!-- .countdown-holder -->
                                                    </div><!-- .countdown -->
                
                                                    <h2 class="entry-title">3 We have the best events. <br>Get your tiket now!</h2>
                                                </div><!--- .entry-header -->
                
                                                <div class="entry-footer">
                                                    <a class="btn gradient-bg" href="#">Order here</a>
                                                </div><!-- .entry-footer" -->
                                            </div><!-- .col -->
                                        </div><!-- .container -->
                                    </div><!-- .hero-content -->
                                </div><!-- .swiper-slide -->
                            </div><!-- .swiper-wrapper -->
                        </div>
                
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                
                        <!-- Add Arrows -->
                        <div class="swiper-button-next flex justify-content-center align-items-center">
                            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                        </div>
                
                        <div class="swiper-button-prev flex justify-content-center align-items-center">
                            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                        </div>
                    </div><!-- .swiper-container -->
                </header><!-- .site-header -->
                
                <div class="homepage-info-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-5">
                                <figure>
                                    <img src="assets/images/logo-2.png" alt="logo">
                                </figure>
                            </div>
                
                            <div class="col-12 col-md-8 col-lg-7">
                                <header class="entry-header">
                                    <h2 class="entry-title">What is Agenda and why choose our services?</h2>
                                </header>
                
                                <div class="entry-content">
                                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia volutpat urna. Maecenas ut aliquam purus, quis sodales dolor.</p>
                                </div>
                
                                <footer class="entry-footer">
                                    <a href="#" class="btn gradient-bg">Read More</a>
                                    <a href="#" class="btn dark">Register Now</a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="homepage-featured-events">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="featured-events-wrap flex flex-wrap justify-content-between">
                                    <div class="event-content-wrap positioning-event-1">
                                        <figure>
                                            <a href="#"><img src="assets/images/1.jpg" alt="1"></a>
                                        </figure>
                
                                        <header class="entry-header">
                                            <h3 class="entry-title">Michael Smith in concert</h3>
                
                                            <div class="posted-date">August 25</div>
                                        </header>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-2">
                                        <figure>
                                            <a href="#"><img src="assets/images/2.jpg" alt=""></a>
                                        </figure>
                
                                        <header class="entry-header">
                                            <h3 class="entry-title">Street art fest</h3>
                
                                            <div class="posted-date">November 28</div>
                                        </header>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-3">
                                        <figure>
                                            <a href="#"><img src="assets/images/3.jpg" alt=""></a>
                                        </figure>
                
                                        <header class="entry-header">
                                            <h3 class="entry-title">Anabelle in concert</h3>
                
                                            <div class="posted-date">August 28</div>
                                        </header>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-4 half">
                                        <figure>
                                            <a href="#"><img src="assets/images/events-in-london.jpg" alt=""></a>
                                        </figure>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-5 half">
                                        <figure>
                                            <a href="#"><img src="assets/images/check-july.png" alt=""></a>
                                        </figure>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-6 half">
                                        <figure>
                                            <a href="#"><img src="assets/mages/summer-festivals.jpg" alt=""></a>
                                        </figure>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-7">
                                        <figure>
                                            <a href="#"><img src="assets/images/90.jpg" alt=""></a>
                                        </figure>
                
                                        <header class="entry-header">
                                            <h3 class="entry-title">90’s Disco Night</h3>
                
                                            <div class="posted-date">August 28</div>
                                        </header>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-8">
                                        <figure>
                                            <a href="#"><img src="assets/images/modern.jpg" alt="1"></a>
                                        </figure>
                
                                        <header class="entry-header">
                                            <h3 class="entry-title">Modern Ballet</h3>
                
                                            <div class="posted-date">August 25</div>
                                        </header>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-9">
                                        <figure>
                                            <a href="#"><img src="assets/images/smoke.jpg" alt=""></a>
                                        </figure>
                
                                        <header class="entry-header">
                                            <h3 class="entry-title">Smoke show</h3>
                
                                            <div class="posted-date">August 28</div>
                                        </header>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-10 half">
                                        <figure>
                                            <a href="#"><img src="assets/images/summer-festival.jpg" alt=""></a>
                                        </figure>
                                    </div>
                
                                    <div class="event-content-wrap positioning-event-11 half">
                                        <figure>
                                            <a href="#"><img src="assets/images/autumn.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="homepage-next-events">
                    <div class="container">
                        <div class="row">
                            <div class="next-events-section-header">
                                <h2 class="entry-title">Our next events</h2>
                                <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia.</p>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="next-event-wrap">
                                    <figure>
                                        <a href="#"><img src="assets/images/next1.jpg" alt="1"></a>
                
                                        <div class="event-rating">8.9</div>
                                    </figure>
                
                                    <header class="entry-header">
                                        <h3 class="entry-title">U2 Concert in Detroitt</h3>
                
                                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                                    </header>
                
                                    <div class="entry-content">
                                        <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus.</p>
                                    </div>
                
                                    <footer class="entry-footer">
                                        <a href="#">Buy Tikets</a>
                                    </footer>
                                </div>
                            </div>
                
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="next-event-wrap">
                                    <figure>
                                        <a href="#"><img src="assets/images/next1.jpg" alt="1"></a>
                
                                        <div class="event-rating">7.9</div>
                                    </figure>
                
                                    <header class="entry-header">
                                        <h3 class="entry-title">TED Talk California</h3>
                
                                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                                    </header>
                
                                    <div class="entry-content">
                                        <p>Eget lacus at mauris sagittis varius. Etiam ut ven enatis dui. Nullam tellus risus, pellentesque.</p>
                                    </div>
                
                                    <footer class="entry-footer">
                                        <a href="#">Buy Tikets</a>
                                    </footer>
                                </div>
                            </div>
                
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="next-event-wrap">
                                    <figure>
                                        <a href="#"><img src="assets/images/next1.jpg" alt="1"></a>
                
                                        <div class="event-rating">9.9</div>
                                    </figure>
                
                                    <header class="entry-header">
                                        <h3 class="entry-title">Ultra Music Miami</h3>
                
                                        <div class="posted-date">Saturday <span>Jan 27, 2018</span></div>
                                    </header>
                
                                    <div class="entry-content">
                                        <p>Lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facili.</p>
                                    </div>
                
                                    <footer class="entry-footer">
                                        <a href="#">Buy Tikets</a>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <footer class="site-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <figure class="footer-logo">
                                    <a href="#"><img src="assets/images/logo.png" alt="logo"></a>
                                </figure>
                                <div class="footer-social">
                                    <ul class="flex flex-wrap justify-content-center align-items-center">
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
       
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script type='text/javascript' src='{{ asset('assets/js/jquery.js')}}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/masonry.pkgd.min.js')}}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/jquery.collapsible.min.js')}}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/swiper.min.js')}}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/jquery.countdown.min.js')}}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/circle-progress.min.js')}}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/jquery.countTo.min.js')}}'></script>
    <script type='text/javascript' src='{{ asset('assets/js/custom.js')}}'></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eQfT0Y9qNQeGdZl5CK5I2ihK6J/RJPypXtkFEl7MOh5deV+bbef5dBo4y5yoSZNf" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-Lz9ATw5Lv+I3r1BXMoOyC63fo2y9KABhMZi1aAFfkX7fFpLGiM3D0JMuXZ+UnF7E" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6gD0NX6PTbhEJ6QF/WokGBR5dFZ1xM2" crossorigin="anonymous"></script>

    

    </body>
</html>
