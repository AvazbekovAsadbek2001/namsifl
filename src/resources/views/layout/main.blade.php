<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('title', 'namsifl.uz')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        @include('css')
    </head>

    <body>
        @include('header');

        <main class="main">
            @yield('page-title')

            <section id="starter-section" class="starter-section section">
                @yield('section')
            </section>
        </main>

        @include('footer')

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        @include('scripts')
    </body>
</html>
