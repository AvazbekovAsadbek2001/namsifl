<nav class="py-2" style="background: #04415f; color: white;">
    <div class="container">
        <div class="row ">
            <div class="col-md-auto mb-2 mb-md-0" style="border-right: 1px solid white; padding: 0 15px;">
                <i class="bi bi-telephone-fill me-2"></i>
                <strong>Call:</strong> <a href="tel:+998694421167" class="text-white text-decoration-none"> +998 (69) 442 11 67</a>
            </div>
            <div class="col-md-auto">
                <i class="bi bi-envelope-fill me-2"></i>
                <strong>Email:</strong> <a href="mailto:info@namsifl.uz" class="text-white text-decoration-none">info@namsifl.uz</a>
            </div>

            <div class="col-md-auto ms-auto" style="border-right: 1px solid white; padding: 0 15px;">
                <a href="#" style="color: white"><u>Korrupsiyaga qarshi kurash</u></a>
            </div>
                <div class="col-md-auto">
                    <div class="dropdown">
                        <a href="#" class="btn btn-sm dropdown-toggle text-white" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-globe"></i> {{ currentLang()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="langDropdown">
                            @foreach(getLangs() as $item)
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <img src="{{ asset($item->flag) }}" width="20" class="me-2">
                                        {{ $item->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</nav>

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">

        <a href="index.html" class="d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="70">
            <b style="margin-left:10px; font-family: 'Poppins'">Namangan davlat<br> chet tillar instituti</b>
        </a>

        @include('layout.menu')
    </div>
</header>
