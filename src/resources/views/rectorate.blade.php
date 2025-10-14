@extends('layout.main')
@section('title')
    Namangan davlat chet tillari instituti
@endsection
@section('css')

@endsection
@section('page-title')
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Rectorate</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Rectorate</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('section')
    <!-- Academics Section -->
    <section id="academics" class="academics section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="faculty-section">
                <div class="section-header text-center mb-5" data-aos="fade-up" data-aos-delay="200">
                    <h3>@lang('rectorate.title')</h3>
                </div>

                <div class="row g-4">

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="faculty-card">
                            <div class="faculty-img">
                                <img src="{{ asset('assets/img/rectorate/rektor.jpg') }}" class="img-fluid">
                            </div>
                            <div class="faculty-content">
                                <h4>@lang('rectorate.rektor_name')</h4>
                                <p class="faculty-position">@lang('rectorate.rektor_position')</p>
                                <div class="faculty-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="faculty-card">
                            <div class="faculty-img">
                                <img src="{{ asset('assets/img/rectorate/yoshlar.jpg') }}" class="img-fluid">
                            </div>
                            <div class="faculty-content">
                                <h4>@lang('rectorate.yoshlar_name')</h4>
                                <p class="faculty-position">@lang('rectorate.yoshlar_position')</p>
                                <div class="faculty-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="faculty-card">
                            <div class="faculty-img">
                                <img src="{{ asset('assets/img/rectorate/oquv.jpg') }}" class="img-fluid">
                            </div>
                            <div class="faculty-content">
                                <h4>@lang('rectorate.oquv_name')</h4>
                                <p class="faculty-position">@lang('rectorate.oquv_position')</p>
                                <div class="faculty-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="faculty-card">
                            <div class="faculty-img">
                                <img src="{{ asset('assets/img/rectorate/ilmiy.jpg') }}" class="img-fluid">
                            </div>
                            <div class="faculty-content">
                                <h4>@lang('rectorate.ilmiy_name')</h4>
                                <p class="faculty-position">@lang('rectorate.ilmiy_position')</p>
                                <div class="faculty-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="faculty-card">
                            <div class="faculty-img">
                                <img src="{{ asset('assets/img/rectorate/ishlar.jpg') }}" class="img-fluid">
                            </div>
                            <div class="faculty-content">
                                <h4>@lang('rectorate.ishlar_name')</h4>
                                <p class="faculty-position">@lang('rectorate.ishlar_position')</p>
                                <div class="faculty-social">
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /Academics Section -->
@endsection
@section('script')

@endsection
