<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title', 'Admin') </title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body>
    @include('admin.layout.loader')

    <div id="main-wrapper">

        @include('admin.layout.navHeader')

        @include('admin.layout.header')

        @include('admin.layout.sidebar')

        <div class="content-body">
            <div class="container-fluid">
                @yield('section')
            </div>
        </div>

        @include('admin.layout.footer')
    </div>

    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script src="{{ asset('admin/js/deznav-init.js') }}"></script>
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>

    @yield('script')
</body>
</html>
