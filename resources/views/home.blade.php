<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset("js/manifest.js") }}" defer></script>
    <script src="{{ asset("js/vendor.js") }}" defer></script>
    <script src="{{ asset("js/app.js") }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libs.min.css') }}" rel="stylesheet">
</head>
<body>
<router-view id="app"></router-view>
</body>
</html>

