<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--    Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/img/favicons/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicons/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/img/favicons/favicon-16x16.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicons/favicon.ico')); ?>">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('assets/img/favicons/mstile-150x150.png')); ?>">
    <meta name="theme-color" content="#ffffff">
    <!--    Stylesheets-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/prism/prism.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/theme.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/user.css')); ?>" rel="stylesheet" />

    <link href="<?php echo e(asset('vendors/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
        

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                   EvenTo
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <?php echo e($slot); ?>

            </div>
        </div>
        <script src="<?php echo e(asset('vendors/popper/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/bootstrap/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/anchorjs/anchor.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/is/is.min.js')); ?>"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="<?php echo e(asset('vendors/fontawesome/all.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/swiper/swiper-bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/fontawesome/all.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendors/lodash/lodash.min.js')); ?>"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
    
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    </body>
</html>
<?php /**PATH C:\Users\AMD\Evento\resources\views/layouts/guest.blade.php ENDPATH**/ ?>