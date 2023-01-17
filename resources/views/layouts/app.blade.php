<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="author" content="Alisher">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/wishlist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    {{-- owl courucel --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    {{-- icons cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        @include('layouts.inc.frontend.navbar')

        <main>
            @yield('content')
        </main>

        @include('layouts.inc.frontend.footer')

    </div>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src=" {{asset('assets/js/main.js')}} "></script>
    <script src=" {{asset('assets/js/jquery-3.6.3.min.js')}} "></script>
    <script src=" {{asset('assets/js/owl.carousel.min.js')}} "></script>
    @yield('script')
    <script>

        window.addEventListener('message', event => {
            alertify.set('notifier','position', 'top-right');
            alertify.success(event.detail.text, event.detail.type);
        });

    </script>

    @livewireScripts

</body>

</html>