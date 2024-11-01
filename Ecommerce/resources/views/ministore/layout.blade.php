<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    {{-- <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token"> --}}
    @yield('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('ministore/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ministore/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{ asset('ministore/js/modernizr.js') }}"></script>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
    tabindex="0">

    @include('ministore.inc.svg')
    @include('ministore.inc.search')
    @include('ministore.inc.navbar')

    @yield('content')

    <script src="{{ asset('ministore/js/jquery-1.11.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('ministore/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ministore/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ministore/js/script.js') }}"></script>
    @yield('scripts')
</body>

</html>
