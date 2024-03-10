
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
      
            <main>
              
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
                                        <a class="btn gradient-bg" href="{{ route('events') }}">Events</a>
                                    </div><!-- .buy-tickets -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container-fluid -->
                    </div><!-- .header-bar -->
                
                    <header class="site-header">
                        <div class="swiper-container hero-slider">
                            <div class="swiper-wrapper">
                                @forelse ($upcomingEvents as $up)
                                    <div class="swiper-slide" data-date="{{ $up->time }}" style="background: url('assets/images/header-bg.jpg') no-repeat">
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
                    
                                                            <h2 class="entry-title">{{ $up->title }}</h2>
                                                        </div><!--- .entry-header -->
                    
                                                        <div class="entry-footer">
                                                            <a class="btn gradient-bg" href="#">Order here</a>
                                                        </div><!-- .entry-footer -->
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div><!-- .container -->
                                        </div><!-- .hero-content -->
                                    </div><!-- .swiper-slide -->
                                @empty
                                    <h1>Nothing to see</h1>
                                @endforelse
                            </div><!-- .swiper-wrapper -->
                    
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                    
                            <!-- Add Arrows -->
                            <div class="swiper-button-next flex justify-content-center align-items-center">
                                <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">...</svg></span>
                            </div>
                    
                            <div class="swiper-button-prev flex justify-content-center align-items-center">
                                <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">...</svg></span>
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
                                <div class="row">
                                    @forelse ($allEvents as $event)
                                        <div class="ml-5 event-content-wrap positioning-event-1 mb-4 col-md-4">
                                        
                                            <figure>
                                                <a href="#"><img src="assets/images/1.jpg" alt="1"></a>
                                            </figure>
                                            <header class="entry-header">
                                                <h3 class="entry-title">{{ $event->title }}</h3>
                                                <div class="posted-date">{{ $event->time }}</div>
                                            </header>
                                        </div>
                                    @empty
                                        <h1>No events</h1>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
                <div class="homepage-next-events">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="next-events-section-header">
                                    <h2 class="entry-title">Our next events</h2>
                                    <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia.</p>
                                </div>
                            </div>
                        </div>
                
                        <div class="row">
                            @forelse ($upcomingEvents as $upcoming)
                                <div class="col-12 col-sm-6 col-md-4 mb-4">
                                    <div class="next-event-wrap">
                                        <figure>
                                            <a href="#"><img src="assets/images/next1.jpg" alt="1"></a>
                                            <div class="event-rating">{{ $upcoming->duration }}</div>
                                        </figure>
                                        <header class="entry-header">
                                            <h3 class="entry-title">{{ $upcoming->title }}</h3>
                                            <div class="posted-date">{{ $upcoming->time }}</div>
                                        </header>
                                        <footer class="entry-footer">
                                            <a href="#">Buy Tickets</a>
                                        </footer>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <h1>No Coming Events</h1>
                                </div>
                            @endforelse
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
