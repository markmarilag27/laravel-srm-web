<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <title>{{ config('app.name') }} -@stack('title')</title>

    @stack('head_style')

    @vite(['resources/css/main.css', 'resources/js/main.js'])
</head>

<body class="h-full">
    <div id="app" class="min-h-full">
        @if (request()->is('admin/*') || request()->is('admin'))
            @include('partials.admin_top_navigation')
        @endif

        @if (request()->is('admin/*') || request()->is('admin'))
            <div class="container sm:mx-auto py-8">
                @yield('content')
            </div>
        @else
            <div class="container sm:mx-auto md:max-w-screen-md py-8">
                @yield('content')
            </div>
        @endif
    </div>
</body>

</html>
