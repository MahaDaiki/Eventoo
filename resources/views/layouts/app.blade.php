<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--    Favicons-->
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link rel="stylesheet" href="{{ asset('assets/styleadmindash.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xSj2hLbg6udzU0VsmI0TwXR7Qg6p6cnJnjZgH4VI5z9ZBwTbWeBpY35pmFUw+1X6thMkfKQK3By+qSNSxV+/pRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" integrity="sha384-pzjw8Y+JCSQ9/6KdKEePPxiW0spso++eP4FD4HA6JtuIqMy9e5djCgWXLiJAgZtId" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">

    <!-- Styles -->

    <script src="{{ asset('assets/js/custom.js')}}"></script>
<link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json')}}">
    
 
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" style="background-color:#10203F;">
        <div class="min-h-screen ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
        <script type='text/javascript' src='{{ asset('assets/js/jquery.js')}}'></script>
        <script type='text/javascript' src='{{ asset('assets/js/masonry.pkgd.min.js')}}'></script>
        <script type='text/javascript' src='{{ asset('assets/js/jquery.collapsible.min.js')}}'></script>
        <script type='text/javascript' src='{{ asset('assets/js/swiper.min.js')}}'></script>
        <script type='text/javascript' src='{{ asset('assets/js/jquery.countdown.min.js')}}'></script>
        <script type='text/javascript' src='{{ asset('assets/js/circle-progress.min.js')}}'></script>
        <script type='text/javascript' src='{{ asset('assets/js/jquery.countTo.min.js')}}'></script>
        <script type='text/javascript' src='{{ asset('assets/js/custom.js')}}'></script>>
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
</html>
