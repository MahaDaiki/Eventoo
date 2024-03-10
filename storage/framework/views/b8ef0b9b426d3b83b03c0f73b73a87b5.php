<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evento</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper.min.css')); ?>">
    
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
        <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
    <link rel="manifest" href="<?php echo e(asset('assets/img/favicons/manifest.json')); ?>">
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xSj2hLbg6udzU0VsmI0TwXR7Qg6p6cnJnjZgH4VI5z9ZBwTbWeBpY35pmFUw+1X6thMkfKQK3By+qSNSxV+/pRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" integrity="sha384-pzjw8Y+JCSQ9/6KdKEePPxiW0spso++eP4FD4HA6JtuIqMy9e5djCgWXLiJAgZtId" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Styles -->
        
    </head>
    <body class="antialiased single-event-page">
            <header class="site-header">
                <div class="header-bar">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-10 col-lg-2 order-lg-1">
                                <div class="site-branding">
                                    <div class="site-title">
                                        <a href="#"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo"></a>
                                    </div><!-- .site-title -->
                                </div><!-- .site-branding -->
                            </div><!-- .col -->
            
                            <div class="col-2 col-lg-7 order-3 order-lg-2">
                                <nav class="site-navigation">
                                    <div class="hamburger-menu d-lg-none">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div><!-- .hamburger-menu -->
            
                                    <ul>
                                        <li><a href="<?php echo e('/'); ?>">Home</a></li>
                                        <?php if(Route::has('login')): ?>
                                        <?php if(auth()->guard()->check()): ?>
                                        <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
                                        <?php else: ?>
                                        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                        <?php if(Route::has('register')): ?>
                                        <li><a href="<?php echo e(route('register')); ?>">register</a></li>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    </ul>
                                </nav><!-- .site-navigation -->
                            </div><!-- .col -->
            
                            <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                                <div class="buy-tickets">
                                    <a class="btn gradient-bg" href="<?php echo e(route('events')); ?>">Events</a>
                                </div><!-- .buy-tickets -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container-fluid -->
                </div><!-- .header-bar -->
            
                <div class="page-header single-event-page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <header class="entry-header">
                                    <h1 class="entry-title"><?php echo e($event->title); ?></h1>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
            </header><!-- .site-header -->
    <div class="container">
        <div class="row">
            <div class="col-12 single-event">
                <div class="event-content-wrap">
                    <header class="entry-header flex flex-wrap justify-content-between align-items-end">
                        <div class="single-event-heading">
                            <h2 class="entry-title"><?php echo e($event->title); ?></h2>
    
                            <div class="event-location"><a href="#"><?php echo e($event->location); ?></a></div>
    
                            <div class="event-date"><?php echo e($event->time); ?></div>
                        </div>
    
                    </header>
    
                    <figure class="events-thumbnail">
                        <?php $__currentLoopData = $event->getMedia(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mediaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img   src="<?php echo e($mediaItem->getUrl()); ?>" class=""  alt="Event Image">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </figure>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <div class="tabs">
                    <ul class="tabs-nav flex">
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_details">Details</li>
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_venue">Description</li>
                        <li class="tab-nav flex justify-content-center align-items-center" data-target="#tab_organizers">Organizer</li>
                    </ul>
    
                    <div class="tabs-container">
                        <div id="tab_details" class="tab-content">
                            <div class="flex flex-wrap justify-content-between">
                                <div class="single-event-details">
                                    <div class="single-event-details-row">
                                        <label>Start:</label>
                                        <p><?php echo e($event->time); ?></p>
                                    </div>
    
                                    <div class="single-event-details-row">
                                        <label>Duration:</label>
                                        <p><?php echo e($event->duration); ?></p>
                                    </div>
    
                                    <div class="single-event-details-row">
                                        <label>Available Tickets:</label>
                                        <p><?php echo e($event->disponible_tickets); ?></p>
                                    </div>
    
                                    <div class="single-event-details-row">
                                        <label>Category:</label>
                                        <p><?php echo e($event->category->name); ?></p>
                                    </div>
    
                                   
                                </div>
    
                                <div class="single-event-map">
                                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
    
                        <div id="tab_venue" class="tab-content">
                            <p><?php echo e($event->description); ?></p>
                        </div>
    
                        <div id="tab_organizers" class="tab-content">
                            <p><?php echo e($event->organizer->user->name); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-12">
                <div class="event-tickets">
                    <div class="ticket-row flex flex-wrap justify-content-between align-items-center">
                        <div class="ticket-type flex justify-content-between align-items-center">
                            <h3 class="entry-title">Tickets</h3>
    
                            <div class="ticket-price"><?php echo e($event->disponible_tickets); ?></div>
                        </div>
                        <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                      <div class="flex align-items-center">
                            <div class="number-of-ticket flex justify-content-between align-items-center">
                                <form action="" method="Post">
                                <span class="decrease-ticket">-</span>
                                <input type="number" class="ticket-count" value="1" />
                                <span class="increase-ticket">+</span>
                            </div>
    
                            <div class="clear-ticket-count">Clear</div>
                        </div>
    
                        <input type="submit" class="btn gradient-bg" value="Get Ticket">
                    </form>
                        <?php else: ?>
                      <a class="btn gradient-bg" href="<?php echo e(route('login')); ?>">Login</a>
                <?php endif; ?>
                        <?php endif; ?>
                    </div>
    
                    
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>

    


<footer class="site-footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="<?php echo e('/'); ?>"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo"></a>
                </figure>
                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="#"><i class="bi bi-pinterest"></i></a></li>
                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>
</main>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/jquery.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/masonry.pkgd.min.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/jquery.collapsible.min.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/swiper.min.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/circle-progress.min.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/jquery.countTo.min.js')); ?>'></script>
<script type='text/javascript' src='<?php echo e(asset('assets/js/custom.js')); ?>'></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eQfT0Y9qNQeGdZl5CK5I2ihK6J/RJPypXtkFEl7MOh5deV+bbef5dBo4y5yoSZNf" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-Lz9ATw5Lv+I3r1BXMoOyC63fo2y9KABhMZi1aAFfkX7fFpLGiM3D0JMuXZ+UnF7E" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6gD0NX6PTbhEJ6QF/WokGBR5dFZ1xM2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html><?php /**PATH C:\Users\AMD\Evento\resources\views/eventdetails.blade.php ENDPATH**/ ?>