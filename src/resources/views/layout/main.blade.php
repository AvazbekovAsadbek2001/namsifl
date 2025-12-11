<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('title', 'namsifl.uz')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        @include('layout.css')

        @yield('css')
    </head>

    <body>
        @include('layout.header')

        <main class="main">
            @yield('page-title')

            @yield('section')
        </main>

        @include('layout.footer')

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Scripts -->
        @yield('script')
        @include('layout.scripts')
    </body>
</html>
