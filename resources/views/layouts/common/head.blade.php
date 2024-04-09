<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{config('app.name')}}</title>

    <meta name="description" content="{{config('app.description')}}">
    <meta name="author" content="{{config('app.author')}}">
    {{-- <meta name="robots" content="noindex, nofollow"> --}}

    <!-- Open Graph Meta -->
    <meta property="og:title" content="{{config('app.name')}}">
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:description" content="{{config('app.description')}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/oneui.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->

    @stack('css')
</head>