<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Joab77">
        <meta name="robots" content="">
        <meta name="keywords" content="Ymh, Officiel, Music, Bands, Musicians, France, Paris, Creative, Cd, Disk, Buy, ">
        <meta name="description" content="Ymh-Officiel website!">
        <meta property="og:title" content="YMH-Officiel | Website">
        <meta property="og:description" content="Ymh-Officiel website!">
        <meta property="og:image" content="social-image.png">
        <meta name="format-detection" content="telephone=no">
        {{--    <meta name="twitter:title" content="W3Music - Music & Band Bootstrap 5 HTML Template| DexignZone">--}}
        {{--    <meta name="twitter:description" content=" Discover the perfect harmony of creativity with W3Music - Music & Band Bootstrap 5 HTML Template . Elevate your online presence with sleek designs and dynamic features tailored for musicians and bands. Unleash your musical journey today!">--}}
        {{--    <meta name="twitter:image" content="social-image.png">--}}
        {{--    <meta name="twitter:card" content="summary_large_image">--}}
        {{--    <meta name="format-detection" content="telephone=no">--}}

        <link rel="icon" href="{{ asset('favicon.ico') }}" />



        <!-- Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">  <title>YMH-OFFICIEL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
