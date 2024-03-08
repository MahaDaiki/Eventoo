<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--    Favicons-->
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

         <!-- FontAwesome CSS -->
         <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
     
         <!-- Swiper CSS -->
         <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" integrity="sha384-pzjw8Y+JCSQ9/6KdKEePPxiW0spso++eP4FD4HA6JtuIqMy9e5djCgWXLiJAgZtId" crossorigin="anonymous">
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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                   EvenTo
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <script src="{{ asset('vendors/popper/popper.min.js')}}"></script>
        <script src="{{ asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ asset('vendors/anchorjs/anchor.min.js')}}"></script>
        <script src="{{ asset('vendors/is/is.min.js')}}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{ asset('vendors/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js')}}"></script>
        <script src="{{ asset('vendors/lodash/lodash.min.js')}}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{ asset('assets/js/theme.js')}}"></script>
    
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    </body>
</html>
