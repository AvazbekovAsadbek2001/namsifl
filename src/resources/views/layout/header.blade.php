<nav class="py-2" style="background: #04415f; color: white;">
    <div class="container">
        <div class="row align-items-center justify-content-center justify-content-md-start text-center text-md-start">
            <div class="col-auto mb-2 mb-md-0" style="border-right: 1px solid white; padding: 0 15px;">
                <i class="bi bi-telephone-fill me-2"></i>
                <strong class="fs-6 fw-normal lh-base">@lang('loyout.call') :</strong>
                <a href="tel:+998694421167" class="text-white text-decoration-none fs-6 fw-normal lh-base">+998 (69) 442 11 67</a>
            </div>
            <div class="col-auto mb-2 mb-md-0">
                <i class="bi bi-envelope-fill me-2"></i>
                <strong class="fs-6 fw-normal lh-base">@lang('loyout.email'):</strong>
                <a href="mailto:info@namsifl.uz" class="text-white text-decoration-none fs-6 fw-normal lh-base">info@namsifl.uz</a>
            </div>
            <div class="col-auto mb-2 mb-md-0 ms-md-auto" style="border-right: 1px solid white; padding: 0 15px;">
                <a href="{{ route('post_category', ['id' => 3]) }}" class="text-white fs-6 fw-normal lh-base">@lang('loyout.corruption')</a>
            </div>
            <div class="col-auto">
                <div class="dropdown">
                    <a href="#" class="btn btn-sm dropdown-toggle text-white fs-6 fw-normal lh-base" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-globe"></i> {{ currentLang()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="langDropdown">
                        @foreach(getLangs() as $item)
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('changeLanguage', ['locale' => $item->code]) }}">
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

        <a href="/" class="d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="70">
            <b style="margin-left:10px; font-family: 'Poppins'">Namangan davlat<br> chet tillar instituti</b>
        </a>

        @include('layout.menu')
    </div>
</header>
