<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('head')

</head>
<body>

<main class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('partials.website')
                @yield('left')
            </div>
            <div class="col-md-7">
                @yield('middle')
            </div>
            <div class="col-md-3">
                @yield('right')

                @include('partials.search-companies')
                @include('partials.search-listings')

            </div>

        </div>
    </div>
</main>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>
